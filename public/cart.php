<?php

use App\Exceptions\FileNotFoundException;
use App\Store;
use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/errorHandler.php';
require ROOT.'app/functions/autoload.php';
require ROOT.'app/functions/fileSystem.php';

$dbFilePath = ROOT.'db/cart.php';
try {
    isFileExists($dbFilePath);
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
$cart = include $dbFilePath;
$store = new Store($cart);
$good = $store->takeGood('1');
$imgDir = 'img/small/';
$params = ['imgDir' => $imgDir, 'cart' => $cart];
$obj = new TemplateEngine();
$obj->renderTemplate('cart', $params);