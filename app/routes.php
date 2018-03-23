<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * MAIN PAGE
 */
$app->group('/', function() use ($app) {
	$app->get('', 'App\Controller\Index:index')->setName('home');
});    
	
/**
 * FEEDBACK Route
 */
$app->group('/feedback', function() use ($app) {
	$app->post('/insert', 'App\Controller\Feedback:index')->setName('feedback');
});

/**
 * OAI Harvest Route
 */
$app->group('/oaiharvest', function() use ($app) {
	$app->get('/', 'App\Controller\OAIHarvest:index')->setName('oaiharvest');
});
	
/**
 * ADMIN ROUTE
 */
$app->get('/admin', 'App\Controller\Admin:index')->setName('admin');
	
/**
 * ARTICLES Route 
 */
$app->group('/articles', function() use ($app) {
	$app->get('/list[/{order_direction}[/{order_by}[/{filter_type}]]]', 'Articles:index')->setName('articles_list');
	$app->get('/view[/{id}]', 'Articles:index')->setName('articles_view');
	$app->get('/twitter', 'Articles:publishTwitter')->setName('publish_on_twitter');
	$app->post('/search', 'Articles:search')->setName('search');
	$app->post('/citation', 'Articles:citation')->setName('citation');
	
	$app->get('/stats[/{id}]', 'Articles:stats')->setName('stats');
	$app->get('/recently_added', 'Articles:recently_added')->setName('recently_added');
	
	$app->post('/load_more', 'Articles:load_more')->setName('test_load_more');
});

/**
 * CATEGORIES Route
 */
$app->group('/categories', function() use ($app) {
	$app->get('/', 'Categories:index')->setName('categories_list');
	$app->get('/list[/{id}[/{id_parent}]]', 'Categories:index')->setName('categories_list_parent');
	$app->get('/articles[/{id}[/{title}[/{id_parent}[/{page}[/{order_direction}[/{order_by}[/{filter_type}]]]]]]]', 'Categories:articles')->setName('categories_articles');
});

/**
 * CONFERENCES Route
 */
$app->group('/conferences', function() use ($app) {
	$app->get('/', 'Collections:conferences')->setName('collections_list');
	$app->get('/articles[/{id}[/{page}]]', 'Collections:articles')->setName('collections_articles');
});

/**
 * INSTITUTES Route
 */
$app->group('/institutes', function() use ($app) {
	$app->get('/', 'Collections:institutes')->setName('collections_list');
	$app->get('/articles[/{id}]', 'Collections:articles')->setName('institutes_articles');
});

/**
 * VISUALISATIONS Route
 */
$app->group('/visualisations', function() use ($app) {
	$app->get('/', 'Visualisations:index')->setName('visualisations_list');
	$app->get('/view[/{id}[/{position}]]', 'Visualisations:view')->setName('visualisations_view');
	$app->get('/checkurl', 'Visualisations:checkurl')->setName('checkurl');
	$app->get('/renderurl', 'Visualisations:renderurl')->setName('renderurl');
});
	
/**
 * GROUPS Route
 */
$app->group('/groups', function() use ($app) {
	$app->get('/list[/{id_parent}[/{id_group}[/{page}[/{order_direction}[/{order_by}[/{filter_type}]]]]]]', 'Groups:index')->setName('groups_list');
	$app->post('/count_articles', 'Groups:countArticles')->setName('groups_count');
});

// Action to publish new articles on Twitter by command line
$app->get('/twitter', 'Articles:dispatch')->setName('twitter');