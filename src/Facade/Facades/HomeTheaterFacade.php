<?php

namespace Src\Facade\Facades;

use Src\Facade\Devices\DVDPlayer;
use Src\Facade\Devices\Light;
use Src\Facade\Devices\Popper;
use Src\Facade\Devices\Screen;
use Src\Facade\Devices\Speaker;

class HomeTheaterFacade
{
    private $dvdPlayer;
    private $light;
    private $popper;
    private $screen;
    private $speaker;

    public function __construct()
    {
        $this->dvdPlayer = new DVDPlayer;
        $this->light = new Light;
        $this->popper = new Popper;
        $this->screen = new Screen;
        $this->speaker = new Speaker;
    }

    public function watchDVD($dvd)
    {
        // Start to cook popcorn
        $this->popper->on();
        $this->popper->pop();

        // Turn off light
        $this->light->off();

        // Set screen
        $this->screen->on();
        $this->screen->setBrightness(10);

        // Set volume
        $this->speaker->on();
        $this->speaker->setVolume(10);

        // Play DVD
        $this->dvdPlayer->on();
        $this->dvdPlayer->play($dvd);
    }

    public function endWatch()
    {
        $this->popper->off();
        $this->light->on();
        $this->screen->off();
        $this->speaker->off();
        $this->dvdPlayer->off();
    }
}