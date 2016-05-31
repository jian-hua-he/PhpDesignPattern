<?php

namespace Src\Decorator\Beverages;

class Coffee Implements BeverageInterface
{
    public function getName()
    {
        return 'Coffee';
    }

    public function cost()
    {
        return 1.99;
    }
}