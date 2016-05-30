<?php

namespace Src\Decorator\Beverages;

class BlackTea extends Beverage
{
    protected $description = 'Black Tea';

    public function cost()
    {
        return 0.25;
    }
}