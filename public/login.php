<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/autoload.php';

$obj = new TemplateEngine();
$obj->renderTemplate('login');