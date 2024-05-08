<?php

class Controller
{

  public static function view($view, $data = [])
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

  public static function getModel($model)
  {
    $modelFile = "../models/$model.php";

    if (file_exists($modelFile)) {
      require_once $modelFile;
      return new $model(); 
    } else {
      die("El model $modelFile  no existe");
    }
  }
}
