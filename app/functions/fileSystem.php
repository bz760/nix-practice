<?php

use App\Exceptions\FileNotFoundException;

function isFileExists($filePath)
{
    if (!file_exists($filePath)) {
        throw new FileNotFoundException($filePath.' not found');
    }
    return true;
}

function isFileReadable($filePath)
{
    if (is_file($filePath) && is_readable($filePath)) {
        return true;
    }
    return false;
}