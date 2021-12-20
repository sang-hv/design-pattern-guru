<?php

declare(strict_types=1);

namespace DesignPatternPHP\Creational\Prototype;

abstract class CarPrototype
{
    protected string $name;

    protected array $wheels;

    protected array $doors;

    abstract public function __clone();

    public function __construct($name)
    {
        $this->name = $name;
        $this->wheels = ['One'];
        $this->doors = ['One'];
    }
}