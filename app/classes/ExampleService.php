<?php

namespace App;

use Psr\Log\LoggerInterface;

class ExampleService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomeAction()
    {
        $this->logger->debug('Message from ExampleService');
    }
}