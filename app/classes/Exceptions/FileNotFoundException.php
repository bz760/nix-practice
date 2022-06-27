<?php

namespace App\Exceptions;

class FileNotFoundException extends \RuntimeException
{
    public function errorMessage(): string
    {
        return "FileNotFoundException: " . $this->getMessage();
    }
}