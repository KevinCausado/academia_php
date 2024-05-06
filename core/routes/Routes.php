<?php

namespace core\routes;

class Routes
{

  private static $routes = [];

  public static function get($uri, $callback) // uri = /
  {
    // $uri = trim($uri, "/");
    self::$routes['GET'][$uri] = $callback;
  }

  public static function dispatch()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    // echo 'uri: ' . $uri;

    foreach (self::$routes[$method] as $route => $callback) {
      // echo '<br>route:' . $route;
      if (preg_match('#' . $route . '$#', $uri)) {
        $callback();
        return;
      }
    }
  }
}
