<?php

declare(strict_types=1);

namespace App\Discovery;

class Post
{
    public function __construct(
        private Member $author,
        private string $createdAt,
        private string $body
    ) {}

    public function getAuthor(): Member
    {
        return $this->author;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function render(): string
    {
        $authorDisplay = htmlspecialchars($this->author->getDisplayName(), ENT_QUOTES, 'UTF-8');
        $date = htmlspecialchars($this->createdAt, ENT_QUOTES, 'UTF-8');
        $content = nl2br(htmlspecialchars($this->body, ENT_QUOTES, 'UTF-8'));

        return <<<HTML
        <article class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-1">{$authorDisplay}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{$date}</h6>
                <p class="card-text">{$content}</p>
            </div>
        </article>
        HTML;
    }
}