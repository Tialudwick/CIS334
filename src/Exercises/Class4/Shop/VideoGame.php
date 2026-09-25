<?php

declare(strict_types=1);

namespace App\Exercises\Class4\Shop;

class VideoGame extends Item
{
    public function __construct(string $title, float $price)
    {
        parent::__construct($title, $price);
    }

    public function __toString(): string
    {
        return "Shop Game: {$this->getTitle()} - $" . number_format($this->getPrice(), 2);
    }
}