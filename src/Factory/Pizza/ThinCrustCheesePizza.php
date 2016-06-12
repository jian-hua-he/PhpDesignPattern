<?php

namespace Src\Factory\Pizza;

class ThinCrustCheesePizza extends Pizza
{
    public $name = 'Thin Crust Cheese Pizza';

    protected function prepareProcess()
    {
        echo "Add Cheese\n";
    }
}