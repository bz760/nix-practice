<?php

namespace App\model;

use Framework\library\Database;

class Product
{
    public string $name;
    public string $img;
    public int $amount;
    public float $price;
    public float $weight;
    public string $dimensions;
    public string $description;

    public function create()
    {
    }

    public function read(int $id): self
    {
        $dbData = Database::readAll('products');
        return $this->fill($dbData[$id]);
    }

    public function readAll(): array
    {
        $dbData = Database::readAll('products');
        $products = [];

        foreach ($dbData as $v) {
            $products[] = $this->fill($v);
        }

        return $products;
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    private function fill(array $ar): self
    {
        $o = new self();
        $o->name = $ar['name'];
        $o->img = $ar['img'];
        $o->amount = $ar['amount'];
        $o->price = $ar['price'];
        $o->weight = $ar['weight'];
        $o->dimensions = $ar['dimensions'];
        $o->description = $ar['description'];

        return $o;
    }
}