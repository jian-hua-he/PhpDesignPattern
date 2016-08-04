<?php

namespace Src\Proxy\Images;

class RealImage implements Image
{
    public function display()
    {
        // Many complex algorithm
        echo "Display Image\n";
    }
}