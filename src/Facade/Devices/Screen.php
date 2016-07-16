<?php

namespace Src\Facade\Devices;

class Screen
{
    public function on()
    {
        echo "Turn on the screen\n";
    }

    public function off()
    {
        echo "Turn of the screen\n";
    }

    public function setBrightness($brightness)
    {
        echo "Set brightness to {$brightness}\n";
    }
}