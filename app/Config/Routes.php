<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Home::signup');
$routes->get('/signin', 'Auth::signin');
$routes->get('/post/(:any)', 'Home::show/$1');
