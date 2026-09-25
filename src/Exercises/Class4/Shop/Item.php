<?php

declare(strict_types=1);

namespace App\Exercises\Class4\Shop;

abstract class Item
{
    public function __construct(
        private string $title,
        private float $price
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function __toString(): string
    {
        return "Shop Item: {$this->title} - $" . number_format($this->price, 2);
    }
}