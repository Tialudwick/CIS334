<?php

declare(strict_types=1);

namespace App\Discovery;

use Override;

class ImagePost extends Post
{
    public function __construct(
        Member $author,
        string $createdAt,
        string $body,
        private string $imageUrl,
        private string $imageAltText
    ) {
        parent::__construct($author, $createdAt, $body);
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getImageAltText(): string
    {
        return $this->imageAltText;
    }

    #[Override]
    public function render(): string
    {
        $url = htmlspecialchars($this->imageUrl, ENT_QUOTES, 'UTF-8');
        $alt = htmlspecialchars($this->imageAltText, ENT_QUOTES, 'UTF-8');
        $authorDisplay = htmlspecialchars($this->getAuthor()->getDisplayName(), ENT_QUOTES, 'UTF-8');
        $date = htmlspecialchars($this->getCreatedAt(), ENT_QUOTES, 'UTF-8');
        $content = nl2br(htmlspecialchars($this->getBody(), ENT_QUOTES, 'UTF-8'));

        return <<<HTML
        <article class="card mb-4 shadow-sm">
            <img src="{$url}" class="card-img-top" alt="{$alt}">
            <div class="card-body">
                <h5 class="card-title mb-1">{$authorDisplay}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{$date}</h6>
                <p class="card-text">{$content}</p>
            </div>
        </article>
        HTML;
    }
}