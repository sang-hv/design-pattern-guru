<?php

namespace Creational\Builder\CarBuilder\Partial;

interface Vehicle
{
    public function setPart(string $key, object $value);
}