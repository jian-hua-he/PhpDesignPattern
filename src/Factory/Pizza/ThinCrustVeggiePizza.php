<?php

namespace Src\Factory\Pizza;

class ThinCrustVeggiePizza extends Pizza
{
    public $name = 'Thin Crust Veggie Pizza';

    protected function prepareProcess()
    {
        echo "Add Veggie\n";
    }
}