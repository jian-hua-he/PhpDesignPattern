<?php

namespace Src\AbstractFactory\ComponentFactories;

use Src\AbstractFactory\CarComponents\CarBodies\JapanCarBody;
use Src\AbstractFactory\CarComponents\Tires\JapanTire;

class JapanComponentFactory implements ComponentFactoryInterface
{
    public function createCarBody()
    {
        return new JapanCarBody;
    }

    public function createTire()
    {
        return new JapanTire;
    }
}