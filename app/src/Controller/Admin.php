<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Home Page
 *
 * @author Marcelo Paulino <m.paulino@sheffield.ac.uk>
 *
 */
class Admin extends Action {
	
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
     * Action to show the Admin Home Page
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
    	echo "<h1>You are authenticated as ".$_SERVER['HTTP_CAS_USER']."</h1>";
    	
    	echo "<br><br><a href='https://www.sheffield.ac.uk/nap/logout'>Logout</a>";
    	
    	
    	//$this->app->view->render($response, 'index.twig', $vars);
    }
}
