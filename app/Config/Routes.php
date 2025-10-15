<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('task', 'Tasks::index');
$routes->get('migrate', 'Migrate::index');
$routes->get('task/show/(:num)', 'Tasks::show/$1');
$routes->get('tasks', 'Tasks::index');
$routes->get('tasks/new', 'Tasks::new');
$routes->post('tasks/create', 'Tasks::create');
$routes->get('tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('tasks/update/(:num)', 'Tasks::update/$1');
$routes->get('tasks/show/(:num)', 'Tasks::show/$1');
$routes->get('tasks/form', 'Tasks::form');
$routes->get('tasks/delete/(:num)', 'Tasks::delete/$1');
$routes->post('tasks/delete/(:num)', 'Tasks::delete/$1');
$routes->get('tasks', 'Tasks::index');
$routes->get('signup', 'Signup::new');
$routes->get('/signup', 'Signup::new');
$routes->post('signup/create', 'Signup::create');
$routes->get('signup/success', 'Signup::success');  
$routes->get('/login', 'Login::new');
$routes->post('login/create', 'Login::create');
$routes->get('logout', 'Logout::index');