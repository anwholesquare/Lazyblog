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
$routes->post('/dashboard/submitPost', 'Auth::submitPost');


$routes->get('/post/(:any)', 'Home::show/$1');
