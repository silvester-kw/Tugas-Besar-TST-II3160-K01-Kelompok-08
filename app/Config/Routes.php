<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');

//route reservation controller
$routes->get('/reserved', 'ReservasiController::history');
$routes->get('/reserve', 'ReservasiController::reserve');
$routes->post('/create-reservation', 'ReservasiController::create_reservation');