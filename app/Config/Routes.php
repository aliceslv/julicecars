<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');
$routes->get('/', 'CarroController::index');
$routes->get('/julice', 'Home::index');
$routes->get('/casa', 'Home::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/home', 'Home::index');

