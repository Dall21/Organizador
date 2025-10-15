<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('idioma/(:alpha)','Local::switch/$1');
$routes->get('auth/register','Auth::showForm');
$routes->get('auth/login','');
$routes->post('auth/register_attempt','Auth::register_attempt');