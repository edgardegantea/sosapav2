<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('mvv', 'FrontendController::mvv');
$routes->get('queessosapatlat', 'FrontendController::queessosapatlat');

$routes->get('marconormativo', 'FrontendController::marconormativo');
$routes->get('estructuraorganica', 'FrontendController::estructuraorganica');
$routes->get('padronprov',  'FrontendController::padronprov');

$routes->get('conocetumedidor', 'FrontendController::conocetumedidor');
$routes->get('tarifasporservicio', 'FrontendController::tarifasporservicio');

service('auth')->routes($routes);

$routes->group('admin', ['filter' => 'session'], static function ($routes) {

    $routes->get('/', 'Admin\DashboardController::index');
    $routes->get('dashboard', 'Admin\DashboardController::index');


    $routes->get('publicaciones', 'Admin\PublicacionController::index');
    $routes->get('publicaciones/new', 'Admin\PublicacionController::new');
    $routes->post('publicaciones/create', 'Admin\PublicacionController::create');
    $routes->get('publicaciones/edit/(:num)', 'Admin\PublicacionController::edit/$1');
    $routes->post('publicaciones/update/(:num)', 'Admin\PublicacionController::update/$1');
    $routes->delete('publicaciones/delete/(:num)', 'Admin\PublicacionController::delete/$1');


    $routes->get('etiquetas', 'Admin\EtiquetaController::index');
    $routes->get('etiquetas/new', 'Admin\EtiquetaController::new');
    $routes->post('etiquetas/create', 'Admin\EtiquetaController::create');
    $routes->get('etiquetas/edit/(:num)', 'Admin\EtiquetaController::edit/$1');
    $routes->post('etiquetas/update/(:num)', 'Admin\EtiquetaController::update/$1');
    $routes->delete('etiquetas/delete/(:num)', 'Admin\EtiquetaController::delete/$1');


    $routes->get('comentarios', 'Admin\ComentarioController::index');
    $routes->get('comentarios/edit/(:num)', 'Admin\ComentarioController::edit/$1');
    $routes->post('comentarios/update/(:num)', 'Admin\ComentarioController::update/$1');
    $routes->delete('comentarios/delete/(:num)', 'Admin\ComentarioController::delete/$1');
    $routes->get('comentarios/cambiar-estado/(:num)/(:segment)', 'Admin\ComentarioController::cambiarEstado/$1/$2');


    $routes->get('categorias', 'CategoriaController::index');
    $routes->get('categorias/new', 'CategoriaController::new');
    $routes->post('categorias/create', 'CategoriaController::create');
    $routes->get('categorias/edit/(:num)', 'CategoriaController::edit/$1');
    $routes->post('categorias/update/(:num)', 'CategoriaController::update/$1');
    $routes->delete('categorias/delete/(:num)', 'CategoriaController::delete/$1');

});


