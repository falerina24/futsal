<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('jadwal', function ($routes) {
    $routes->get('/', 'jadwal::index');
    $routes->add('create', 'jadwal::create');
    $routes->add('edit/(:any)', 'jadwal::edit/$1');
    $routes->add('delete/(:any)', 'jadwal::delete/$1');
});

$routes->group('pembayaran', function ($routes) {
    $routes->get('/', 'pembayaran::index');
    $routes->add('create', 'pembayaran::create');
    $routes->add('edit/(:any)', 'pembayaran::edit/$1');
    $routes->add('delete/(:any)', 'pembayaran::delete/$1');
});
$routes->group('pemesanan', function ($routes) {
    $routes->get('/', 'pemesanan::index');
    $routes->add('create', 'pemesanan::create');
    $routes->add('edit/(:any)', 'pemesanan::edit/$1');
    $routes->add('delete/(:any)', 'pemesanan::delete/$1');
});
$routes->group('lapangan', function ($routes) {
    $routes->get('/', 'lapangan::index');
    $routes->add('create', 'lapangan::create');
    $routes->add('edit/(:any)', 'lapangan::edit/$1');
    $routes->add('delete/(:any)', 'lapangan::delete/$1');
}); 
$routes->group('pelanggan', function ($routes) {
    $routes->get('/', 'pelanggan::index');
    $routes->add('create', 'pelanggan::create');
    $routes->add('edit/(:any)', 'pelanggan::edit/$1');
    $routes->add('delete/(:any)', 'pelanggan::delete/$1');
}); 
$routes->group('gambar', function ($routes) {
    $routes->get('/', 'gambar::index');
    $routes->add('create', 'gambar::create');
    $routes->add('edit/(:any)', 'gambar::edit/$1');
    $routes->add('delete/(:any)', 'gambar::delete/$1');
}); 