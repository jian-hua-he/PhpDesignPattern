<?php

namespace Src\AbstractFactory\CarComponents\Tires;

class GermanyTire implements TireInterface
{
    public function getDescription()
    {
        return "German Tire";
    }
}