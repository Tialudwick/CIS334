<?php 
declare(strict_types= 1);

namespace App\Discovery;

abstract class Member
{
    public function __construct(
        private string $name,
        private string $email
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getRoleDetails(): string;

    public function getDisplayName(): string
    {
        return "{$this->name} (" . $this->getRoleDetails() . ")";

    }
}