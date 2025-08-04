<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::empleados');
$routes->get('empleados', 'Home::empleados');
$routes->get('puestos', 'Home::puestos');
$routes->post('agregarEmpleado', 'Home::agregarEmplado');
$routes->get('eliminarEmpleado/(:num)', 'Home::eliminarEmpleado/$1');
$routes->get('buscarEmpleado/(:num)', 'Home::buscarEmpleado/$1');
$routes->post('editarEmpleado', 'Home::editarEmpleado');