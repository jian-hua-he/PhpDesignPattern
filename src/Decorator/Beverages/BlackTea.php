<?php

namespace Src\Decorator\Beverages;

class BlackTea extends Beverage
{
    public function __construct()
    {
        $this->name = 'Black Tea';
    }

    public function cost()
    {
        return 0.25;
    }
}