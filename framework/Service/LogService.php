<?php

namespace Framework\Service;

use Framework\Psr\Log\LoggerInterface;

class LogService
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function debug()
    {
        $this->logger->debug('Message from LogService');
    }
}
