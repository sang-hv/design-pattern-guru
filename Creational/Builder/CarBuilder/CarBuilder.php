<?php

namespace DesignPatternPHP\Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Partial\Car;
use Creational\Builder\CarBuilder\Partial\Door;
use Creational\Builder\CarBuilder\Partial\Engine;
use Creational\Builder\CarBuilder\Partial\Vehicle;
use Creational\Builder\CarBuilder\Partial\Wheel;

class CarBuilder implements Builder
{
    /** @var Car */
    private Car $car;

    /**
     * @return Car
     */
    protected function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @param Car $car
     */
    protected function setCar(Car $car): void
    {
        $this->car = $car;
    }

    /**
     * @return void
     */
    public function createVehicle()
    {
        $this->setCar(new Car());
    }

    /**
     * @return void
     */
    public function addWheel()
    {
        $this->getCar()->setPart('First Wheel', new Wheel());
        $this->getCar()->setPart('Second Wheel', new Wheel());
        $this->getCar()->setPart('Third Wheel', new Wheel());
        $this->getCar()->setPart('Fourth Wheel', new Wheel());
    }

    /**\
     * @return void
     */
    public function addEngine()
    {
        $this->getCar()->setPart('Engine', new Engine());
    }

    /**
     * @return void
     */
    public function addDoors()
    {
        $this->getCar()->setPart('First Door', new Door());
        $this->getCar()->setPart('Second Door', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        echo "Car";

        return $this->getVehicle();
    }
}