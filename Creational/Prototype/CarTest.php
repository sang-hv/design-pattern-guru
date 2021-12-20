<?php

namespace DesignPatternPHP\Creational\Prototype;

use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /** @test */
    public function test_can_clone_car()
    {
        $car = new  Car("Honda");

        $cloneCar = clone $car;

        $this->assertInstanceOf(Car::class, $cloneCar);
    }

}