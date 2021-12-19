<?php

namespace DesignPatternPHP\Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Partial\Vehicle;

class Direction
{
    public function buildCar(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->addDoors();
        $builder->addEngine();

        return $builder->getVehicle();
    }
}