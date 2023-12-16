<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');

//API
$routes->get('/api', 'APIController::index');
$routes->get('/api/asal-kota-terbanyak', 'APIController::asal_kota_terbanyak');
$routes->get('/api/asal-kota-tersedikit', 'APIController::asal_kota_tersedikit');

//route reservation controller
$routes->get('/reserved', 'ReservasiController::history');
$routes->get('/admin', 'ReservasiController::all_reservation');
$routes->get('/reserve', 'ReservasiController::reserve');
$routes->post('/create-reservation', 'ReservasiController::create_reservation');

//Login
$routes->get('/login', 'AuthAPIController::login_view');
$routes->get('/logout', 'LoginController::logout');
$routes->match(['get','post'], 'AuthAPIController/login_action', 'AuthAPIController::login_action');

//API dari wahana
$routes->get('/wahana-api', 'WahanaAPIController::wahana_api');
