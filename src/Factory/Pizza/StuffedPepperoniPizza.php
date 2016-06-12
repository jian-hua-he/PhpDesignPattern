<?php

namespace Src\Factory\Pizza;

class StuffedPepperoniPizza extends Pizza
{
    public $name = 'Stuffed Pepperoni Pizza';

    protected function prepareProcess()
    {
        echo "Add Pepperoni\n";
    }
}