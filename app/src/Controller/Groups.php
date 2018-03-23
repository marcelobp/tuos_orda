<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controller\Articles;

/**
 * List of Groups
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Groups extends Action {
	
	private $faculties = array();
	
	private $Articles;
	
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
    	
    	$this->faculties = array(
    			2754 => 'Arts and Humanities',
    			2622 => 'Engineering',
    			2670 => 'Medicine Dentistry & Health',
    			2646 => 'Science',
    			2712 => 'Social Sciences'
    	);
    	
    	$this->Articles = new Articles($this->app);
    }

    /**
     * List all Groups
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
    	
    	// get all the University groups
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'account/institution/groups', 
    			[
    					'headers' => [
    							'Content-Type' => ' application/json',
    							'Authorization' => 'token '.$this->app->figshare['api.personal_token']
    					]
    			]
    	);
    	
    	$groups = json_decode($result->getBody());
    	
    	 // if id_parent is setted list only subgroups of parent group
    	if($args['id_parent']){
    		foreach($groups as $group){
    			if($group->parent_id == $args['id_parent']){
    				$group = (array) $group;
    				
    				if($group[id] == $args['id_group']){
    					$group['class'] = "list-group-item-active";
    				}
    				
    				$subGroup[] = $group;
    			}
    		}
    	}
    	
    	if($args['id_group']){
    		//set Paginator parameters
    		$this->Articles->page            = ($args['page'] > 1) ? $args['page'] : 1;
    		$this->Articles->skip            = ($args['page'] - 1) * $this->limit;
    		$this->Articles->order_direction = (isset($args['order_direction'])) ? $args['order_direction'] : 'desc';
    		$this->Articles->order_by        = (isset($args['order_by']))        ? $args['order_by']        : 'published_date';
    		$this->Articles->filter_type     = (isset($args['filter_type']))     ? $args['filter_type']     : 'all';
    		$this->Articles->group_id        = $args['id_group'];
    		
	    	//get Articles related to the informed Group or SubGroup
	    	$articles = $this->Articles->getArticles();
/*
	    	$pagination = [
    					'needed'       => $this->Articles->articles_count > $this->app->figshare['api.page_size'],
    					'count'        => $this->Articles->articles_count,
    					'page'         => $this->Articles->page,
    					'lastpage'     => (ceil($this->Articles->articles_count / $this->app->figshare['api.page_size']) == 0 ? 1 : ceil($this->Articles->articles_count / $this->app->figshare['api.page_size'])),
    					'limit'        => $this->limit,
    					'route'        => $request->getAttribute('route')->getName(),
    					'route_params' => $args
    			];
*/
    	}
   	
    	$vars = [
    			// attributes to be shown on the layout
    			'page' => [
    					'current_page'               => $this->faculties[$args['id_parent']],
    					'collapse_in'                => 'in',
    					'active_'.$args['id_parent'] => 'list-group-item-active',
    					'id_group'                   => $args['id_parent'],
    					'id_sub_group'               => $args['id_group'],
    					'groups'                     => $subGroup,
    					'articles'                   => $articles,
    					'order_direction'            => $this->Articles->order_direction,
    					'order_by'                   => $this->Articles->order_by,
    					'filter_type'                => $this->Articles->filter_type
    			]
    	];
    	 
    	$this->app->view->render($response, 'groups.twig', $vars);
    	    	
    }
    
    /**
     * Count the number of publiactions inside a specific Group
     *
     * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
     *
     * @param object $request
     * @param object $response
     * @param array $args
     *
     * @return $response
     */
    public function countArticles(Request $request, Response $response){
    	$Articles = new Articles($this->app);
    	
    	$Articles->group_id = $_REQUEST['id'];
    	$Articles->articles_count = $Articles->getCount();
    	
    	return '<span class="badge alert-info">'.$Articles->articles_count.'</span>';
    }
    
}
