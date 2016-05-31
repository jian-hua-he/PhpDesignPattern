<?php

namespace Src\Decorator\Beverages;

class Coffee Implements BeverageInterface
{
    public function name()
    {
        return 'Coffee';
    }

    public function cost()
    {
        return 1.99;
    }
}