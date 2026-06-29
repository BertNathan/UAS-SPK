<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Auth::login');
$routes->get('/test', 'Test::index');
$routes->get('/', 'Auth::login');
$routes->post('/cek-login', 'Auth::cekLogin');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');
$routes->get('/alternatif', 'Alternatif::index');
$routes->get('/alternatif/create', 'Alternatif::create');
$routes->post('/alternatif/store', 'Alternatif::store');
$routes->get('/alternatif/edit/(:num)', 'Alternatif::edit/$1');
$routes->post('/alternatif/update/(:num)', 'Alternatif::update/$1');
$routes->get('/alternatif/delete/(:num)', 'Alternatif::delete/$1');
$routes->get('/kriteria', 'Kriteria::index');
$routes->get('/penilaian', 'Penilaian::index');
$routes->post('/penilaian/store', 'Penilaian::store');
$routes->get('/moora', 'Moora::index');
$routes->get('/ranking', 'Moora::ranking');
$routes->get('/user/dashboard', 'User::dashboard');
$routes->get('/alternatif-user', 'User::alternatif');
$routes->get('/ranking-user', 'User::ranking');
$routes->post('/cekLogin', 'Auth::cekLogin');
$routes->get('/user/alternatif', 'User::alternatif');
$routes->get('/user/ranking', 'Moora::rankingUser');
$routes->get('cetak/ranking', 'Cetak::ranking');