<?php

namespace DesignPatternPHP\Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Partial\Vehicle;

interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}