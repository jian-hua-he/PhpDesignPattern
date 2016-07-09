<?php

namespace Src\Command\Controls;

use Src\Command\Commands\CommandInterface;

class LightControl
{
    private $onCommand;
    private $offCommand;

    public function __construct(CommandInterface $onCommand,
                                CommandInterface $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }

    public function pressOnButton()
    {
        echo "{$this->onCommand->execute()}\n";
    }

    public function pressOffButton()
    {
        echo "{$this->offCommand->execute()}\n";
    }
}