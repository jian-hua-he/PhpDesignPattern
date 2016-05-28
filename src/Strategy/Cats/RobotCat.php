<?php

namespace Src\Strategy\Cats;

use Src\Strategy\Behaviors\MewWithScreen;

class RobotCat extends Cat
{
    public function __construct()
    {
        $this->mewBehavior = new MewWithScreen;
    }

    public function display()
    {
        return 'Robot Cat';
    }
}