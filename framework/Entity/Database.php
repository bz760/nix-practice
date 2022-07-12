<?php

namespace Framework\Entity;

class Database
{
    public static function fromFile($fileName)
    {
        $path = ROOT.'database/'.$fileName.'.php';

        return include $path;
    }
}
