<?php

namespace Framework\service;

use Psr\Log\LoggerInterface;

class LogService
{
    private ?LoggerInterface $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        if ($this->logger) {
            $this->logger->debug('LogService');
        }
    }
}