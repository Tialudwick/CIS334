<?php

declare(strict_types=1);

namespace App\Discovery;

class StudentMember extends Member
{
    public function __construct(
        string $name,
        string $email,
        private string $major
    ) {
        parent::__construct($name, $email);
    }

    public function getMajor(): string
    {
        return $this->major;
    }

    public function getRoleDetails(): string
    {
        return "Student - Major: {$this->major}";
    }
}