<?php

namespace Src\Decorator\Condiments;

use Src\Decorator\Beverages\Beverage;

class Sugar extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.25;
    }

    public function getName()
    {
        return $this->beverage->getName() . ', Sugar';
    }
}