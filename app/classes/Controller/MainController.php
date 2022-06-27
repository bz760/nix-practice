<?php

namespace App\Controller;

use App\Model\Image;
use App\Model\Product;
use App\TemplateEngine;

class MainController
{
    private TemplateEngine $tpl;
    private Product $product;
    private Image $image;

    public function __construct()
    {
        $this->tpl = new TemplateEngine();
        $this->product = new Product();
        $this->image = new Image();
    }

    public function index()
    {
        $imgDir = 'img/home/';
        $images = $this->image->getAll();
        $params = ['imgDir' => $imgDir, 'images' => $images];
        $this->tpl->renderTemplate('home', $params);
    }

    public function shop()
    {
        $imgDir = 'img/middle/';
        $products = $this->product->getAll();
        $params = ['imgDir' => $imgDir, 'products' => $products];
        $this->tpl->renderTemplate('shop', $params);
    }

    public function product()
    {
        $imgDir = 'img/large/';
        $product = $this->product->getById('1');
        $params = ['imgDir' => $imgDir, 'product' => $product];
        $this->tpl->renderTemplate('product', $params);
    }

    public function cart()
    {
        $imgDir = 'img/small/';
        $productIds = ['1', '2'];
        $cart = [];
        foreach ($productIds as $id) {
            $cart[$id] = $this->product->getById($id);
        }
        $params = ['imgDir' => $imgDir, 'cart' => $cart];
        $this->tpl->renderTemplate('cart', $params);
    }

    public function login()
    {
        $this->tpl->renderTemplate('login');
    }
}