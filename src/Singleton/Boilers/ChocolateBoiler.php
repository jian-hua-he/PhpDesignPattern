<?php

namespace Src\Singleton\Boilers;

class ChocolateBoiler
{
    private static $instance;
    private static $instanceCount = 0;

    private function __construct()
    {
        self::$instanceCount += 1;
    }

    public static function getInstance()
    {
        if ( ! self::$instance) {
            self::$instance = new ChocolateBoiler;
        }

        return self::$instance;
    }

    public function getName()
    {
        return 'Chocolate Boiler';
    }

    public function getCount()
    {
        return self::$instanceCount;
    }
}