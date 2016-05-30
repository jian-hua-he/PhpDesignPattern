<?php

namespace Src\Decorator\Beverages;

class Liquor extends Beverage
{
    protected $name = 'Liquor';

    public function cost()
    {
        return 2.99;
    }
}