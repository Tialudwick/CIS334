<?php
declare(strict_types=1);
class Vehicle
{
 public string $makeModel = 'Unknown';
 public function getLabel(): string
 {
 return $this->makeModel;
 }
}