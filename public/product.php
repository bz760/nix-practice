<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/autoload.php';

$product = include ROOT.'db/product.php';
$imgDir = 'img/large/';
$params = ['imgDir' => $imgDir, 'product' => $product];
$obj = new TemplateEngine();
$obj->renderTemplate('product', $params);