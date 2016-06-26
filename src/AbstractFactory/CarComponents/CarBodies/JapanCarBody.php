<?php

namespace Src\AbstractFactory\CarComponents\CarBodies;

class JapanCarBody implements CarBodyInterface
{
    public function getDescription()
    {
        return "Japan's Car Body";
    }
}