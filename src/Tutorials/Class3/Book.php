<?php
declare(strict_types=1);

class Book extends MediaItem
{
    private int $pageCount;

    public function __construct(int $id, string $title, int $pageCount)
    {
        if ($pageCount < 1) {
            throw new InvalidArgumentException('Page count must be a positive integer.');
        }
        parent::__construct($id, $title);
        $this->pageCount = $pageCount;
    }
    //override section
    public function describe(): string
    {
        return parent::describe() . ' / ' . $this->pageCount . ' pages';

    }
}