<?php

namespace Src\Strategy\Behaviors;

class WalkNoWay implements WalkBehaviorInterface
{
    public function walk()
    {
        return 'Walk no way';
    }
}