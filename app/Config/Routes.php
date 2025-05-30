<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'Product::index');
$routes->get('/about', 'About::index');
$routes->get('/outlet', 'Outlet::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/p_danish', 'Product::danish');
$routes->get('/p_cake', 'Product::cake');
$routes->get('/p_toast', 'Product::toast');
$routes->get('/p_dcake', 'Product::dcake');