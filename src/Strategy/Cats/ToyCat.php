<?php

namespace Src\Strategy\Cats;

use Src\Strategy\Behaviors\MewBehaviorInterface;
use Src\Strategy\Behaviors\WalkBehaviorInterface;

class ToyCat extends Cat
{
    public function __construct(MewBehaviorInterface $mewBehavior,
                                WalkBehaviorInterface $walkBehavior)
    {
        $this->mewBehavior = $mewBehavior;
        $this->walkBehavior = $walkBehavior;
    }

    public function display()
    {
        return 'Toy Cat';
    }
}