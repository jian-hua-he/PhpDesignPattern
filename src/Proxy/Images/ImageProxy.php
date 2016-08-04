<?php

namespace Src\Proxy\Images;

class ImageProxy implements Image
{
    private $image;

    public function display()
    {
        if ( ! $this->image) {
            // Simulate download image
            echo "Download image...\n";

            $this->image = new RealImage;
        }

        return $this->image->display();
    }
}