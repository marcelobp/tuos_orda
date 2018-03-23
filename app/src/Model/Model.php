<?php
namespace App\Model;

use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Model {
	
	protected $app;
	
	protected $pdo;

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
        $this->pdo = $this->app->get("db");
    }
}
