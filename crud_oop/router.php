<?php
class Router {
    private  $routes = [];
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri,$method)
    {
        if(array_key_exists($uri,$this->routes[$method])){
            return $this->routes[$method][$uri];
        }else{
            throw new Exception('No route defined for this URI.');
        }
    }
}
?>