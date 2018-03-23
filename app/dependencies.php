<?php
use App\Controller\OAIHarvest;

// DIC configuration
$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$container['view'] = function ($c) {
	$settings = $c->get('settings');
	
	$view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    $view->getEnvironment()->addGlobal('session', $_SESSION);
    
    if(getenv('APPLICATION_ENV') == "development"){
    	$view->getEnvironment()->addGlobal('qa_system', "TEST SYSTEM (QA)");
    }
    
    if(getenv('APPLICATION_ENV') == "marcelo"){
    	$view->getEnvironment()->addGlobal('qa_system', "*** dev ***");
    }

    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new Slim\Flash\Messages;
};

// Connect to SQLite3 database
$container['db'] = function ($c) {
	// Create (connect to) SQLite database in file
	$pdo = new PDO('sqlite:../app/data/orda.sqlite3');

	// Set errormode to exceptions
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	return $pdo;
};


// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    
    return $logger;
};

$container['logger_twitter'] = function ($c) {
	$settings = $c->get('settings');

	$logger_twitter = new Monolog\Logger($settings['logger_twitter']['name']);
	$logger_twitter->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger_twitter->pushHandler(new Monolog\Handler\StreamHandler($settings['logger_twitter']['path'], Monolog\Logger::DEBUG));

	return $logger_twitter;
};

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------
$container[Index::class] = function ($c) {
	return new App\Controller\Index($c);
};

$container[Articles::class] = function ($c) {
	return new App\Controller\Articles($c);
};

$container[Categories::class] = function ($c) {
	return new App\Controller\Categories($c);
};

$container[Collections::class] = function ($c) {
	return new App\Controller\Collections($c);
};

$container[Groups::class] = function ($c) {
	return new App\Controller\Groups($c);
};

$container[Feedback::class] = function ($c) {
	return new App\Controller\Feedback($c);
};

$container[Visualisations::class] = function ($c) {
	return new App\Controller\Visualisations($c);
};

$container[OAIHarvest::class] = function ($c) {
	return new App\Controller\OAIHarvest($c);
};

$container[Admin::class] = function ($c) {
	return new App\Controller\Admin($c);
};

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------
$container['figshare'] = function ($c) {
	$settings = $c->get('settings');
	return $settings['figshare'];	
};

$container['twitter'] = function ($c) {
	$settings = $c->get('settings');
	return $settings['twitter'];
};

// Guzzle
$container['guzzle'] = new GuzzleHttp\Client();