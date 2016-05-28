<?php

namespace Src\Strategy\Behaviors;

class MewWithScreen implements MewBehaviorInterface
{
    public function mew()
    {
        return 'Mew Mew (Console log)';
    }
}