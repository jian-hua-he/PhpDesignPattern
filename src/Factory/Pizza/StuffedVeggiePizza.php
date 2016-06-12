<?php

namespace Src\Factory\Pizza;

class StuffedVeggiePizza extends Pizza
{
    public $name = 'Stuffed Veggie Pizza';

    protected function prepareProcess()
    {
        echo "Add Veggie\n";
    }
}