<?php

use Framework\Exception\FileNotFoundException;

function d($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
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
