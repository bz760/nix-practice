<?php

ini_set('display_errors', 1);
ini_set('html_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__DIR__, 2).'/');
define('CONFIGS', ROOT.'app/configs/');
define('CLASSES', ROOT.'/app/classes/');