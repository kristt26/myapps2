<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pengguna', 'User::index');
$routes->get('detail/(:hash)', 'User::detail_user/$1');

$routes->group('user', static function($routes){
    $routes->get("", "User::index");
    $routes->add("tambah", "User::add");
});
$routes->group('product', static function($routes){
    $routes->get("", "Product::index");
    $routes->add("tambah", "Product::add");
    $routes->add("ubah", "Product::update");
    $routes->add("hapus/(:hash)", "Product::delete/$1");
});

$routes->get("tambah_kriteria", "Kriteria::add");

