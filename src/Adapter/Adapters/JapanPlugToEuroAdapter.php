<?php

namespace Src\Adapter\Adapters;

use Src\Adapter\Plugs\EuroPlugInterface;
use Src\Adapter\Plugs\JapanPlugInterface;

class JapanPlugToEuroAdapter implements EuroPlugInterface
{
    private $japanPlug;

    public function __construct(JapanPlugInterface $japanPlug)
    {
        $this->japanPlug = $japanPlug;
    }

    public function insertEuroSocket()
    {
        $this->japanPlug->insertJapanSocket();
    }
}