<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Action {

	protected $app;

	private $curl_agent;
	
	private $curl_response;
	
	private $curl_response_json;
	
	private $url;
	
	private $url_params;
	
	private $limit;
	
	public $count;

	/**
	 * Class constructor
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param object $app Configuration file
	 *
	 * @return void
	 */
    public function __construct($app){
        $this->app = $app;
        
        $this->limit = $this->app->figshare['api.page_size']; // Number of posts on one page
        
        $this->url_params = array(
        	'institution' => $this->app->figshare['api.institution'],
        	'page_size'   => $this->app->figshare['api.page_size']
        );
    }
    
    /**
     * Unset search sessions when the route is differente from 'search'
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     *
     * @return void
     */
    public function index(Request $request, Response $response, $args){
    	
    	if($request->getAttribute('route')->getName() == 'home'){
	    	unset($_SESSION['articles_count']);
	    	unset($_SESSION['articles_search_count']);
	    	unset($_SESSION['order_direction']);
	    	unset($_SESSION['order_by']);
	    	unset($_SESSION['search_by']);
	    	unset($_SESSION['filter_type']);
	    	unset($_SESSION['search_by_show']);
	    	unset($_SESSION['session_term']);
	    	unset($_SESSION['recently_added']);
    	} 
    	
    	else if($request->getAttribute('route')->getName() != 'search'){
	    	 unset($_SESSION['search_by_show']);
	    	 unset($_SESSION['search_by']);
	    	 unset($_SESSION['search_term']);
    	}
    }

    /**
     * Method httpGet - Call an url using cURL
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $action [Url to be called]
     * @param object $args [Parameters]
     * @param object $personal_token [Personal token to be used in case of secure authentication]
     *
     * @return void
     */
	public function httpGet_old($action, $args=array(), $personal_token=false, $stats=false){
		
		if($this->count == true){
			$arCount = $this->url_params;
			$arCount['page_size'] = 1000;
			$args = array_merge($args, $arCount);
		} else {
			$args = array_merge($this->url_params, $args);
		}
		
		if($stats == false){
			if(is_array($args)){
				$this->url = $this->app->figshare['api.url']. $action . '?' . http_build_query($args);
			} else {
				$this->url = $this->app->figshare['api.url']. $action;
			}
		} else {
			$this->url = $this->app->figshare['api.stats']."/sheffield/". $action;
		}

		$this->curl_agent = curl_init();

		curl_setopt($this->curl_agent, CURLOPT_URL, $this->url);
		curl_setopt($this->curl_agent, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl_agent, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		if($personal_token === true){
			curl_setopt($this->curl_agent, CURLOPT_HTTPHEADER, array('Authorization: token '.$this->app->figshare['api.personal_token'] ));
		}
		
		if($args['username'] && $args['password']){
			curl_setopt($this->curl_agent, CURLOPT_USERPWD, $args['username'] . ":" . $args['password']);
		}

		$this->curl_response      = curl_exec($this->curl_agent);
		$this->curl_response_json = json_decode($this->curl_response);

		curl_close($this->curl_agent);

		return $this->curl_response_json;
	}

	/**
	 * Method httpPost - Call an url using cURL
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param object $action [Url to be called]
	 * @param object $args [Parameters]
	 *
	 * @return void
	 */
	public function httpPost_old($action, $args=null){
	
		$this->url = $this->app->figshare['api.url']. $action;
		
		if($this->count === true){
			
			$args['page_size'] = 10;
			
			if($args['search_by']){
				
				if($args['filter_type'] && $args['filter_type'] != 'all'){
					$data = array(
							"institution" => 54,
							"page_size" => $args['page_size'],
							"search_for" => ":".strtolower($args['search_by']).":".$args['search_term']." AND :item_type:".strtolower($args['filter_type'])
					);
				} else {
					$data = array(
							"institution" => 54,
							"page_size" => $args['page_size'],
							"search_for" => ":".strtolower($args['search_by']).":".$args['search_term']
					);
				}
			} else {
				
				if($args['filter_type'] && $args['filter_type'] != 'all'){
					$data = array(
							"institution" => 54,
							"page_size" => $args['page_size'],
							"search_for" => ":description:".$args['search_term']." AND :item_type:".strtolower($args['filter_type'])
					);
				} else {
					$data = array(
							"institution" => 54,
							"page_size" => $args['page_size'],
							"search_for" => $args['search_term']
					);
				}
			}
		} else {
			
			if($args['search_by']){
				if($args['filter_type'] && $args['filter_type'] != 'all'){
					$data = array(
							"institution" => 54,
							//"page_size" => $args['page_size'],
							"page" => $args['page'],
							"order_direction" => $args['order_direction'],
							"order" => $args['order_by'],
							"search_for" => ":".strtolower($args['search_by']).":".$args['search_term']." AND :item_type:".strtolower($args['filter_type'])
					);
				} else {
					$data = array(	
								"institution" => 54, 
								//"page_size" => $args['page_size'], 
								"page" => $args['page'], 
								"order_direction" => $args['order_direction'], 
								"order" => $args['order_by'], 
								"search_for" => ":".strtolower($args['search_by']).":".$args['search_term']
							);
				}
			} else {
				if($args['filter_type'] && $args['filter_type'] != 'all'){
					$data = array(
							"institution" => 54,
							//"page_size" => $args['page_size'],
							"page" => $args['page'],
							"order_direction" => $args['order_direction'],
							"order" => $args['order_by'],
							"search_for" => ":description:".$args['search_term']." AND :item_type:".strtolower($args['filter_type'])
					);
				} else {
					$data = array(
							"institution" => 54,
							//"page_size" => $args['page_size'],
							"page" => $args['page'],
							"order_direction" => $args['order_direction'],
							"order" => $args['order_by'],
							"search_for" => $args['search_term']
					);
				}
			}
		}
		
		$data_string = json_encode($data);
		
		$this->curl_agent = curl_init("https://api.figshare.com/v2/articles/search");
		curl_setopt($this->curl_agent, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($this->curl_agent, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl_agent, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($this->curl_agent, CURLOPT_POSTFIELDS, $data_string);
	
		// execute!
		$this->curl_response = curl_exec($this->curl_agent);
		$this->curl_response_json = json_decode($this->curl_response);

		// close the connection, release resources used
		curl_close($this->curl_agent);
			
		return $this->curl_response_json;
	}
	
	/**
	 * Method oaiRequest - OAI-PMH requests
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param  \DateTime $from   An optional 'from' date for selective harvesting
     * @param  \DateTime $until  An optional 'from' date for selective harvesting
     * @param  string    $set    An optional setSpec for selective harvesting
	 *
	 * @return void
	 */
	public function oaiRequest($action, $from=null, $until=null, $args, $token=false){

		$this->url = $this->app->figshare['api.oai']. '?verb='.$action .'&'. http_build_query($args);

		if($from){
			$this->url .= "&from=".$from."T13:00:00Z";
		}
		if($until){
			$this->url .= "&until=".$until;
		}

		$this->curl_agent = curl_init();

		curl_setopt($this->curl_agent, CURLOPT_URL, $this->url);
		curl_setopt($this->curl_agent, CURLOPT_RETURNTRANSFER, true);

		$this->curl_response = curl_exec($this->curl_agent);
		
		curl_close($this->curl_agent);

		return $this->curl_response;
	}
	
	/**
	 * Method httpPost - Call an url using cURL
	 *
	 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
	 *
	 * @param object $action [Url to be called]
	 * @param object $args [Parameters]
	 *
	 * @return void
	 */
	public function doiCitation($doi, $format = 'apa'){
		$this->curl_agent = curl_init();

		$header[0]  = "Accept: text/x-bibliography; style=$format";
		
		curl_setopt($this->curl_agent, CURLOPT_URL, "http://dx.doi.org/".$doi);
		curl_setopt($this->curl_agent, CURLOPT_HTTPHEADER, $header);
		curl_setopt($this->curl_agent, CURLOPT_AUTOREFERER, true);
		curl_setopt($this->curl_agent, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl_agent, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->curl_agent, CURLOPT_TIMEOUT, 10);
		
		$this->curl_response = curl_exec($this->curl_agent);
		
		curl_close($this->curl_agent);

		return $this->curl_response;
	}

}
