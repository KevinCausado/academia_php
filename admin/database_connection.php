<?php

$dsn = "mysql:host=localhost;dbname=academia";
$user= "root";
$password="";


try {
  $connection = new PDO($dsn,$user,$password);
  echo 'Conexión exitosa';
} catch (Exception $error) {
  echo 'Error de Conexión:' .$error ->getMessage();
}

?>
