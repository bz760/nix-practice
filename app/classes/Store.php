<?php

namespace App;

class Store
{
    private array $goods;

    public function __construct(array $goods)
    {
        $this->goods = $goods;
    }

    public function takeGood($id) {
        if (!array_key_exists($id, $this->goods)) {
            throw new \OutOfBoundsException('Key '.$id.' not found in the target array');
        }
        return $this->goods[$id];
    }
}