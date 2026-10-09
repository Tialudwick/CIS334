<?php
declare(strict_types= 1);

namespace App\Exercises\Class6;

use InvalidArgumentException;

class HobbyItem
{
    public string $title;
    public string $author;
    public int $yearPublished;
    public int $pages;

    public function __construct(string $title, string $author, int $yearPublished, int $pages)
    {
        if (trim($title) === '') {
            throw new InvalidArgumentException('Title cannot be empty.');
        }
        if (trim($author) === '') {
            throw new InvalidArgumentException('Author cannot be empty.');
        }
        if ($yearPublished < 0) {
            throw new InvalidArgumentException('Year published cannot be negative.');
        }
        if ($pages <= 0) {
            throw new InvalidArgumentException('Pages must be a positive integer.');
        }

        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
        $this->pages = $pages;
    }
}