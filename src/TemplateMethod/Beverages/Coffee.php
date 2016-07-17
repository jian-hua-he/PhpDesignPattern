<?php

namespace Src\TemplateMethod\Beverages;

class Coffee extends CaffeineBeverage
{
    protected function brew()
    {
        echo "Brew coffee grind\n";
    }

    protected function addCondiments()
    {
        echo "Add milk and suger\n";
    }
}