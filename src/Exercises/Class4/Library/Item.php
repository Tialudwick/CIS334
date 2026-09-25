<?php

declare(strict_types=1);

namespace App\Exercises\Class4\Library;

use DateTimeImmutable;

abstract class Item
{
    private ?DateTimeImmutable $dateDue = null;

    public function __construct(
        private string $title
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDateDue(): ?DateTimeImmutable
    {
        return $this->dateDue;
    }

    public function setDueInDays(int $days): void
    {
        $this->dateDue = (new DateTimeImmutable())->add(new \DateInterval("P{$days}D"));
    }

    public function __toString(): string
    {
        return "Item: {$this->title}";
    }
}