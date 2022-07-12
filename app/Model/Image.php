<?php

namespace App\Model;

use Framework\Entity\Database;

class Image
{
    public string $title;
    public string $img;

    public function getAll(): array
    {
        $imagesList = Database::fromFile('images');
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
