<?php

declare(strict_types= 1);

namespace App\Exercises\Class5;

class Staff
{
    private string $name;
    private string $jobTitle;

    public function __construct(string $name, string $jobTitle)
    {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }
}