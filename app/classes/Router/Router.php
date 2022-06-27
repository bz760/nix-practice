<?php

namespace App\Router;

use App\Exceptions\BadRouteException;

class Router
{
    private array $routes;
    private string $route;
    public string $controller;
    public string $action;

    public function __construct(string $route)
    {
        $routesPath = CONFIGS.'routes.php';
        $this->routes = include $routesPath;
        $this->route = trim($route, '/');
    }

    /**
     * @throws BadRouteException
     */
    public function run()
    {
        if (empty($this->route)) {
            $this->route = 'index';
        }
        foreach ($this->routes as $uri => $path) {
            if ($this->route === $uri) {
                $segments = explode('/', $path);
            }
        }
        if (!isset($segments)) {
            throw new BadRouteException('Route '.$this->route." doesn't exist");
        }
        $this->controller = 'App\\Controller\\'.ucfirst($segments[0]).'Controller';
        $this->action = $segments[1];
        if (!method_exists($this->controller, $this->action)) {
            throw new BadRouteException('Controller '.$this->controller." doesn't contain ".$this->action.' action');
        }
    }
}