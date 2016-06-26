<?php

namespace Src\AbstractFactory\ComponentFactories;

interface ComponentFactoryInterface
{
    public function createCarBody();
    public function createTire();
}