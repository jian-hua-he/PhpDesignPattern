<?php

namespace Src\Facade\Devices;

class DVDPlayer
{
    public function on()
    {
        echo "Turn on the DVD player\n";
    }

    public function off()
    {
        echo "Turn off the DVD player\n";
    }

    public function play($dvd)
    {
        echo "Play {$dvd}...";
    }
}