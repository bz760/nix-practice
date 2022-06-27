<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/autoload.php';

$images = include ROOT.'db/home.php';
$imgDir = 'img/home/';
$params = ['imgDir' => $imgDir, 'images' => $images];
$obj = new TemplateEngine();
$obj->renderTemplate('home', $params);