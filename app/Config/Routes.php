<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//empleados
$routes->get('/', 'Home::empleados');
$routes->get('empleados', 'Home::empleados');
$routes->post('agregarEmpleado', 'Home::agregarEmplado');
$routes->get('eliminarEmpleado/(:num)', 'Home::eliminarEmpleado/$1');
$routes->get('buscarEmpleado/(:num)', 'Home::buscarEmpleado/$1');
$routes->post('editarEmpleado', 'Home::editarEmpleado');
//puestos
$routes->get('puestos', 'Puestos::puestos');
$routes->post('agregarPuesto', 'Puestos::agregarPuesto');
$routes->get('buscarPuesto/(:num)', 'Puestos::buscarPuesto/$1');
$routes->post('editarPuesto', 'Puestos::editarPuesto');
$routes->get('eliminarPuesto/(:num)', 'Puestos::eliminarPuesto/$1');
//marcas
$routes->get('marcas', 'Marcas::marcas');
$routes->post('agregarMarca', 'Marcas::agregarMarca');
$routes->get('buscarMarca/(:num)', 'Marcas::buscarMarca/$1');
$routes->post('editarMarca', 'Marcas::editarMarca');
$routes->get('eliminarMarca/(:num)', 'Marcas::eliminarMarca/$1');
//roles
$routes->get('roles', 'Roles::roles');
$routes->post('agregarRol', 'Roles::agregarRol');
$routes->get('buscarRol/(:num)', 'Roles::buscarRol/$1');
$routes->post('editarRol', 'Roles::editarRol');
$routes->get('eliminarRol/(:num)', 'Roles::eliminarRol/$1');

//tipo_equipo
$routes->get('TipoEquipo', 'TipoEquipo::TipoEquipo');
$routes->post('agregarTipoEquipo', 'TipoEquipo::agregarTipoEquipo');
$routes->get('buscarTipoEquipo/(:num)', 'TipoEquipo::buscarTipoEquipo/$1');
$routes->post('editarTipoEquipo', 'TipoEquipo::editarTipoEquipo');
$routes->get('eliminarTipoEquipo/(:num)', 'TipoEquipo::eliminarTipoEquipo/$1');
//usuarios
$routes->get('usuarios', 'Usuarios::usuarios');
$routes->post('agregarUsuario', 'Usuarios::agregarUsuario');
$routes->get('buscarUsuario/(:num)', 'Usuarios::buscarUsuario/$1');
$routes->post('editarUsuario', 'Usuarios::editarUsuario');
$routes->get('eliminarUsuario/(:num)', 'Usuarios::eliminarUsuario/$1');
