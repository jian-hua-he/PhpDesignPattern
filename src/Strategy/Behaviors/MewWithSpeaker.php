<?php

namespace Src\Strategy\Behaviors;

class MewWithSpeaker implements MewBehaviorInterface
{
    public function mew()
    {
        return 'Mew Mew (Mechanical sound)';
    }
}