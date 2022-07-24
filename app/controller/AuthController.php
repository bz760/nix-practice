<?php

namespace App\controller;

use App\model\Auth;
use Framework\core\View;

class AuthController
{
    private View $view;
    private Auth $auth;

    public function __construct()
    {
        $this->view = new View();
        $this->auth = new Auth();
    }

    public function login()
    {
        if ($this->auth->isLogged()) {
            header('Location: cabinet');
        } else {
            $this->view->render('login');
        }
    }

    public function cabinet()
    {
        if ($this->auth->isLogged()) {
            $this->view->render('cabinet');
        } else {
            header('Location: login');
        }
    }

    public function auth()
    {
        if ($this->auth->login()) {
            header('Location: cabinet');
        } else {
            header('Location: login');
        }
    }

    public function logout()
    {
        if ($this->auth->logout()) {
            header('Location: login');
        }
    }
}