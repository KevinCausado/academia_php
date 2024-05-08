<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Vista Principal de usuarios</h1>

  <?php if (empty($usuarios)) {
    echo 'No hay usuarios registrados';
  } else {

    echo '    
    <table border="1">
      <tbody>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Ciudad</th>';


    foreach ($usuarios as $usuario) {
      echo " <tr>
          <td>" . $usuario['nombre'] . "</td>
          <td>" . $usuario['apellido'] . "</td>
          <td>" . $usuario['direccion'] . "</td>
          <td>" . $usuario['ciudad'] . "</td>
        </tr>";
    }
    echo "</tbody>
  </table>";
  }

  ?>








</body>

</html>