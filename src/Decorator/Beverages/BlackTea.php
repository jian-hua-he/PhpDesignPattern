<?php

namespace Src\Decorator\Beverages;

class BlackTea implements BeverageInterface
{
    public function getName()
    {
        return 'Black Tea';
    }

    public function cost()
    {
        return 0.25;
    }
}