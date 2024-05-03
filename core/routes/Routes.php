<?php

namespace Core\routes;

class Routes
{

  private static $routes = [];

  public static function get($uri, $callback)
  {
    self::$routes['GET'][$uri] = $callback;
  }


  public static function dispatch () {
    $uri = $_SERVER['REQUEST_URI'];
    echo $uri;
  }
}
