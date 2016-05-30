<?php

namespace Src\Decorator\Beverages;

abstract class Beverage
{
    protected $name;

    public function __construct()
    {
        $this->name = 'Unknown Beverage';
    }

    public abstract function cost();

    public function getName()
    {
        return $this->name;
    }
}