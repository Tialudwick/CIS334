<?php
declare(strict_types=1);
namespace App\Tutorials\Class4;
class User
{
 public function __construct(private string $name)
 {
 }
 public function getName(): string
 {
 return $this->name;
 }
}
