<?php

namespace Src\Factory\Pizza;

class ThinCrustClamPizza extends Pizza
{
    public $name = 'Thin Crust Clam Pizza';

    protected function prepareProcess()
    {
        echo "Add Clam\n";
    }
}