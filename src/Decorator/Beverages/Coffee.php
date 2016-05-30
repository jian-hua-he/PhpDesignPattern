<?php

namespace Src\Decorator\Beverages;

class Coffee extends Beverage
{
    protected $description = 'Coffee';

    public function cost()
    {
        return 1.99;
    }
}