<?php

namespace Src\Factory\Pizza;

class StuffedCheesePizza extends Pizza
{
    public $name = 'Stuffed Cheese Pizza';

    protected function prepareProcess()
    {
        echo "Add Cheese\n";
    }
}