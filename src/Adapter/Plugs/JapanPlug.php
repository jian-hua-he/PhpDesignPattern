<?php

namespace Src\Adapter\Plugs;

class JapanPlug implements JapanPlugInterface
{
    public function insertJapanSocket()
    {
        echo "Insert to flat socket\n";
    }
}