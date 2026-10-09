<?php

declare(strict_types=1);

namespace App\Exercises\Class6;

class ImagePost extends Post
{
    public string $imageUrl;
    public string $caption;

    public function __construct(
        string $author,
        string $content,
        string $imageUrl,
        string $caption,
        string $timestamp
    ) {
        parent::__construct($author, $content, $timestamp);
        $this->imageUrl = $imageUrl;
        $this->caption = $caption;
    }
}