<?php

namespace Src\Command\Commands;

use Src\Command\Receivers\ReceiverInterface;

class LightOnCommand implements CommandInterface
{
    private $light;

    public function __construct(ReceiverInterface $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->on();
    }
}