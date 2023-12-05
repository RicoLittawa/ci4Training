<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/books/index','BookController::index');
$routes->get('/books/add','BookController::createBook');
$routes->get('/books/list','BookController::list');


$routes->get('/user/login', 'UserController::index');
