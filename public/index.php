<?php

declare(strict_types=1); // enable strong typing mode

use Framework\core\Router;
use Framework\library\Session;

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('html_errors', '1');
ini_set('display_startup_errors', '1');

require '../config/config.php';
require '../vendor/autoload.php';
require '../framework/helper/error.php';
require '../framework/helper/function.php';

$session = new Session();
$session->start(); // start a new or resume an existing one
$router = new Router($_SERVER['REQUEST_URI']);
$router->run();
$controller = new $router->controller();
$action = $router->action;
$controller->$action();