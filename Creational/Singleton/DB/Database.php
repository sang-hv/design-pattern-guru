<?php

namespace DesignPatternPHP\Creational\Singleton\DB;

class Database
{
    /**
     * @var Database|null
     */
    static private ?Database $instance;

    private function __construct()
    {
    }

    /**
     * @return Database|null
     */
    static public function getInstance(): ?Database
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

}