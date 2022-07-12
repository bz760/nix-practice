<?php

declare(strict_types=1); // включити режим суворої типізації

use App\Controller\ErrorController;
use Framework\Exception\FrameworkException;
use Framework\Entity\Router;

ini_set('display_errors', '1');
ini_set('html_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../config/config.php';
require ROOT.'vendor/autoload.php';
require ROOT.'framework/Helper/errorHandler.php';
require ROOT.'framework/Helper/functions.php';

try {
    $router = new Router($_SERVER['REQUEST_URI']);
    $router->run();
    $controller = new $router->controller();
    $action = $router->action;
    $controller->$action();
} catch (FrameworkException $e) {
    $controller = new ErrorController();
    $controller->notFound();
}
