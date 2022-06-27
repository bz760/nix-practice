<?php

use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/autoload.php';

$cart = include ROOT.'db/cart.php';
$imgDir = 'img/small/';
$params = ['imgDir' => $imgDir, 'cart' => $cart];
$obj = new TemplateEngine();
$obj->renderTemplate('cart', $params);