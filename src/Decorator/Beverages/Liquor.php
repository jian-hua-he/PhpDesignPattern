<?php

namespace Src\Decorator\Beverages;

class Liquor extends Baverage
{
    protected $description = 'Liquor';

    public function cost()
    {
        return 2.99;
    }
}