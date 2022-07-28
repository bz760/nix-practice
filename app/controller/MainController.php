<?php

namespace App\controller;

use App\model\Product;
use Framework\core\View;

class MainController
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render('home');
    }

    public function shop()
    {
        $this->view->render('shop', ['imgDir' => 'img/middle/']);
    }

    public function product()
    {
        $product = new Product();
        $data = $product->read(0);
        $this->view->render('product', ['imgDir' => 'img/large/', 'product' => $data]);
    }

    public function cart()
    {
        $product = new Product();
        $ids = [0, 1];
        $data = [];

        foreach ($ids as $v) {
            $data[] = $product->read($v);
        }

        $this->view->render('cart', ['imgDir' => 'img/small/', 'products' => $data]);
    }

    public function getProducts()
    {
        $product = new Product();
        $data = $product->readAll();
        $json = [];

        foreach ($data as $v) {
            $json[] = $v;
        }

        $json = json_encode($json);
        echo $json;
    }
}