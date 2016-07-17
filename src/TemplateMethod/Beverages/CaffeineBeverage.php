<?php

namespace Src\TemplateMethod\Beverages;

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew();
    abstract protected function addCondiments();

    protected function boilWater()
    {
        echo "Boil Water\n";
    }

    protected function pourInCup()
    {
        echo "Pour in Cup\n";
    }
}