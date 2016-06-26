<?php

namespace Src\AbstractFactory\ComponentFactories;

use Src\AbstractFactory\CarComponents\CarBodies\GermanyCarBody;
use Src\AbstractFactory\CarComponents\Tires\GermanyTire;

class GemanyComponentFactory implements ComponentFactoryInterface
{
    public function createCarBody()
    {
        return new GermanyCarBody;
    }

    public function createTire()
    {
        return new GermanyTire;
    }
}