<?php

use App\Controller\ErrorController;
use App\ExampleService;
use App\Exceptions\FrameworkException;
use App\FileLogger;
use App\Router\Router;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/errorHandler.php';
require ROOT.'app/functions/autoload.php';
require ROOT.'app/functions/fileSystem.php';

$logger = new FileLogger();
$service = new ExampleService($logger);
$service->doSomeAction();

try {
    $router = new Router($_SERVER['REQUEST_URI']);
    $router->run();
    $controller = new $router->controller;
    $action = $router->action;
    $controller->$action();
} catch (FrameworkException $e) {
    $controller = new ErrorController();
    $controller->notFound();
} catch (Exception $e) {
}