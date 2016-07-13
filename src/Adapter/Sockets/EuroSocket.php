<?php

namespace Src\Adapter\Sockets;

use Src\Adapter\Plugs\EuroPlugInterface;

class EuroSocket
{
    public function inserted(EuroPlugInterface $plug)
    {
        $plug->insertEuroSocket();
    }
}