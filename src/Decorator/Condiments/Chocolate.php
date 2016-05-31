<?php

namespace Src\Decorator\Condiments;

class Chocolate extends CondimentDecorator
{
    public function cost()
    {
        return $this->beverage->cost() + 0.25;
    }

    public function getName()
    {
        return $this->beverage->getName() . ', Sugar';
    }
}