
<?php

require_once 'Routes.php';

use Core\routes\Routes;

Routes::get('/', function () {
    echo 'Hola desde la página principal';
});

Routes::dispatch();