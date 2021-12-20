<?php

namespace DesignPatternPHP\Creational\Prototype;

class Car extends CarPrototype
{

    public function __clone()
    {
        // code clone hear
        $this->name = "Clone ----".$this->name;
    }
}