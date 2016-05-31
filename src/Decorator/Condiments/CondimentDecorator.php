<?php

namespace Src\Decorator\Condiments;

use Src\Decorator\Beverages\BeverageInterface;

abstract class CondimentDecorator implements BeverageInterface
{
    protected $beverage;

    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }

    public abstract function getName();
    public abstract function cost();
}