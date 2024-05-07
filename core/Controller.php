<?php

// namespace core;

class Controller
{

  public function view($view, $data = [])
  {
    extract($data);
    $viewFile = "../views/$view.php";

    if (file_exists($viewFile)) {
      require $viewFile;
    } else {
      die("La vista $view no existe");
    }
  }

  public function redirect($url)
  {
    header("Location: " . ROOT_URL . "/$url");
    exit;
  }

  public function getModel($model)
  {
    $modelFile = "../models/$model.php";

    if (file_exists($modelFile)) {
      require_once $modelFile;
      return new $modelFile();
    } else {
      die("El model $modelFile  no existe");
    }
  }
}
