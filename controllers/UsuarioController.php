
<?php
// namespace controllers;
// use core\Controller;


class UsuarioController extends Controller
{

  public function index()
  {
    $usuarios = $this->getModel('Usuario')->getAll();
    return $this->view('usuarios/index', ['usuarios' => $usuarios]);
  }

  public function ver($id)
  {
    $usuario = $this->getModel('Usuario')->getById($id);
    return $this->view('usuarios/ver', ['usuario' => $usuario]);
  }
}
