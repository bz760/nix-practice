<?php

use App\Exceptions\FileNotFoundException;
use App\TemplateEngine;

require '../app/configs/config.php';
require ROOT.'app/functions/debug.php';
require ROOT.'app/functions/errorHandler.php';
require ROOT.'app/functions/autoload.php';
require ROOT.'app/functions/fileSystem.php';

$dbFilePath = ROOT.'db/home.php';
try {
    isFileExists($dbFilePath);
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
$images = include $dbFilePath;
$imgDir = 'img/home/';
$params = ['imgDir' => $imgDir, 'images' => $images];
$obj = new TemplateEngine();
$obj->renderTemplate('home', $params);