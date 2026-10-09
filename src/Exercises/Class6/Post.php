<?php
declare(strict_types= 1);

namespace App\Exercises\Class6;

class Post
{
    public string $author;
    public string $content;
    public string $timestamp;

    public function __construct(string $author, string $content, string $timestamp)
    {
        $this->author = $author;
        $this->content = $content;
        $this->timestamp = $timestamp;
    }
}