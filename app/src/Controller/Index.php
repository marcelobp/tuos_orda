<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\ArticlesModel;
use App\Controller\Articles;

/**
 * Home Page
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Index extends Action {
	
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
     * Action to show the Home Page
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

    	/*
    	 * Get all articles related to collection id=3679363 in order to show in Carroussel
    	 */
    	$result = $this->app->guzzle->request('GET', $this->app->figshare['api.url'].'collections/'.$this->app->figshare['api.carousel_collection'].'/articles');
    	
    	$rsArticles = json_decode($result->getBody());
    	
        foreach($rsArticles as $article){
    		$ArticlesModel = new ArticlesModel();
    			 
    		$ArticlesModel->id    = $article->id;
    		$ArticlesModel->doi   = $article->doi;
    		$ArticlesModel->title = $article->title;
    		$ArticlesModel->url   = $article->url;
    		
    		if($article->thumb){
    			$ArticlesModel->thumb = $article->thumb;
    		} else {
    			$ArticlesModel->thumb_placeholder = \App\Controller\Articles::getThumbPlaceHolder($article->defined_type);
    		}
    			 
    		$articles[] = $ArticlesModel;
    	}
    	
    	$vars = [
    		// attributes to be shown on the layout
    		'page' => ['publications' => $publications, 'articles_highlights' => $articles,  'development' => getenv('APPLICATION_ENV')],
    		'home' => true
    	];
    	
    	$this->app->view->render($response, 'index.twig', $vars);
    }

}
