<?php

namespace Src\Strategy\Cats;

abstract class Cat
{
    protected $mewBehavior;

    public abstract function display();

    public function mew()
    {
        return $this->mewBehavior->mew();
    }
}