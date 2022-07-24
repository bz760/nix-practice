<?php

namespace Framework\core;

use Framework\Exception\BadRouteException;

class Router
{
    public string $controller;
    public string $action;
    private array $routes;
    private string $route;

    public function __construct(string $route)
    {
        $this->route = trim($route, '/');
        $this->routes = include ROOT.'config/routes.php';
    }

    /**
     * @throws BadRouteException
     */
    public function run()
    {
        if (empty($this->route)) {
            $this->route = 'index';
        }
        foreach ($this->routes as $x => $y) {
            if ($this->route === $x) {
                $segments = explode('/', $y);
            }
        }
        if (!isset($segments)) {
            throw new BadRouteException('Route '.$this->route." doesn't exist");
        }
        $this->controller = 'App\\controller\\'.ucfirst($segments[0]).'Controller';
        if (!class_exists($this->controller)) {
            throw new BadRouteException($this->controller." doesn't exist");
        }
        $this->action = $segments[1];
        if (!method_exists($this->controller, $this->action)) {
            throw new BadRouteException('Action '.$this->controller."->".$this->action."() doesn't exist");
        }
    }
}