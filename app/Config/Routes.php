<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->post('/create', 'HomeController::create');
$routes->get('/get_data', 'HomeController::get_data');
$routes->post('/view_data', 'HomeController::view_data');
$routes->post('/edit_data', 'HomeController::edit_data');
$routes->post('/update_data', 'HomeController::update_data');
$routes->post('/delete', 'HomeController::delete');
