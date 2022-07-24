<?php

namespace Framework\Exception;

class FileNotFoundException extends \RuntimeException
{
    public function errorMessage(): string
    {
        return 'FileNotFoundException: '.$this->getMessage();
    }
}