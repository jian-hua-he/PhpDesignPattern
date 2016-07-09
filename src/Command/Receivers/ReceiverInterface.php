<?php

namespace Src\Command\Receivers;

interface ReceiverInterface
{
    public function on();
    public function off();
}