<?php

require_once 'routes.php';
require_once '../controllers/UsuarioController.php';

$rutas = new Routes();

$rutas::get('/', function () {
  echo '<br>Página principal';
});

$rutas::get('/usuarios', function () {
  $usuarios = new UsuarioController();
  return $usuarios->index();  
});

$rutas::get('/productos', function () {
  echo '<br>Página de productos';
});

$rutas::get('/categorias', function () {
  echo '<br>Página de categorias';
});

$rutas::get('/pedidos', function () {
  echo '<br>Página de pedidos';
});


$rutas::dispatch();
