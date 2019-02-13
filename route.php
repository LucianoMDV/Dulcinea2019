<?php
require_once "Router.php";
require_once "controllers/productoController.php";
require_once "controllers/categoriaController.php";
require_once "controllers/loginController.php";
require_once "views/inicioView.php";

$r = new Router();

// $r->addRoute('','GET','inicioView','mostrarInicio'); //lo mantengo momentaneamente... no se como hacer un default.
$r->addRoute('login','GET','loginController','mostrarLogin');
$r->addRoute('verificarLogin','POST','loginController','verificarLogin'); //porque es para que quede oculto los datos que se envian por URL
$r->addRoute('logout','GET','loginController','cerrarSesion');

$r->addRoute('inicio','GET','inicioView','mostrarInicio');

$r->addRoute('producto','GET','productoController','mostrarProductos');
$r->addRoute('producto/:ID','GET','productoController','mostrarProducto');
$r->addRoute('insertarProducto','POST','productoController','insertarProducto');
$r->addRoute('eliminarProducto/:ID','GET','productoController','eliminarProducto');
$r->addRoute('crearEdit/:ID','GET','productoController','crearEdit');
$r->addRoute('editarProducto/:ID','POST','productoController','editarProducto');

$r->addRoute('categorias','GET','categoriaController','mostrarCategorias');
$r->addRoute('categorias/:ID','GET','categoriaController','mostrarCategoria');
$r->addRoute('insertarCategoria','POST','categoriaController','insertarCategoria');
$r->addRoute('eliminarCategoria/:ID','GET','categoriaController','eliminarCategoria');


//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);