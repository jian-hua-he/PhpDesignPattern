<?php

namespace Src\AbstractFactory\CarComponents\CarBodies;

class GermanyCarBody implements CarBodyInterface
{
    public function getDescription()
    {
        return 'German Car Body';
    }
}