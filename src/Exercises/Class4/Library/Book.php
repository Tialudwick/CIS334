<?php

declare(strict_types=1);

namespace App\Exercises\Class4\Library;

class Book
{
    public function __construct(
        private string $title
    ) {}

    public function __toString(): string
    {
        return "Library: {$this->title}";
    }
}