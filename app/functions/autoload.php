<?php

$config = json_decode(file_get_contents(CONFIGS.'autoload.json'), true);
$namespaces = $config['autoload']['psr-4'];

function classToPath(string $class, string $prefix)
{
    $relClass = ltrim($class, $prefix);
    return str_replace('\\', '/', $relClass).'.php';
}

function classAutoLoad($class)
{
    global $namespaces;
    $prefix = strtok($class, '\\').'\\';
    if (!array_key_exists($prefix, $namespaces)) {
        return;
    }
    $baseDir = $namespaces[$prefix];
    $path = classToPath($class, $prefix);
    include ROOT.$baseDir.$path;
}

spl_autoload_register('classAutoLoad');