<?php

declare(strict_types=1);

abstract class MediaItem
{
    private int $id;

    public function __construct(int $id, protected string $title)
    {
        $this->setId($id);
    }
    
    final public function setID(int $id): void
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('ID must be a positive integer.');
        }
        $this->id = $id;
    }
    public function getID(): int
    {
        return $this->id;
    }

    public function describe(): string
    {
        return 'Media Item: ' . $this->title;
    }
}