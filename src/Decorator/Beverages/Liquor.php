<?php

namespace Src\Decorator\Beverages;

class Liquor implements BeverageInterface
{
    public function name()
    {
        return 'Liquor';
    }

    public function cost()
    {
        return 2.99;
    }
}