<?php

namespace App\Model;

use App\Db;

class Image
{
    public string $title;
    public string $img;

    public function getAll()
    {
        $imagesList = DB::getDataFromFile('images');
        $images = [];

        foreach ($imagesList as $item) {
            $image = new Image();
            $image->title = $item['title'];
            $image->img = $item['img'];

            $images[] = (array)$image;
        }

        return $images;
    }
}