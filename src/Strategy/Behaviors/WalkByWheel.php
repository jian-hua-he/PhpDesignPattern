<?php

namespace Src\Strategy\Behaviors;

class WalkByWheel implements WalkBehaviorInterface
{
    public function walk()
    {
        return 'Rolling sound';
    }
}