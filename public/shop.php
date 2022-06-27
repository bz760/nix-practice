<?php

use App\Exceptions\FileNotFoundException;
use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/errorHandler.php';
require ROOT.'app/functions/autoload.php';
require ROOT.'app/functions/fileSystem.php';

$dbFilePath = ROOT.'db/goods.php';
try {
    isFileExists($dbFilePath);
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
$goods = include $dbFilePath;
$imgDir = 'img/middle/';
$params = ['imgDir' => $imgDir, 'goods' => $goods];
$obj = new TemplateEngine();
$obj->renderTemplate('shop', $params);