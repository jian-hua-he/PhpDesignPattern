<?php

namespace Src\Decorator\Beverages;

class Coffee extends Beverage
{
    public function __construct()
    {
        $this->name = 'Coffee';
    }

    public function cost()
    {
        return 1.99;
    }
}