<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\ArticlesModel;
use j7mbo\twitter\TwitterAPIExchange;
use Symfony\Component\Yaml\Yaml;
use TheIconic\Tracking\GoogleAnalytics\Analytics;


/**
 * List, Search and View of Articles
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Articles extends Action {
	
	public $articles_count;
	
	public $article_id;
	
	public $group_id;
	
	public $filter_type;
	
	public $limit;
	
	public $order_by;
	
	public $order_direction;
	
	public $page;
	
	public $skip;
	
	public $search_by;
	
	public $search_by_show;
	
	public $search_term;
	

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
    	
    	$this->limit  = $this->app->figshare['api.page_size']; // Number of posts on one page
    	$this->page   = 1;
    }

    /**
     * List all Articles in accordance to the parameters given
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
    	parent::index($request, $response, $args);
		
    	//set Paginator parameters
    	$this->page = ($args['page'] > 1) ? $args['page'] : 1;
    	$this->skip = ($args['page'] - 1) * $limit;
    	 
    	$this->order_direction = (isset($args['order_direction'])) ? $args['order_direction'] : 'desc';
    	$this->order_by        = (isset($args['order_by']))        ? $args['order_by']        : 'published_date';
    	$this->filter_type     = (isset($args['filter_type']))     ? $args['filter_type']     : 'all';

   		//get Articles related to the informed parameters
   		$articles = $this->getArticles();
   		
   		$vars = [
   				// attributes to be shown on the layout
   				'page' => [
   						'current_page'      => $faculties[$args['id_parent']],
   						'active_menu_title' => 'list-group-item-active',
   						'articles'          => $articles,
   						'title'             => 'Titles',
   						'subtitle'          => 'All items',
   						'order_direction'   => $this->order_direction,
   						'order_by'          => $this->order_by,
   						'filter_type'       => $this->filter_type,
   						'load_more_url'     => $this->app->figshare['api.url'].'/articles',
   						'route'             => $request->getAttribute('route')->getName(),
  						'all'               => true
   				],
   				 
   				'pagination' => $pagination,
    		];

    	$this->app->view->render($response, 'articles.twig', $vars);
    }

    /**
     * List all Articles in accordance to the search parameters given
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function search(Request $request, Response $response, $args){
    	//only send information to analytics when page 1
    	if(!$request->getParam('page') OR $request->getParam('page') == 1){
	    	$analytics = new Analytics(true);
	    	
	    	$analytics->setProtocolVersion('1')->setTrackingId('UA-91097129-1')->setClientId('1');
	    	
	    	$analytics->setEventCategory('Search')
	    		->setEventAction($request->getParam('search_term'))
	    		->setEventLabel(($request->getParam('search_by') ? $request->getParam('search_by') : "All fields"))
	    		->sendEvent();
    	}
    	
    	if($request->getParam('search_term')){
    		$this->search_term = $request->getParam('search_term');
    	}
    	
    	if($request->getParam('search_by')){
    		$this->search_by = $request->getParam('search_by');
    		$this->search_by_show = ucfirst($request->getParam('search_by'));
    	} else {
    		$this->search_by_show = 'All fields';
    	}
    	
    	$_SESSION['search_term'] = $request->getParam('search_term');
    	$_SESSION['search_by'] = $this->search_by;
    	$_SESSION['search_by_show'] = $this->search_by_show;
    	
    	if($request->getParam('order_direction')){
    		if($_SESSION['order_direction'] != $request->getParam('order_direction')){
    			$_SESSION['order_direction'] = $request->getParam('order_direction');
    		}
    	}
    	$this->order_direction = (isset($_SESSION['order_direction'])) ? $_SESSION['order_direction'] : 'desc';

    	if($request->getParam('order_by')){
    		if($_SESSION['order_by'] != $request->getParam('order_by')){
    			$_SESSION['order_by'] = $request->getParam('order_by');
    		}
    	}
    	$this->order_by = (isset($_SESSION['order_by'])) ? $_SESSION['order_by'] : 'published_date';
    	
    	if($request->getParam('filter_type')){
    		if($_SESSION['filter_type'] != $request->getParam('filter_type')){
    			$_SESSION['filter_type'] = $request->getParam('filter_type');
    		}
    	}
    	$this->filter_type = (isset($_SESSION['filter_type'])) ? $_SESSION['filter_type'] : 'all';
    	
    	//set Paginator parameters
    	$this->page = ($request->getParam('page') > 1) ? $request->getParam('page') : 1;
    	$this->skip = ($this->page - 1) * $this->app->figshare['api.page_size'];
    	
    	$query = array();
    	 
    	$query['institution'] = $this->app->figshare['api.institution'];
    	$query['page_size'] = $this->app->figshare['api.page_size'];
    	 
    	if($this->page){
    		$query['page'] = $this->page;
    	}
    	 
    	if($this->order_direction){
    		$query['order_direction'] = $this->order_direction;
    	}
    	 
    	if($this->order_by){
    		$query['order'] = $this->order_by;
    	}
    	
    	if($request->getParam('search_term') && !$request->getParam('search_by')){
    		$query['search_for'] = $request->getParam('search_term');
    	}
    	 
    	if($request->getParam('search_by') && $request->getParam('search_term')){
    		$query['search_for'] = ":".strtolower($request->getParam('search_by')).":".$request->getParam('search_term');
    	}
    	
    	if($request->getParam('filter_type') && $request->getParam('filter_type') != 'all'){
    		if($request->getParam('search_by')){
    			$query['search_for'] .=  " AND :item_type:".strtolower($request->getParam('filter_type'));
    		} else {
    			$query['search_for'] =  ":description:".$request->getParam('search_term')." AND :item_type:".strtolower($request->getParam('filter_type'));
    		}
    	}
    	
    	$query = json_encode($query, JSON_NUMERIC_CHECK);
    	
    	$result = $this->app->guzzle->request('POST', $this->app->figshare['api.url'].'articles/search', ['body' => $query]);
    	
    	if(count(json_decode($result->getBody())) > 0){
    		$rsArticles = json_decode($result->getBody());
    		$articles = $this->getArticles(false, $rsArticles);
    	}

    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'articles'               => $articles,
    					'order_direction'        => $this->order_direction,
    					'order_by'               => $this->order_by,
    					'filter_type'            => $this->filter_type,
    					'ajax_order'             => true,
    					'filter'                 => true,
    					'title'                  => 'Search result',
    			        'ajax_search'            => ($args['ajax_categories_search'] ? false : true),
    			        'ajax_categories_search' => ($args['ajax_categories_search'] ? true : false),
    			        'search_term'            => $request->getParam('search_term'),
    			        'search_by'              => $request->getParam('search_by'),
    					'page'                   => $this->page
    					
    			]
    	];
    
    	if($request->getParam('load_more')){
    		return $this->app->view->render($response, 'partials/list_articles_load_more.twig', $vars);
    	} else {
    		$this->app->view->render($response, 'articles.twig', $vars);
    	}
    }
    
    /**
     * Get all Articles in accordance to the parameters given
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function getArticles($url=false, $rsArticles=false){
    	
    	if(!$url){
    		$url = $this->app->figshare['api.url'].'/articles';
    	}
    	
    	if(!$rsArticles){
	    	$query = array();
	    	
	    	$query['institution'] = $this->app->figshare['api.institution'];
	    	$query['page_size'] = $this->app->figshare['api.page_size'];
	    	
	    	if($this->page){
	    		$query['page'] = $this->page;
	    	}
	    	
	    	if($this->order_direction){
	    		$query['order_direction'] = $this->order_direction;
	    	}
	    	
	    	if($this->order_by){
	    		$query['order'] = $this->order_by;
	    	}
	    	
	    	if($this->group_id){
	    		$query['group'] = $this->group_id;
	    	}

	    	$result = $this->app->guzzle->request('GET', $url, ['query' => $query]);
	    	
	    	$rsArticles = json_decode($result->getBody());
    	}
    	
    	foreach($rsArticles as $article){
    		
    		$ArticlesModel = new ArticlesModel();
    	
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id);
    		
    		// Set all properties returned from a call to articles/id
    		$ArticlesModel->setArticle(json_decode($result->getBody()));
    		
    		//verify if there are visualisations related to the article
   			if(in_array('Visualisation', $ArticlesModel->tags)){
    		
   				$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$article->id.'/files');
   				
   				$rsFiles = json_decode($result->getBody());
   				
    			foreach($rsFiles as $file){
    		
    				if($file->name == 'visualisation.yaml'){
    					$visualisation_info = Yaml::parse(file_get_contents($file->download_url));
    			    
    					foreach($visualisation_info as $arVisualisations){
    						$countArticle = 0;
    						unset($arVisualisation);
    		
    						foreach($arVisualisations as $visualisation_detail){
    		
    							$ArticlesModel->visualisations[$countArticle]['visualisation_url']     = $visualisation_detail[url];
    							$ArticlesModel->visualisations[$countArticle]['visualisation_embeded'] = $visualisation_detail[type];
    							$ArticlesModel->visualisations[$countArticle]['title']                 = ($visualisation_detail[title]) ? $visualisation_detail[title] : $article->title;
    							$ArticlesModel->visualisations[$countArticle]['position']              = $countArticle;
    							$ArticlesModel->visualisations[$countArticle]['article_id']            = $article->id;
    								 
    							$countArticle++;
    						}
    					}
    				}
    			}
    		}
			
    		// Get statistics (views, downloads, cites, shares) from an Article
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.stats']."/sheffield/total/article/".$article->id);
    		$ArticlesModel->statistics = json_decode($result->getBody());
    		 
    		$articles[] = $ArticlesModel;
    	}
    	 
    	return $articles;
    }
    
    /**
     * Load more items according to URL and Params
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function load_more(Request $request, Response $response){

    	if($request->getParam('page')){
    		$this->page = $request->getParam('page');
    	}
    	 
    	if($request->getParam('order_direction')){
    		$this->order_direction = $request->getParam('order_direction');
    	}
    	 
    	if($request->getParam('order_by')){
    		$this->order_by = $request->getParam('order_by');
    	}
    	 
    	if($request->getParam('id_group')){
    		$this->group_id = $request->getParam('id_group');
    	}
    	 
    	$articles = $this->getArticles($request->getParam('load_more_url'));
    	 
    	$vars = ['page' => ['articles' => $articles]];
    	 
    	return $this->app->view->render($response, 'partials/list_articles_load_more.twig', $vars);
    }
    
    public function getCount(){

    	$query = array();
    	 
    	$query['institution'] = $this->app->figshare['api.institution'];
    	$query['page_size'] = 1000;
    	 
    	if($this->group_id){
    		$query['group'] = $this->group_id;
    	}
    	
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'/articles', ['query' => $query]);

    	return count(json_decode($result->getBody()));
    }
    
    /**
     * Publish new Articles on Twitter (Open Archives Initiative based)
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function publishTwitter(Request $request, Response $response, $args){
    	
    	$ArticlesModel = new ArticlesModel();
    	
    	// Parse XML examples
    	// var_dump($rNode);
    	// var_dump($rNode->children());
    	// var_dump($rNode->metadata->children('oai_dc', 1));
    	// var_dump($rNode->metadata->children('oai_dc', 1)->dc->children('dc', 1));

    	// Define the period to get new Articles
    	if($this->app->twitter['api.frequence_execution'] > 0){
    		$from = date('Y-m-d', strtotime("-".$this->app->twitter['api.frequence_execution']." day") );
    	}
    	
    	/*
    	 *  Get all the new articles published using OAI (Open Archives Initiative - Protocol for Metadata Harvesting)
    	 *  portal_54 = University code on Figshare
    	 */
    	$response = $this->oaiRequest('ListRecords', $from, null, array('set' => 'portal_54', 'metadataPrefix' => 'oai_dc'));

    	$xml     = simplexml_load_string($response);
    	$xmlNode = $xml->ListRecords;

    	if($xml->error){
    		$this->app->logger_twitter->addInfo($xml->error);
    		return;
    	}

    	// if $resumptionToken is set another call should be done till the result do not return a resumption token anymore
    	$resumptionToken = ($xmlNode->resumptionToken ? $xmlNode->resumptionToken : '');
    	
    	// Fetch results to $recordsTwitter array to be published on Twitter
    	$ArticlesModel->fetchRecords($xmlNode, $recordsTwitter);

    	// If a resumpt token is returned, use it to fetch more results
    	if(isset($resumptionToken)){

    		while ($resumptionToken != '') {
    			$response_token = $this->oaiRequest('ListRecords', null, null, array('resumptionToken' => (string) $resumptionToken), true);

    			$xml_token = simplexml_load_string($response_token);
    			$xmlNodeToken = $xml_token->ListRecords;

    			$resumptionToken = ($xmlNodeToken->resumptionToken ? $xmlNodeToken->resumptionToken : false);

    			// Fetch results to $recordsTwitter array to be published on Twitter
    			$ArticlesModel->fetchRecords($xmlNodeToken, $recordsTwitter);
    		}

    	}

    	/*
    	 * Publish each new Article fetched on Twitter
    	 */
    	$settings = array(
    			'oauth_access_token'        => $this->app->twitter['api.oauth_access_token'],
    			'oauth_access_token_secret' => $this->app->twitter['api.oauth_access_token_secret'],
    			'consumer_key'              => $this->app->twitter['api.consumer_key'],
    			'consumer_secret'           => $this->app->twitter['api.consumer_secret']
    	);

    	$count   = 1;
    	$url     = $this->app->twitter['api.url'].'statuses/update.json';
    	$twitter = new \TwitterAPIExchange($settings);

    	foreach ($recordsTwitter as $recordTwitter) {
    		$postFields = array(
    				'status' => '"' . $recordTwitter['title'] . '..." by ' . $recordTwitter['creator'] . ' just published on #SheffieldORDA http://dx.doi.org/' . $recordTwitter['link_to_article']
    		);
    		
    		try {
    			$response_twitter = $twitter->buildOauth($url, 'POST')->setPostfields($postFields)->performRequest();
   				$response_twitter = json_decode($response_twitter, true);

    			if (!empty($response_twitter["errors"])) {
    				foreach($response_twitter["errors"] as $error){
    					$this->app->logger_twitter->addInfo("Error on Twitter publication {".$recordTwitter['title']."} ".$error['code']." - ".$error['message']);
    				}
    			} else {
    				$this->app->logger_twitter->addInfo((string) $response_twitter . "( ".$recordTwitter['title']." )");
    			}
    		} catch (Exception $e) {
    			$this->app->logger->addInfo($e->getMessage());
    		}

    		// check limit of daily publications on Twitter
    		if($this->app->twitter['api.limit_publications'] > 0 && $count == ($this->app->twitter['api.limit_publications'] - 1)){
    			break;
    		}

    		$count++;
    	}
    	
    	/*
    	 * When a large number of items are published in a short space of time, the twitter bot floods our twitter feed with updates from ORDA.
    	 * https://jira.shef.ac.uk/browse/RI-32
    	 */
    	$dif_publications = count($recordsTwitter) - $this->app->twitter['api.limit_publications'];

    	if($dif_publications > 0){
    		$postFields = array(
    				'status' => 'There have been '.$dif_publications.' more items published on ORDA today! See them all at https://orda.shef.ac.uk/articles/list/1/desc/published_date/all'
    		);
    		
    		try {
    			$response_twitter = $twitter->buildOauth($url, 'POST')->setPostfields($postFields)->performRequest();
    			$response_twitter = json_decode($response_twitter, true);
    		
    			if (!empty($response_twitter["errors"])) {
    				foreach($response_twitter["errors"] as $error){
    					$this->app->logger_twitter->addInfo("Error on Twitter publication {".$recordTwitter['title']."} ".$error['code']." - ".$error['message']);
    				}
    			} else {
    				$this->app->logger_twitter->addInfo((string) $response_twitter . "( ".$recordTwitter['title']." )");
    			}
    		} catch (Exception $e) {
    			$this->app->logger->addInfo($e->getMessage());
    		}
    	}

    }

    
    /**
     * Action to Generate Citation
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $result
     */
    public function citation(Request $request, Response $response){
    	$citation = $this->doiCitation($request->getParam('doi'), $request->getParam('format'));
    	
    	if(strpos($citation, "The requested resource is not available")){
    		$result['message'] = "It looks like we can't fetch the citation for that item yet. It should be available soon though, so try again later.";
    		$result['status'] = false;
    	} else {
    		$result['message'] = $citation;
    		$result['status'] = true;
    	}
   		 
    	echo json_encode($result);
    }
    
    public function citation_new(Request $request, Response $response){
    	 
    	$format = $request->getParam('format');
    	
    	$result = $this->app->guzzle->request('GET', 'http://dx.doi.org/'.$request->getParam('doi'), [
    			'config' => ['curl' => [CURLOPT_AUTOREFERER => true, CURLOPT_FOLLOWLOCATION => true, CURLOPT_RETURNTRANSFER => true]],
    			'headers' => ['Accept' => "text/x-bibliography; style=american-institute-of-physics"]
    	]);

    	$citation = $result->getBody()->read(1024);

    	if(strpos($citation, "The requested resource is not available")){
    		$return['message'] = "It looks like we can't fetch the citation for that item yet. It should be available soon though, so try again later.";
    		$return['status'] = false;
    	} else {
    		$return['message'] = $citation;
    		$return['status'] = true;
    	}
    
    	echo json_encode($return);
    }
    
    /**
     * Action to Generate Citation
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $result
     */
    public function stats(Request $request, Response $response){
	   	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'articles/'.$request->getParam("id"));
    	
    	// Set all properties returned from a call to articles/id
    	$article = json_decode($result->getBody());
    	$article  = (array)$article;
    	
    	$dateDiff = floor((time() - strtotime($article['published_date'])) / (60 * 60 * 24));
    	
    	//daily chart
    	if($dateDiff < 30){
    		$now  = date('Y-m-d');
    		$from = date('Y-m-d', strtotime("-30 days"));
    		
   			$query['start_date'] = $from;
   			$query['end_date'] = $now;
    		 
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.stats'].'/sheffield/timeline/day/views/article/'.$request->getParam("id"), 
    				[
    						'query' => $query,
    						'auth'  => ['sheffield_stats', 'stats_sheffield']
    						
    				]
    			);
    		$objViewsResult = json_decode($result->getBody());
    		

    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.stats'].'/sheffield/timeline/day/downloads/article/'.$request->getParam("id"),
    				[
    						'query' => $query,
    						'auth'  => ['sheffield_stats', 'stats_sheffield']
    		
    				]
    				);
    		$arDownloadsResult = json_decode($result->getBody());

    		 
    		$arViewsResult = (array)$objViewsResult->timeline;
    		ksort($arViewsResult);
    		 
    		if(count($arViewsResult) >= 1){
    			foreach($arViewsResult as $dateView => $views){
    				$date = $dateView."-01";
    				$dateFormat = date("d/M", strtotime($date));
    					
    				if(count((array)$arDownloadsResult->timeline) >= 1){
    					$matchDate = false;
    					foreach($arDownloadsResult->timeline as $dateDownload => $downloads){
    						if($dateDownload == $dateView){
    							$arViews[] = array($dateFormat, $views, $downloads);
    							$matchDate = true;
    						}
    					}
    					if($matchDate === false){
    						$arViews[] = array($dateFormat, $views, 0);
    					}
    				} else {
    					$arViews[] = array($dateFormat, $views, 0);
    				}
    			}
    		}
    	}
    	
    	//monthly chart
    	else {
    		$now  = date('Y-m-d');
    		$from = date('Y-m', strtotime("-6 months"))."-01";
    		
    		$query['start_date'] = $from;
    		$query['end_date'] = $now;

    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.stats'].'/sheffield/timeline/month/views/article/'.$request->getParam("id"),
    				[
    						'query' => $query,
    						'auth'  => ['sheffield_stats', 'stats_sheffield']
    		
    				]
    				);
    		$objViewsResult = json_decode($result->getBody());
    		
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.stats'].'/sheffield/timeline/month/downloads/article/'.$request->getParam("id"),
    				[
    						'query' => $query,
    						'auth'  => ['sheffield_stats', 'stats_sheffield']
    		
    				]
    				);
    		
    		$arDownloadsResult = json_decode($result->getBody());
    		
    		$arViewsResult = (array)$objViewsResult->timeline;
    		ksort($arViewsResult);
    		 
    		if(count($arViewsResult) >= 1){
    			foreach($arViewsResult as $dateView => $views){
    				$date = $dateView."-01";
    				$dateFormat = date("M/y", strtotime($date));
    				 
    				if(count((array)$arDownloadsResult->timeline) >= 1){
    					$matchDate = false;
    					foreach($arDownloadsResult->timeline as $dateDownload => $downloads){
    						if($dateDownload == $dateView){
    							$arViews[] = array($dateFormat, $views, $downloads);
    							$matchDate = true;
    						}
    					}
    					if($matchDate === false){
    						$arViews[] = array($dateFormat, $views, 0);
    					}
    				} else {
    					$arViews[] = array($dateFormat, $views, 0);
    				}
    			}
    		}
    	}
    	
    	echo json_encode($arViews);
    }
    
    /**
     * Function to Run publishTwitter by command line
     * Run: php public/index.php /status GET event=true
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function dispatch(Request $request, Response $response, $args){

    	// ONLY WHEN CALLED THROUGH CLI
    	if (PHP_SAPI !== 'cli') {
    		return $response->withStatus(404)->withHeader('Location', '/404');
    	}

    	if (!$request->getParam('event')) {
    		return $response->withStatus(404)->withHeader('Location', '/404');
    	}

    	$this->publishTwitter($request, $response, $args);

    }
    
    
    /**
     * Get all recently added itens on Figshare repository
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return array $recordsTwitter
     */
    public function getRecentlyAdded(){
    	$ArticlesModel = new ArticlesModel();
    	 
    	// Define the period to get new Articles
    	if($this->app->twitter['api.frequence_execution'] > 0){
    		$from = date('Y-m-d', strtotime("-".$this->app->twitter['api.frequence_execution']." day") );
    	}
    	 
    	/*
    	 *  Get all the new articles published using OAI (Open Archives Initiative - Protocol for Metadata Harvesting)
    	 *  portal_54 = University code on Figshare
    	 */
    	$response = $this->oaiRequest('ListRecords', null, null, array('set' => 'portal_54', 'metadataPrefix' => 'oai_dc'));
    	 
    	$xml     = simplexml_load_string($response);
    	$xmlNode = $xml->ListRecords;
    	 
    	if($xml->error){
    		$this->app->logger_twitter->addInfo($xml->error);
    		return;
    	}
    	 
    	// if $resumptionToken is set another call should be done till the result do not return a resumption token anymore
    	$resumptionToken = ($xmlNode->resumptionToken ? $xmlNode->resumptionToken : '');
    	 
    	// Fetch results to $recordsTwitter array to be published on Twitter
    	$ArticlesModel->fetchRecords($xmlNode, $recordsTwitter);
    	
    	/*
    	// If a resumptiontoken is returned, use it to fetch more results
    	if(isset($resumptionToken)){
    		 
    		while ($resumptionToken != '') {
    			$response_token = $this->oaiRequest('ListRecords', null, null, array('resumptionToken' => (string) $resumptionToken), true);
    			 
    			$xml_token = simplexml_load_string($response_token);
    			$xmlNodeToken = $xml_token->ListRecords;
    			 
    			$resumptionToken = ($xmlNodeToken->resumptionToken ? $xmlNodeToken->resumptionToken : false);
    			 
    			// Fetch results to $recordsTwitter array to be published on Twitter
    			$ArticlesModel->fetchRecords($xmlNodeToken, $recordsTwitter);
    		}
    	}*/
    	 
    	return $recordsTwitter;
    }
    
    public function recently_added(Request $request, Response $response){
		/*
		 * Get recently added itens
		 */
    	if(!isset($_SESSION['recently_added'])){
    		$_SESSION['recently_added'] = $this->getRecentlyAdded();
    	}
    	$recordsTwitter = $_SESSION['recently_added'];

		$count = 0;
		$recently_added = "<div class='panel-body pre-scrollable'>";
		
		if(is_array($recordsTwitter)){
			foreach($recordsTwitter as $publication){
				$date = strtotime($publication['date']);
	            $recently_added .= "
				      <h5>
				      <span class='glyphicon glyphicon-tag'></span><small><b> ".$publication['type']." </b> </small> <br>
				      <a href='http://dx.doi.org/".$publication['link_to_article']."' target='_blank'> '".$publication['title']."' </a>
				      <small> by ".$publication['creator']." on ".date("d/m/Y h:i A", $date)."</small>
				      </h5>
				";
				
				$count++;
				if($count == $this->app->twitter['api.recently_added'])
					break;
			}
		} else {
			$recently_added .= "No recently added items to list";
		}
		
		$recently_added .= "</div>";
		
		return $recently_added;
    }

}
