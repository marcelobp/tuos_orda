<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\VisualisationsModel;
use App\Model\ArticlesModel;
use App\Controller\Articles as Articles;
use Symfony\Component\Yaml\Yaml;

/**
 * List of all Visualisations
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Visualisations extends Action {
	
	/**
	 * Method constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param object $app Configuration file
	 *
	 * @return void
	 */	
    public function __construct($app){
	   	parent::__construct($app);
    }

    /**
     * List all Visualisations
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request 
     * @param object $response
     * @param array $args
     *
     * @return $response
     */    
    public function index(Request $request, Response $response, $args){
    
    	//get Visualisation's Collection details
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->app->figshare['api.visualisation_collection']);
    	$visualisation_collection = json_decode($result->getBody());
    	
    	$visualisations = array();
    	$countGeneral   = 0;
    	
    	$query = array();
    	$query['page_size'] = 100;
    	
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->app->figshare['api.visualisation_collection'].'/articles', ['query' => $query]);
    	$rsArticles = json_decode($result->getBody());
    	
    	foreach($rsArticles as $article){
    		$ArticlesModel = new ArticlesModel();
    		
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id);
    		
    		// Set all properties returned from a call to articles/id
    		$ArticlesModel->setArticle(json_decode($result->getBody()));
    		
    		$authors = array();
    		foreach($ArticlesModel->authors as $author){
    			$authors[] = $author->full_name;
    		}
    		
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id.'/files');
    		$rsFiles = json_decode($result->getBody());
    			
    		// Get articles files to find for the visualisation metada file (visualisation.yaml)
    		foreach($rsFiles as $file){
    			
    			if($file->name == 'visualisation.yaml'){
    				$visualisation_info = Yaml::parse(file_get_contents($file->download_url));
    				
    				foreach($visualisation_info as $arVisualisations){
    					$countArticle = 0;
    					
    					foreach($arVisualisations as $visualisation_detail){
	    					$visualisations[$countGeneral]['visualisation_url']     = $visualisation_detail[url];
	    					$visualisations[$countGeneral]['visualisation_embeded'] = $visualisation_detail[type];
	    					$visualisations[$countGeneral]['description']           = $visualisation_detail[description] ? $visualisation_detail[description] : $article->description;
	    					$visualisations[$countGeneral]['title']                 = $visualisation_detail[title] ? $visualisation_detail[title] : $article->title;
	    					$visualisations[$countGeneral]['creators']              = $visualisation_detail[creators] ? implode(", ", $visualisation_detail[creators]) : implode(", ", $authors);
	    					$visualisations[$countGeneral]['article_id']            = $article->id;
	    					$visualisations[$countGeneral]['article_title']         = $article->title;
	    					$visualisations[$countGeneral]['article_url']           = $article->url;
	    					$visualisations[$countGeneral]['position']              = $countArticle;
	    					
	    					if($visualisation_detail[thumb]){
	    						$visualisations[$countGeneral]['thumb'] = $visualisation_detail[thumb];
	    					} elseif($article->thumb) {
	    						$visualisations[$countGeneral]['thumb'] = $article->thumb;
	    					} else {
	    						$visualisations[$countGeneral]['thumb'] = \App\Controller\Articles::getThumbPlaceHolder($article->defined_type);
	    					}
	    					
	    					$countArticle++;
	    					$countGeneral++;
    					}
    				}
    			}
    		}
    	}
    	
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'active_menu_vis'  => 'list-group-item-active',
    					'title'            => 'Visualisation Showcase',
    					'visualisations'   => $visualisations
    			]
    	];
    
    	$this->app->view->render($response, 'visualisations.twig', $vars);
    }
    
    /**
     * View Visualisations
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function view(Request $request, Response $response, $args){
 	
    	$ArticlesModel = new ArticlesModel();
    	
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$args['id']);
    	
    	// Set all properties returned from a call to articles/id
    	$ArticlesModel->setArticle(json_decode($result->getBody()));
    	
    	$authors = array();
    	foreach($ArticlesModel->authors as $author){
    		$authors[] = $author->full_name;
    	}
    	
    	// Get articles files to find for the visualisation metada file (visualisation.yaml)
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$args['id'].'/files');
    	$rsFiles = json_decode($result->getBody());
    	
    	foreach($rsFiles as $file){
    		 
    		if($file->name == 'visualisation.yaml'){
    			$visualisation_info = Yaml::parse(file_get_contents($file->download_url));
    	
    			foreach($visualisation_info as $arVisualisations){
    				$countArticle = 0;
    				
    				foreach($arVisualisations as $visualisation_detail){
    					
    					if($countArticle == $args['position']){
	    					$visualisations[0]['visualisation_url']     = $visualisation_detail[url];
	    					$visualisations[0]['visualisation_embeded'] = $visualisation_detail[type];
	    					$visualisations[0]['description']           = $visualisation_detail[description] ? $visualisation_detail[description] : $ArticlesModel->description;
	    					$visualisations[0]['title']                 = $visualisation_detail[title] ? $visualisation_detail[title] : $ArticlesModel->title;
	    					$visualisations[0]['creators']              = $visualisation_detail[creators] ? implode(", ", $visualisation_detail[creators]) : implode(", ", $authors);
	    					$visualisations[0]['source_code']           = $visualisation_detail[source_code];
	    					$visualisations[0]['article_id']            = $ArticlesModel->id;
	    					$visualisations[0]['article_title']         = $ArticlesModel->title;
	    					$visualisations[0]['article_url']           = $ArticlesModel->url;
	    					
	    					if($ArticlesModel::getTypeDescription($ArticlesModel->defined_type) != "Figure"){
	    						$visualisations[0]['article_doi']       = $ArticlesModel->doi;
	    					} else {
	    						$visualisations[0]['article_doi']       = null;
	    					}
    					}
    			
    					$countArticle++;
    				}
    			}
    			
    		}
    		 
    	}
    	
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'active_menu_vis'   => 'list-group-item-active',
    					'title'             => 'Visualisation Showcase',
    					'left_menu_disable' => true,
    					'visualisations'    => $visualisations
    			]
    	];
    
    	$this->app->view->render($response, 'visualisations_view.twig', $vars);
    }
    
    /**
     * Search for any broken visualisation URL
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function checkurl(Request $request, Response $response, $args){
    
    	//get Visualisation's Collection details
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->app->figshare['api.visualisation_collection']);
    	$visualisation_collection = json_decode($result->getBody());
    	 
    	$visualisations = array();
    	$countGeneral   = 0;
    	unset($msgVisualisationsError);
    	
    	$query = array();
    	$query['page_size'] = 100;
    	
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->app->figshare['api.visualisation_collection'].'/articles', ['query' => $query]);
    	$rsArticles = json_decode($result->getBody());
    	 
    	foreach($rsArticles as $article){
    		$ArticlesModel = new ArticlesModel();
    
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id);
    		$ArticlesModel->setArticle(json_decode($result->getBody()));
    
    		$authors = array();
    		foreach($ArticlesModel->authors as $author){
    			$authors[] = $author->full_name;
    		}
    
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id.'/files');
    		$rsFiles = json_decode($result->getBody());
    		
    		// Get articles files to find for the visualisation metada file (visualisation.yaml)
    		foreach($rsFiles as $file){
    			 
    			if($file->name == 'visualisation.yaml'){
    				$visualisation_info = Yaml::parse(file_get_contents($file->download_url));
    
    				foreach($visualisation_info as $arVisualisations){
    					$countArticle = 0;
    						
    					foreach($arVisualisations as $visualisation_detail){
    						
    						unset($text);
    						
    						$visualisations[$countGeneral]['visualisation_url']     = $visualisation_detail[url];
    						$visualisations[$countGeneral]['title']                 = $visualisation_detail[title] ? $visualisation_detail[title] : $article->title;
    						$visualisations[$countGeneral]['creators']              = $visualisation_detail[creators] ? implode(", ", $visualisation_detail[creators]) : implode(", ", $authors);
    						$visualisations[$countGeneral]['article_id']            = $article->id;
    						$visualisations[$countGeneral]['article_title']         = $article->title;
    						$visualisations[$countGeneral]['article_url']           = $article->url;
    						$visualisations[$countGeneral]['position']              = $countArticle;
    						
    						//check url by curl
    						$this->curl_agent = curl_init($visualisation_detail[url]);
    						curl_setopt($this->curl_agent,  CURLOPT_RETURNTRANSFER, TRUE);
    						
    						/* Get the HTML or whatever is linked in $url. */
    						$this->curl_response = curl_exec($this->curl_agent);
    						
    						/* Check for 404 (file not found). */
    						$httpCode = curl_getinfo($this->curl_agent, CURLINFO_HTTP_CODE);
    						
    						switch ($httpCode) {
    							case 400: $text = 'Bad Request'; break;
    							case 401: $text = 'Unauthorized'; break;
    							case 402: $text = 'Payment Required'; break;
    							case 403: $text = 'Forbidden'; break;
    							case 404: $text = 'Not Found'; break;
    							case 405: $text = 'Method Not Allowed'; break;
    							case 406: $text = 'Not Acceptable'; break;
    							case 407: $text = 'Proxy Authentication Required'; break;
    							case 408: $text = 'Request Time-out'; break;
    							case 409: $text = 'Conflict'; break;
    							case 410: $text = 'Gone'; break;
    							case 411: $text = 'Length Required'; break;
    							case 412: $text = 'Precondition Failed'; break;
    							case 413: $text = 'Request Entity Too Large'; break;
    							case 414: $text = 'Request-URI Too Large'; break;
    							case 415: $text = 'Unsupported Media Type'; break;
    							case 500: $text = 'Internal Server Error'; break;
    							case 501: $text = 'Not Implemented'; break;
    							case 502: $text = 'Bad Gateway'; break;
    							case 503: $text = 'Service Unavailable'; break;
    							case 504: $text = 'Gateway Time-out'; break;
    							case 505: $text = 'HTTP Version not supported'; break;
    						}
    						
    						if($text){
    							$msgVisualisationsError .= "<tr><td>".$article->title."</td>";
    							$msgVisualisationsError .= "<td>".($visualisation_detail[creators] ? implode(", ", $visualisation_detail[creators]) : implode(", ", $authors))."</td>";
    							$msgVisualisationsError .= "<td><a href='https://doi.org/".$article->doi."' target='_blank'>".$article->doi."</a></td>";
    							$msgVisualisationsError .= "<td><a href='".$visualisation_detail[url]."' target='_blank'>".$visualisation_detail[url]."</a></td>";
    							$msgVisualisationsError .= "<td>".$text." (".$httpCode.")</td></tr>";
    						}
    						
    						curl_close($this->curl_agent);
    
    						$countArticle++;
    						$countGeneral++;
    					}
    				}
    			}
    		}
    	}
    	
    	if($msgVisualisationsError == true){
    		$message  = "The following visualisations in ORDA have become inaccessible<br><br>";
    		
    		$message .= "<table cellpadding='2' cellspacing='2' border='1' style='border-style: 1px solid;'>";
    		$message .= "<tr>";
    		$message .= "<td><b>Title</b></td><td><b>Authors</b></td><td><b>DOI</b></td><td><b>Visualisation URL</b></td><td><b>HTTP error code</b></td>";
    		$message .= "</tr>";
    		$message .= $msgVisualisationsError;
    		$message .= "</table>";
    	
    		//to, subject and from
    		$to      = $this->app->settings['email_inaccessible_to'];
    		$subject = " Inaccessible visualisations in ORDA";
    	
    		//headers
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    		$headers .= 'From: ORDA Repository <no-reply@sheffield.ac.uk>' . "\r\n";
    		$headers .= 'X-Mailer: PHP/' . phpversion();
    	
    		mail($to, $subject, $message, $headers);
    	}
    }
}
