<?php

namespace Src\Facade\Devices;

class Speaker
{
    public function on()
    {
        echo "Turn on the speaker\n";
    }

    public function off()
    {
        echo "Turn off the speaker\n";
    }

    public function setVolume($volume)
    {
        echo "Set volume to {$volume}\n";
    }
}