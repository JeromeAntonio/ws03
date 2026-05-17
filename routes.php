<?php

$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store', ['auth']);

$router->get('/listings/listing/{id}', 'ListingsController@show');
$router->get('/listings/search', 'ListingsController@search');
$router->get('/listings/edit/{id}', 'ListingsController@edit', ['auth']);
$router->get('/listings/create', 'ListingsController@create', ['auth']);

$router->delete('/listings/delete/{id}', 'ListingsController@destroy', ['auth']);
$router->put('/listings/{id}', 'ListingsController@update', ['auth']);

$router->get('/auth/register', 'UserController@create', ['guest']);
$router->get('/auth/login', 'UserController@login', ['guest']);

$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);






//return [
// '/' => 'controllers/home.php',
// '/listings' => 'controllers/listings/index.php',
// '/listings/create' => 'controllers/listings/create.php',
// '404' => 'controllers/error/404.php'
//];


// $router->get('/', 'App/controllers/home.php');

// $router->get('/listings', 'App/controllers/listings/index.php');

// $router->get('/listings/create', 'App/controllers/listings/create.php');

// $router->get('/listings/listing', 'App/controllers/listings/show.php');
