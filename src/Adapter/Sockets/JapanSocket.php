<?php

namespace Src\Adapter\Sockets;

use Src\Adapter\Plugs\JapanPlugInterface;

class JapanSocket
{
    public function inserted(JapanPlugInterface $plug)
    {
        $plug->insertJapanSocket();
    }
}