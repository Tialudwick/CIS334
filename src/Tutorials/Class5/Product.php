<?php
declare(strict_types=1);
namespace App\Tutorials\Class5;
class Product
{
 public function __construct(
 private string $description,
 private float $price,
 ) {
 }
 public function getDescription(): string
 {
 return $this->description;
 }
 public function getPrice(): float
 {
 return $this->price;
 }
 public function __toString(): string
 {
 return $this->description . ' ($' . number_format($this->price, 2) . ')';
 }
}