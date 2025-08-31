<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Mahasiswa::index');
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('mahasiswa/detail/(:segment)', 'Mahasiswa::detail/$1');

$routes->get('mahasiswa/create', 'Mahasiswa::create');   
$routes->post('mahasiswa/store', 'Mahasiswa::store');    

$routes->get('mahasiswa/edit/(:segment)', 'Mahasiswa::edit/$1'); 
$routes->post('mahasiswa/update/(:segment)', 'Mahasiswa::update/$1');

$routes->get('mahasiswa/delete/(:segment)', 'Mahasiswa::delete/$1'); 

$routes->get('hello', 'Hello::index');
