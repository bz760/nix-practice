<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/autoload.php';

$goods = include ROOT.'db/goods.php';
$imgDir = 'img/middle/';
$params = ['imgDir' => $imgDir, 'goods' => $goods];
$obj = new TemplateEngine();
$obj->renderTemplate('shop', $params);