<?php

namespace App\Model;

use App\Db;

class Product
{
    public string $title;
    public int $amount;
    public string $img;
    public string $description;
    public float $weight;
    public string $dimensions;
    public float $price;
    public float $subtotal;

    public function getById(int $id)
    {
        $productList = DB::getDataFromFile('products');
        $product = $productList[$id];

        $this->title = $product['title'];
        $this->amount = $product['amount'];
        $this->img = $product['img'];
        $this->description = $product['description'];
        $this->weight = $product['weight'];
        $this->dimensions = $product['dimensions'];
        $this->price = $product['price'];
        $this->subtotal = $this->calcSubtotal($product['price'], $product['discount']);

        return (array)$this;
    }

    public function getAll()
    {
        $productList = DB::getDataFromFile('products');
        $products = [];

        foreach ($productList as $k => $v) {
            $product = new Product();
            $product->title = $v['title'];
            $product->amount = $v['amount'];
            $product->img = $v['img'];
            $product->description = $v['description'];
            $product->weight = $v['weight'];
            $product->dimensions = $v['dimensions'];
            $product->price = $v['price'];
            $product->subtotal = $this->calcSubtotal($v['price'], $v['discount']);

            $products[$k] = (array)$product;
        }

        return $products;
    }

    private function calcSubtotal($price, $discount)
    {
        return (100 - $discount) / 100 * $price;
    }
}