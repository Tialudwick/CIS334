<?php

declare(strict_types=1);

namespace App\Discovery;

class FacultyMember extends Member
{
    public function __construct(
        string $name,
        string $email,
        private string $department
    ) {
        parent::__construct($name, $email);
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function getRoleDetails(): string
    {
        return "Faculty - Dept: {$this->department}";
    }
}