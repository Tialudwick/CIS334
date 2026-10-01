<?php
declare(strict_types=1);

abstract class Vehicle
{
 public function __construct(
    protected string $makeModel,
    private int $numPassengers,
 ) {
 }
 public function getNumPassengers(): int
 {
 return $this->numPassengers;
 }

 abstract public function getLabel(): string;
}
class Car extends Vehicle
{
 public function getLabel(): string
 {
 return $this->makeModel . ' seats ' . $this->getNumPassengers();
 }
}

$car = new Car('City Compact', 4);
echo $car->getLabel(), PHP_EOL;
