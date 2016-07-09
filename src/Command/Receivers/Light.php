<?php

namespace Src\Command\Receivers;

class Light implements ReceiverInterface
{
    public function on()
    {
        return 'Turn the light on';
    }

    public function off()
    {
        return 'Turn the light off';
    }
}