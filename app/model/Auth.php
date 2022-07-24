<?php

namespace App\model;

use Framework\library\Session;

class Auth
{
    private Session $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function isLogged(): bool
    {
        return !$this->session->isEmpty() && $this->session->get('logged');
    }

    public function login(): bool
    {
        if ($this->isLogged()) {
            return true;
        }

        if (
            isset($_POST['login']) && !empty($_POST['login'])
            && isset($_POST['password']) && !empty($_POST['password'])
        ) {
            $fields['login'] = $_POST['login'];
            $fields['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $this->session->set('logged', true);

            return true;
        }

        return false;
    }

    public function logout(): bool
    {
        if ($this->isLogged()) {
            $this->session->destroy();

            return true;
        }

        return false;
    }

    public function register()
    {
    }
}