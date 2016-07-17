<?php

namespace Src\TemplateMethod\Beverages;

class Tea extends CaffeineBeverage
{
    protected function brew()
    {
        echo "Sleep tea bag\n";
    }

    protected function addCondiments()
    {
        echo "Add suger\n";
    }
}