<?php

namespace Framework\Entity;

use Framework\Psr\Log\LoggerInterface;
use Framework\Psr\Log\LogLevel;

class FileLogger implements LoggerInterface
{

    /**
     * @inheritDoc
     */
    public function emergency(string $message, array $context = array())
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function alert(string $message, array $context = array())
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function critical(string $message, array $context = array())
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function error(string $message, array $context = array())
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function warning(string $message, array $context = array())
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function notice(string $message, array $context = array())
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function info(string $message, array $context = array())
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function debug(string $message, array $context = array())
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function log($level, string $message, array $context = array())
    {
        $date = date('Y-m-d H:i:s');
        $contextStr = !empty($context) ? json_encode($context) : null;
        $text = $date.' '.$level.' '.$message.' '.$contextStr.PHP_EOL;
        file_put_contents(ROOT.'var/log', $text, FILE_APPEND | LOCK_EX);
    }
}
