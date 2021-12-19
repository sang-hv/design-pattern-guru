<?php

namespace DesignPatternPHP\Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Partial\Car;
use Creational\Builder\CarBuilder\Partial\Door;
use Creational\Builder\CarBuilder\Partial\Engine;
use Creational\Builder\CarBuilder\Partial\Truck;
use Creational\Builder\CarBuilder\Partial\Vehicle;
use Creational\Builder\CarBuilder\Partial\Wheel;

class TruckBuilder implements Builder
{
    /** @var Truck */
    private Truck $truck;

    /**
     * @return Truck
     */
    public function getTruck(): Truck
    {
        return $this->truck;
    }

    /**
     * @param Truck $truck
     */
    public function setTruck(Truck $truck): void
    {
        $this->truck = $truck;
    }



    /**
     * @return void
     */
    public function createVehicle()
    {
        $this->setTruck(new Truck());
    }

    /**
     * @return void
     */
    public function addWheel()
    {
        $this->getTruck()->setPart('First Wheel', new Wheel());
        $this->getTruck()->setPart('Second Wheel', new Wheel());
        $this->getTruck()->setPart('Third Wheel', new Wheel());
        $this->getTruck()->setPart('Fourth Wheel', new Wheel());
        $this->getTruck()->setPart('Fifth Wheel', new Wheel());
        $this->getTruck()->setPart('Sixth Wheel', new Wheel());
    }

    /**\
     * @return void
     */
    public function addEngine()
    {
        $this->getTruck()->setPart('Engine', new Engine());
    }

    /**
     * @return void
     */
    public function addDoors()
    {
        $this->getTruck()->setPart('First Door', new Door());
        $this->getTruck()->setPart('Second Door', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        echo "Truck";

        return $this->getVehicle();
    }
}