<?php

namespace core\routes;

class Routes
{

  private static $routes = [];

  public static function get($uri, $callback)
  {
    $uri = trim($uri, "/");
    self::$routes['GET'][$uri] = $callback;
  }

  public static function dispatch()
  {
    // $uri = basename($_SERVER['REQUEST_URI']);
    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    $method = $_SERVER['REQUEST_METHOD'];
    echo 'uri: ' . $uri;

    foreach (self::$routes[$method] as $route => $callback) {
      echo '<br>route:' . $route;

       if (preg_match("#$route#",$uri)) {
        $callback();
        return;
       }
    }
  }
}

// usuarios dfdsdsd