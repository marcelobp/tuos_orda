<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\CategoriesModel;
use App\Controller\Articles;
use App\Model\ArticlesModel;

/**
 * List of all Categories
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Categories extends Action {
	
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
    }

    /**
     * List all Categories
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
    	
    	$query['institution'] = $this->app->figshare['api.institution'];

    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'/categories', ['query' => $query]);
    	
    	$rsCategories = json_decode($result->getBody());
    	
    	foreach($rsCategories as $categorie){
    		$CategoriesModel = new CategoriesModel();
    		
    		$CategoriesModel->id        = $categorie->id;
    		$CategoriesModel->id_parent = $categorie->parent_id;
    		$CategoriesModel->title     = $categorie->title;
    		
    		$categories[] = $CategoriesModel;
    		
    		$arrCategorie[$categorie->parent_id]['name'] = 'Categorie_'.$categorie->parent_id;
    	}
    	
    	/*
    	 * Array of Master Categories
    	 */
    	$array[] = array('id' => 43,   'text' => 'Astronomy, Astrophysics, Space Science');
    	$array[] = array('id' => 48,   'text' => 'Biological Sciences');
    	$array[] = array('id' => 1101, 'text' => 'Built Environment and Design');
    	$array[] = array('id' => 38,   'text' => 'Chemistry');
    	$array[] = array('id' => 1138, 'text' => 'Commerce, Management, Tourism and Services');
    	$array[] = array('id' => 33,   'text' => 'Earth and Environmental Sciences');
    	$array[] = array('id' => 5,    'text' => 'Engineering');
    	$array[] = array('id' => 142,  'text' => 'Health Sciences');
    	$array[] = array('id' => 50,   'text' => 'Humanities');
    	$array[] = array('id' => 52,   'text' => 'Information And Computing Sciences');
    	$array[] = array('id' => 1221, 'text' => 'Language, Communication and Culture');
    	$array[] = array('id' => 53,   'text' => 'Mathematics');
    	$array[] = array('id' => 40,   'text' => 'Meta Science');
    	$array[] = array('id' => 6,    'text' => 'Physics');
    	$array[] = array('id' => 18,   'text' => 'Psychology');
    	$array[] = array('id' => 26,   'text' => 'Social Science');
    	$array[] = array('id' => 994,  'text' => 'Studies in Creative Arts and Writing');
    	$array[] = array('id' => 1180, 'text' => 'Studies in Human Society');
    	$array[] = array('id' => 1039, 'text' => 'Technology');
    	$array[] = array('id' => 30,   'text' => 'Uncategorised');
    	 
    	/*
    	 * Build array with Children Categories
    	 */
    	foreach($array as $key => $value){
    		$array[$key]['href']        = '#parent'.$value['id'];
    		$array[$key]['state']       = array('expanded' => ($args['id_parent'] == $value['id'] ? true : false));
    		$array[$key]['selectable']  = false;
    		
    		//order subcategories array
    		foreach($rsCategories as $categorie){
    			$arCategories[$categorie->id] = array('title' => $categorie->title, 'parent_id' => $categorie->parent_id, 'id' => $categorie->id);
    			$arCategoriesTitle[] = "'$categorie->title'";
    			
    		}
    		asort($arCategories);
    		
    		//build hierarchy dataset for categories treeview
    		foreach($arCategories as $categorie){
    			$categorie = (object) $categorie;
    			
    			if($categorie->parent_id == $value['id']){
    				$array[$key]['nodes'][] = array(
    												'text' => $categorie->title, 
    												'selectable' => false,
    												'href' => '/categories/articles/'.$categorie->id.'/'.$categorie->title.'/'.$categorie->parent_id.'/1/desc/published_date',
    												'state'=> array('selected' => ($args['id'] == $categorie->id ? true : false))
						    					);
    			}
    		}
    	}
    	
    	$arCategoriesTitle = implode(",", $arCategoriesTitle);
    	
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'active_menu_cat'  => 'list-group-item-active',
    					'title'            => 'Categories',
    					'categories'       => json_encode($array),
    					'categories_title' => $arCategoriesTitle
    					
    			]
    	];
    	 
    	$this->app->view->render($response, 'categories.twig', $vars);
    }
    
    /**
     * List all articles from a specific Categorie
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
    	
    	$CategoriesModel = new CategoriesModel();
    	
    	$this->Articles->order_direction = (isset($args['order_direction'])) ? $args['order_direction'] : 'desc';
    	$this->Articles->order_by        = (isset($args['order_by']))        ? $args['order_by']        : 'published_date';
    	$this->Articles->filter_type     = (isset($args['filter_type']))     ? $args['filter_type']     : 'all';
    	$this->Articles->search_by       = "category";
    	$this->Articles->search_term     = $args['title'];
    	 
    	//set Paginator parameters
    	$this->page = ($args['page'] > 1) ? $args['page'] : 1;
    	$this->skip = ($this->page - 1) * $this->app->figshare['api.page_size'];
    	 
    	$query = array();
    	
    	$query['institution'] = $this->app->figshare['api.institution'];
    	$query['page_size'] = $this->app->figshare['api.page_size'];
    	
    	if($this->page){
    		$query['page'] = $this->page;
    	}
    	
    	if($this->Articles->order_direction){
    		$query['order_direction'] = $this->Articles->order_direction;
    	}
    	
    	if($this->Articles->order_by){
    		$query['order'] = $this->Articles->order_by;
    	}
    	 
   		$query['search_for'] = ":".$this->Articles->search_by.":".$this->Articles->search_term;
    	 
    	if($this->Articles->filter_type && $this->Articles->filter_type != 'all'){
    		$query['search_for'] .=  " AND :item_type:".strtolower($request->getParam('filter_type'));
    	}
    	 
    	$this->Articles->articles_count = $_SESSION['articles_count'];
    	 
    	$query = json_encode($query, JSON_NUMERIC_CHECK);
    	 
    	$result = $this->app->guzzle->request('POST', $this->app->figshare['api.url'].'articles/search', ['body' => $query]);
    	 
    	if(count(json_decode($result->getBody())) > 0){
    		$rsArticles = json_decode($result->getBody());
    		$articles = $this->Articles->getArticles(false, $rsArticles);
    	}
   	 
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'active_menu_cat'   => 'list-group-item-active',
    					'back'              => '/categories/list/'.$args['id'].'/'.$args['id_parent'],
    					'articles'          => $articles,
    					'title'             => $args['title'],
    					'order_direction'   => $args['order_direction'],
    					'order_by'          => $args['order_by'],
    					'filter_type'       => $this->Articles->filter_type,
    					'search_term'       => $args['title'],
    					'search_by'         => $this->Articles->search_by,
    					'page'              => $this->page,
    					'ajax_order'        => true,
    					'filter'            => true,
    					'ajax_search'            => ($args['ajax_categories_search'] ? false : true),
    					'ajax_categories_search' => ($args['ajax_categories_search'] ? true : false)
    			]
    	];
    
    	$this->app->view->render($response, 'categories_articles.twig', $vars);
    }
    
}
