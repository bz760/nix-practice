<?php

use Framework\exception\FileNotFoundException;

function d($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function consoleLog($data)
{
    echo '<script type="text/javascript">';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
}

function alert($data)
{
    echo '<script type="text/javascript">';
    echo 'alert('.json_encode($data).')';
    echo '</script>';
}

function isFileExists($filePath): bool
{
    if (!file_exists($filePath)) {
        throw new FileNotFoundException($filePath.' not found');
    }
    return true;
}

function isFileReadable($filePath): bool
{
    if (is_file($filePath) && is_readable($filePath)) {
        return true;
    }
    return false;
}