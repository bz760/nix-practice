<?php

namespace Framework\library;

class Session
{
    public function start()
    {
        session_start();
    }

    public function get(string $key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return false;
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function delete(string $key)
    {
        unset($_SESSION[$key]);
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
    }

    public function fromArray(array $ar = null)
    {
        if (is_array($ar)) {
            foreach ($ar as $k => $v) {
                $this->set($k, $v);
            }
        }
    }

    public function fromObject(array $ar = null)
    {
        if (is_object($ar)) {
            $this->fromArray(get_object_vars($ar));
        }
    }

    public function isEmpty(): bool
    {
        return empty($_SESSION);
    }
}