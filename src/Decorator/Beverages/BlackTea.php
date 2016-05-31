<?php

namespace Src\Decorator\Beverages;

class BlackTea implements BeverageInterface
{
    public function name()
    {
        return 'Black Tea';
    }

    public function cost()
    {
        return 0.25;
    }
}