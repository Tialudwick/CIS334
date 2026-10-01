<?php 
declare(strict_types=1);

class Audiobook extends MediaItem
{
 private int $durationMinutes;

 public function __construct(int $id, string $title, int $durationMinutes)
 {
     if ($durationMinutes <= 0) {
         throw new InvalidArgumentException('Duration must be a positive integer.');
     }
     parent::__construct($id, $title);
     $this->durationMinutes = $durationMinutes;
 }

 //override section
    public function describe(): string
    {
        return parent::describe() . ' / ' . $this->durationMinutes . ' minutes';
    }
}