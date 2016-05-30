<?php

namespace Src\Decorator\Beverages;

abstract class Beverage
{
    protected $description = 'Unknown Beverage';

    public abstract function cost();

    public abstract function getDescription()
    {
        return $this->description;
    }
}