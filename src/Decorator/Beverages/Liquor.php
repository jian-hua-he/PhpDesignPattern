<?php

namespace Src\Decorator\Beverages;

class Liquor extends Beverage
{
    public function __construct()
    {
        $this->name = 'Liquor';
    }

    public function cost()
    {
        return 2.99;
    }
}