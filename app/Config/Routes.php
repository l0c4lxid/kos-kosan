<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/detail', 'Home::detail');
$routes->get('/detail/(:num)', 'Home::DetailKamar/$1');

$routes->get('/ubsi', 'Login::index');
$routes->get('/login', 'Login::Aunt');
$routes->post('/login/aunt', 'Login::Aunt');
$routes->post('/login/logout', 'Login::logout');

$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/datakamar', 'Admin::DataKamar', ['filter' => 'auth']);
$routes->get('/tambahdatakamar', 'Admin::TambahDataKamar', ['filter' => 'auth']);
$routes->post('/simpandatakamar', 'Admin::SimpanDataKamar', ['filter' => 'auth']);
$routes->get('/editdatakamar/(:num)', 'Admin::EditKosan/$1', ['filter' => 'auth']);
$routes->post('/updatedatakamar/(:num)', 'Admin::UpdateKosan/$1', ['filter' => 'auth']);
$routes->get('/hapusdatakamar/(:num)', 'Admin::HapusKosan/$1', ['filter' => 'auth']);