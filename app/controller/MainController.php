<?php

namespace App\controller;

use App\model\Product;
use Framework\core\View;

class MainController
{
    private View $view;
    private Product $product;

    public function __construct()
    {
        $this->view = new View();
        $this->product = new Product();
    }

    public function index()
    {
        $this->view->render('home');
    }

    public function shop()
    {
        $products = $this->product->readAll();
        $this->view->render('shop', ['imgDir' => 'img/middle/', 'products' => $products]);
    }

    public function product()
    {
        $product = $this->product->read(0);
        $this->view->render('product', ['imgDir' => 'img/large/', 'product' => $product]);
    }

    public function cart()
    {
        $productIds = [0, 1];
        $cart = [];

        foreach ($productIds as $id) {
            $cart[$id] = $this->product->read($id);
        }

        $this->view->render('cart', ['imgDir' => 'img/small/', 'cart' => $cart]);
    }
}