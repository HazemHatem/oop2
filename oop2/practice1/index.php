<?php

require_once 'Car.php';
require_once 'ElectricCar.php';


$car_Electric = new ElectricCar('Tesla', 'Model S', 2022, 100);
$car_Electric->doors = 5;

echo $car_Electric->start();

echo '<br>';

echo $car_Electric->charge();

echo '<br>';

echo $car_Electric->drive();

echo '<br>';

echo $car_Electric->stop();

echo '<br>';

echo "<pre>";
var_dump($car_Electric);
echo "</pre>";
