<?php
declare(strict_types=1);

final class DVD extends MediaItem
{
    public function describe(): string
    {
        return 'DVD: ' . $this->title;
    }
}
