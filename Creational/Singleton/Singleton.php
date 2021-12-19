<?php

declare(strict_types=1);

namespace DesignPatternPHP\Creational\Singleton;

use Exception;

class Singleton
{
    /**
     * @var Singleton|null
     */
    static private ?Singleton $instance;

    /**
     * can not call outsize
     */
    private function __construct()
    {

    }

    /**
     * @return Singleton
     */
    static public function getInstance(): Singleton
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * @throws Exception
     */
    public function __wakeup(): void
    {
        throw new Exception("Can not unserialize singleton");
    }
}