<?php

namespace Src\Decorator\Condiments;

class Milk extends CondimentDecorator
{
    public function cost()
    {
        return $this->beverage->cost() + 0.5;
    }

    public function getName()
    {
        return $this->beverage->getName() . ', Milk';
    }
}