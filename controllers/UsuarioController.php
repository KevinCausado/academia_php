
<?php

class UsuarioController extends Controller
{

  public function index()
  {
    $usuarios = $this->getModel('Usuario')->getAll();
    $this->view('/usuarios/index', ['usuarios' => $usuarios]);
  }

  public function ver($id)
  {
    $usuario = $this->getModel('Usuario')->getById($id);
    $this->view('/usuarios/ver', ['usuario' => $usuario]);
  }
}
