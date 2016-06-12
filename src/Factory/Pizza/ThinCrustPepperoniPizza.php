<?php

namespace Src\Factory\Pizza;

class ThinCrustPepperoniPizza extends Pizza
{
    public $name = 'Thin Crust Pepperoni Pizza';

    protected function prepareProcess()
    {
        echo "Add Pepperoni\n";
    }
}