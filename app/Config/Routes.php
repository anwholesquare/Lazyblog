<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Auth::register');
$routes->post('/register/store', 'Auth::store');
$routes->post('/register_success', 'Auth::register_sucess');

$routes->get('/login', 'Auth::login');
$routes->post('/login/authenticate', 'Auth::authenticate');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Auth::dashboard');
$routes->get('/dashboard/create', 'Auth::createPost');
$routes->get('/dashboard/post', 'Auth::showpost');
$routes->get('/dashboard/edit/post/(:any)', 'Auth::editpost/$1');
$routes->post('/dashboard/updatePost', 'Auth::updatepost');

$routes->post('/dashboard/submitPost', 'Auth::submitPost');

$routes->get('/dashboard/editAuthor', 'Auth::editAuthor');
$routes->post('/dashboard/submitAuthorContent', 'Auth::submitAuthorContent');

$routes->get('/dashboard/leaderboard', 'Auth::showLeaderboard');



$routes->get('/post/(:any)', 'Home::show/$1');
$routes->get('/author/(:any)', 'Home::showAuthor/$1');





$routes->get('api/category/autocomplete/(:any)', 'Apis::categoryfinder/$1');
$routes->get('api/posts/viewtimeincrease/(:any)', 'Apis::viewTimeIncrease/$1');
$routes->get('api/posts/viewcount/(:any)', 'Apis::viewcount/$1');
$routes->get('api/posts/findbyauthor/(:any)', 'Apis::findpostbyauthor/$1/$2');
$routes->get('api/informer', 'Apis::informer');

