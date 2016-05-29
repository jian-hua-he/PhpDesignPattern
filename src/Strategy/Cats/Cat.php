<?php

namespace Src\Strategy\Cats;

abstract class Cat
{
    protected $mewBehavior;
    protected $walkBehavior;

    public abstract function display();

    public function mew()
    {
        return $this->mewBehavior->mew();
    }

    public function walk()
    {
        return $this->walkBehavior->walk();
    }
}