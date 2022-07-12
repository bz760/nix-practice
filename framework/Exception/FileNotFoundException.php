<?php

namespace Framework\Exception;

use RuntimeException;

class FileNotFoundException extends RuntimeException
{
    public function errorMessage(): string
    {
        return 'FileNotFoundException: '.$this->getMessage();
    }
}
