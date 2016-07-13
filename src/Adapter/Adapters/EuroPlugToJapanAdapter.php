<?php

namespace Src\Adapter\Adapters;

use Src\Adapter\Plugs\EuroPlugInterface;
use Src\Adapter\Plugs\JapanPlugInterface;

class EuroPlugToJapanAdapter implements JapanPlugInterface
{
    private $euroPlug;

    public function __construct(EuroPlugInterface $euroPlug)
    {
        $this->euroPlug = $euroPlug;
    }

    public function insertJapanSocket()
    {
        $this->euroPlug->insertEuroSocket();
    }
}