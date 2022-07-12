<?php

namespace App\Controller;

use App\Model\Image;
use App\Model\Product;
use Framework\Entity\TemplateEngine;

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
        $images = $this->image->getAll();
        $params = ['imgDir' => 'img/home/', 'images' => $images];
        $this->tpl->renderTemplate('home', $params);
    }

    public function shop()
    {
        $products = $this->product->getAll();
        $params = ['imgDir' => 'img/middle/', 'products' => $products];
        $this->tpl->renderTemplate('shop', $params);
    }

    public function product()
    {
        $product = $this->product->getById('1');
        $params = ['imgDir' => 'img/large/', 'product' => $product];
        $this->tpl->renderTemplate('product', $params);
    }

    public function cart()
    {
        $productIds = ['1', '2'];
        $cart = [];
        foreach ($productIds as $id) {
            $cart[$id] = $this->product->getById($id);
        }
        $params = ['imgDir' => 'img/small/', 'cart' => $cart];
        $this->tpl->renderTemplate('cart', $params);
    }

    public function login()
    {
        $this->tpl->renderTemplate('login');
    }
}
