<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\CollectionsModel;
use App\Controller\Articles;

/**
 * List of all Collections
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Collections extends Action {
	
	public $id;
	
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
    	$this->Articles = new Articles($this->app);
    	
    	$this->limit  = $this->app->figshare['api.page_size']; // Number of posts on one page
    	$this->page   = 1;
    }

    /**
     * List all Collections typed as Conference
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function conferences(Request $request, Response $response, $args){
    	parent::index($request, $response, $args);
    	
    	//Get information from Conferences group (ID 8932)
    	$args['group'] = $this->app->figshare['api.conferences'];
    
    	$collections =  $this->getCollections($args);
    
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'title'            => 'Conferences',
    					'active_menu_conf' => 'list-group-item-active',
    					'collections'      => $collections
    			]
    	];
    
    	$this->app->view->render($response, 'conferences.twig', $vars);
    }
    
    /**
     * List all Collections typed as Conference
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function institutes(Request $request, Response $response, $args){
    	parent::index($request, $response, $args);
    	
    	//Get information from Institutes group (ID 9835)
    	$args['group'] = $this->app->figshare['api.institutes'];
    
    	$collections =  $this->getCollections($args);
    
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'title'            => 'Institutes',
    					'active_menu_inst' => 'list-group-item-active',
    					'collections'      => $collections
    			]
    	];
    
    	$this->app->view->render($response, 'institutes.twig', $vars);
    }
    
    /**
     * List all articles from a specific Collection
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function articles(Request $request, Response $response, $args){
    	$this->id = $args['id'];
    	$Collection = $this->getCollection();
    	 
    	$args['page'] = ($args['page'] > 1) ? $args['page'] : 1;
    	$limit        = $this->app->figshare['api.page_size']; // Number of posts on one page
    	$skip         = ($args['page'] - 1) * $limit;
    	 
    	$collection[] = $Collection;
    	
    	//set Paginator parameters
    	$this->Articles->page            = ($args['page'] > 1) ? $args['page'] : 1;
    	$this->Articles->order_direction = (isset($args['order_direction'])) ? $args['order_direction'] : 'desc';
    	$this->Articles->order_by        = (isset($args['order_by']))        ? $args['order_by']        : 'published_date';
    	$this->Articles->filter_type     = (isset($args['filter_type']))     ? $args['filter_type']     : 'all';
    	
    	//get Articles related to the informed Group or SubGroup
    	$articles = $this->Articles->getArticles($this->app->figshare['api.url'].'collections/'.$args['id'].'/articles');
/*    
    	$pagination = [
    			'needed'       => 100 > $limit,
    			'count'        => $CollectionsModel->articles_count,
    			'page'         => $args['page'],
    			'lastpage'     => (ceil($Collection->articles_count / $limit) == 0 ? 1 : ceil($Collection->articles_count / $limit)),
    			'limit'        => $limit,
    			'route'        => $request->getAttribute('route')->getName(),
    			'route_params' => $args
    	];
    	*/
    	if($request->getAttribute('route')->getName() == 'institutes_articles'){
    		$active_menu = 'active_menu_inst';
    	}

    	if($request->getAttribute('route')->getName() == 'collections_articles'){
    		$active_menu = 'active_menu_conf';
    	}
    	 
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					$active_menu    => 'list-group-item-active',
    					'articles'      => $articles,
    					'title'         => $Collection->title,
    					'conference_id' => $Collection->id,
    					'no_order'      => true,
    					'load_more_url' => $this->app->figshare['api.url'].'collections/'.$args['id'].'/articles',
    					'collections'   => $collection
    			],
    			 
    			'pagination' => $pagination,
    	];
    	 
    	$this->app->view->render($response, 'conference_articles.twig', $vars);
    }

    /**
     * Return collections from a specific group
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param array $args
     *
     * @return array $collections
     */
    private function getCollections($args){
    	
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections', ['query' => array('group' => $args['group'])]);
    	 
    	$rsColletions = json_decode($result->getBody());
    	 
    	foreach($rsColletions as $collection){
    		$this->id = $collection->id;
    		$collections[] = $this->getCollection();
    	}

    	return $collections;
    }
    
    private function getCollection(){
    	$CollectionsModel = new CollectionsModel();
    	
    	if($this->id){
    		$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->id);
    		$rsColletion = json_decode($result->getBody());
    		 
    		$CollectionsModel->id             = $rsColletion->id;
    		$CollectionsModel->title          = $rsColletion->title;
    		$CollectionsModel->doi            = $rsColletion->doi;
    		$CollectionsModel->description    = $rsColletion->description;
    		$CollectionsModel->articles_count = $rsColletion->articles_count;
    		$CollectionsModel->published_date = date("d M Y - H:m:s", strtotime($rsColletion->published_date));
    		
    		unset($authors);
    		unset($categories);
    		unset($tags);
    		
    		foreach($rsColletion->authors as $author){
    			$authors[] = $author->full_name;
    		}
    		 
    		foreach($rsColletion->categories as $categorie){
    			$categories[] = $categorie->title;
    		}
    		
    		foreach($rsColletion->tags as $tag){
    			$tags[] = $tag;
    		}
    		 
    		$CollectionsModel->authors    =  implode(", ", $authors);
    		$CollectionsModel->categories =  implode(", ", $categories);
    		$CollectionsModel->tags       =  implode(", ", $tags);
    		
    		return $CollectionsModel;
    	}
    	
    }
}
