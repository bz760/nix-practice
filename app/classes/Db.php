<?php

namespace App;

class Db
{
    public static function getDataFromFile($fileName)
    {
        $path = ROOT.'db/'.$fileName.'.php';
        return include $path;
    }
}