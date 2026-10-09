<?php

declare(strict_types=1);

namespace App\Discovery;

class ImagePost extends Post
{
    private string $imageURL;

    public function __construct(string $title, string $content, string $author, string $imageURL)
    {
        parent::__construct($title, $content, $author);
        $this->imageURL = $imageURL;
    }

    public function getImageUrl(): string
    {
        return $this->imageURL;
    }

    public function getType(): string
    {
        return 'image_post';
    }
}