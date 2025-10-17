<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('idioma/(:alpha)','Local::switch/$1');
$routes->get('auth/register','Auth::showForm');
$routes->get('auth/login','Auth::showFormLogin');
$routes->post('auth/register_attempt','Auth::register_attempt');
$routes->post('auth/login_attempt','Auth::login_attempt');
$routes->post('auth/task','Auth::task');
