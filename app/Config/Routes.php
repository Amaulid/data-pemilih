<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/penduduk', 'PendudukController::index');
$routes->get('/penduduk/create', 'PendudukController::create');
$routes->post('/penduduk/store', 'PendudukController::store');
$routes->get('/penduduk/edit/(:num)', 'PendudukController::edit/$1');
$routes->post('/penduduk/update/(:num)', 'PendudukController::update/$1');
$routes->get('/penduduk/delete/(:num)', 'PendudukController::delete/$1');

$routes->get('pemilih', 'PemilihController::index');
$routes->get('pemilih/create', 'PemilihController::create');
$routes->post('pemilih/store', 'PemilihController::store');
$routes->get('pemilih/edit/(:num)', 'PemilihController::edit/$1');
$routes->post('pemilih/update/(:num)', 'PemilihController::update/$1');
$routes->get('pemilih/delete/(:num)', 'PemilihController::delete/$1');
$routes->get('pemilih/get_kecamatan', 'PemilihController::get_kecamatan');
$routes->get('pemilih/get_desa/(:num)', 'PemilihController::get_desa/$1');


