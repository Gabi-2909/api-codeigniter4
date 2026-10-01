<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Ruta principal (página de bienvenida)
$routes->get('/', 'Home::index');

// Rutas asociadas a los botones de tu index.php
$routes->get('producto', 'Api\Producto::listar');  // Botón "Lista de Productos"
$routes->get('tiket', 'Api\Producto::crear');      // Botón "Sacar Tiket"
$routes->post('guardar', 'Api\Producto::guardar');  // Para procesar el guardado

// CRUD de Productos
$routes->get('producto', 'Api\Producto::listar');                  // READ: Lista productos
$routes->get('tiket', 'Api\Producto::crear');                      // CREATE: Formulario crear
$routes->post('producto/guardar', 'Api\Producto::guardar');        // CREATE: Procesar guardado

$routes->get('producto/editar/(:num)', 'Api\Producto::editar/$1'); // UPDATE: Formulario editar
$routes->post('producto/actualizar/(:num)', 'Api\Producto::actualizar/$1'); // UPDATE: Procesar cambio

$routes->get('producto/eliminar/(:num)', 'Api\Producto::eliminar/$1'); // DELETE: Eliminar registro