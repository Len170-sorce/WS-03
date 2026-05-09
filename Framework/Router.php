<?php

namespace Framework;

use App\Controllers\ErrorController;

class Router
{
    protected $routes = [];

    /**
     * @param string $method
     * @param string $uri
     * @param string $action
     * @return void
     */


    public function registerRoute($method, $uri, $action)
    {

        list($controller, $controllerMethod) = explode('@', $action);
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ];
    }
    /**
     * Add GET route
     * 
     * @param string $uri
     * @param string $controller
     * @return void 
     * 
     */


    public function get($uri, $controller)
    {
        $this->registerRoute('GET', $uri, $controller);
    }


    /**
     * Add POST route
     * 
     * @param string $uri
     * @param string $controller
     * @return void 
     * 
     */


    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
    }




    /**
     * Add GET route
     * 
     * @param string $uri
     * @param string $controller
     * @return void 
     * 
     */


    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }





    /**
     * Add DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @return void 
     * 
     */


    public function delete($uri, $controller)
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    /**
     * 
     * Route the request 
     * @params string $uri
     * @param string $method
     * @return void
     * 
     * 
     * 
     */

    public function route($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        if ($uri === '') {
            $uri = '/';
        }

        foreach ($this->routes as $route) {
            if (
                $route['uri'] === $uri && $route['method'] === $method) {
                //Extract controller and controller method    
                $controller = 'App\\Controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod'];

                //Instantiate controller class
                $controllerInstance = new $controller();

                $controllerInstance->$controllerMethod();
                
                return;
            }
        }

        ErrorController::notFound();
    }
}
 