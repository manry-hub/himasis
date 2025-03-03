<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/divisi', 'Divisi::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/faq', 'Faq::index');
$routes->get('/matkul', 'Matkul::index');
