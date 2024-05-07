
<?php
require '../core/Controller.php';

class UsuarioController extends Controller
{

  public function index()
  {
    $usuarios = $this->getModel('Usuario');
    return $this->view('usuarios/index', ['usuarios' => []]);
  }

  
}
