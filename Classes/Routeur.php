<?php

/**
 * Class Routeur
 *
 * create routes and find controller
 */
class Routeur
{
    private $request;

    private $routes = [ "home.html"     => "Home", "contact" => "contact" ];

    public function __construct($request)
    {
      $this->request = $request;
    }

    public function renderController()
    {
      $request = $this->request;

      if(key_exists($request, $this->routes))
      {
        $controller = $this->routes[$request];
        include(CONTROLLER.$controller.'.php');
      } else {
        echo '404';
      }
    }

}
