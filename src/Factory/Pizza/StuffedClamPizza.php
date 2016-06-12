<?php

namespace Src\Factory\Pizza;

class StuffedClamPizza extends Pizza
{
    public $name = 'Stuffed Clam Pizza';

    protected function prepareProcess()
    {
        echo "Add Clam\n";
    }
}