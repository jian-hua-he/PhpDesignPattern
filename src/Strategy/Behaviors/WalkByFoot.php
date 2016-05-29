<?php

namespace Src\Strategy\Behaviors;

class WalkByFoot implements WalkBehaviorInterface
{
    public function walk()
    {
        return 'Stampede sound';
    }
}