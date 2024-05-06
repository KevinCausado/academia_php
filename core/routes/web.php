<?php

require_once 'routes.php';

use core\routes\Routes;


// Routes::get('/', function () {
//   echo 'Página principal';
// });

Routes::get('/usuarios', function () {
  echo '<br>Página de usuarios';
});

Routes::get('/productos', function () {
  echo '<br>Página de productos';
});

Routes::get('/categorias', function () {
  echo '<br>Página de categorias';
});

Routes::get('/pedidos', function () {
  echo '<br>Página de pedidos';
});


Routes::dispatch();
