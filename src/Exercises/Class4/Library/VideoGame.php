<?php

declare(strict_types=1);

namespace App\Exercises\Class4\Library;

class VideoGame extends Item
{
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    public function __toString(): string
    {
        $dueDate = $this->getDateDue()?->format('Y-m-d');
        $dueStr = $dueDate ? " (Due: {$dueDate})" : "";
        return "Library Game: {$this->getTitle()}{$dueStr}";
    }
}