<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->post('/create', 'HomeController::create');
