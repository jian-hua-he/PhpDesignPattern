<?php

namespace Src\Strategy\Cats;

use Src\Strategy\Behaviors\MewWithMouth;

class ActualCat extends Cat
{
    public function __construct()
    {
        $this->mewBehavior = new MewWithMouth;
    }

    public function display()
    {
        return "I'm actual cat";
    }
}