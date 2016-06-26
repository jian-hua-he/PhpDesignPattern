<?php

namespace Src\AbstractFactory\CarComponents\Tires;

class JapanTire implements TireInterface
{
    public function getDescription()
    {
        return "Japan's Tire";
    }
}