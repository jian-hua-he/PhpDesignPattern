<?php

namespace Src\Strategy\Cats;

use Src\Strategy\Behaviors\MewWithSpeaker;

class ToyCat extends Cat
{
    public function __construct()
    {
        $this->mewBehavior = new MewWithSpeaker;
    }

    public function display()
    {
        return 'Toy Cat';
    }
}