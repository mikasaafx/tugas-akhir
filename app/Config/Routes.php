<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/dashboard', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/admin/detail/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/admin/list-users', 'Admin::lists', ['filter' => 'role:admin']);
$routes->add('admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/user/beranda', 'User::beranda', ['filter' => 'role:user']);
$routes->get('/user/cari', 'User::cariJodoh', ['filter' => 'role:user']);
$routes->setAutoRoute(true);


// $routes->get('/', 'Auth::login');
// $routes->get('/buku/create', 'Buku::create');
// $routes->get('/buku/(:segment)', 'Buku::detail/$1');
// $routes->get('/auth/login', 'Auth::login');