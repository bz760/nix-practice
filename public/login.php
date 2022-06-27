<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/errorHandler.php';
require ROOT.'app/functions/autoload.php';
require ROOT.'app/functions/fileSystem.php';

$obj = new TemplateEngine();
$obj->renderTemplate('login');