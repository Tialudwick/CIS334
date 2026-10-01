<?php
declare(strict_types=1);
require_once __DIR__ . '/../../src/Tutorials/Class3/Vehicle.php';
require_once __DIR__ . '/../../src/Tutorials/Class3/Car.php';
require_once __DIR__ . '/../../src/Tutorials/Class3/Boat.php';
$car = new Car(1,);
$car->makeModel = 'City Compact';
$boat = new Boat();
$boat->makeModel = 'Harbor Cruiser';
echo $car->getLabel(), ' / ', $car->bodyShape, '<br>', PHP_EOL;
echo $boat->getLabel(), ' / ', $boat->countryOfRegistration, '<br>', PHP_EOL;

$sailBoat = new SailBoat();
$sailBoat->makeModel = 'Wind Runner';
echo $sailBoat->getLabel(), ' / ', $sailBoat->numberOfMasts, '<br>', PHP_EOL;
var_dump($sailBoat instanceof Boat, $sailBoat instanceof Vehicle);
