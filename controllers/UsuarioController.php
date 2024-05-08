
<?php
require '../core/Controller.php';

class UsuarioController extends Controller
{

  public static function index()
  {
    $usuarios = self::getModel('Usuario')->getAll();
    return self::view('usuarios/index', ['usuarios' => $usuarios]);
  }
}
