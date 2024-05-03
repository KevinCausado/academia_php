<?php

class Controller
{

  public function view($view, $data = [])
  {
    extract($data);
    $view = "./views/$view.php";

    if (file_exists($view)) {
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
    $model = "./models/$model.php";

    if (file_exists($model)) {
      require_once $model;
      return new $model();
    } else {
      die("El model $model no existe");
    }
  }
}
