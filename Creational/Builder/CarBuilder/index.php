<?php
// create new car

use DesignPatternPHP\Creational\Builder\CarBuilder\CarBuilder;
use DesignPatternPHP\Creational\Builder\CarBuilder\Direction;

$carBuilder = new CarBuilder();
$direction = new Direction();

$car = $direction->buildCar($carBuilder);

