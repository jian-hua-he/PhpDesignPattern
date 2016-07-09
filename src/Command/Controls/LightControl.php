<?php

namespace Src\Command\Controls;

use Src\Command\Commands\CommandInterface;

class LightControl
{
    private $onCommand;
    private $offCommand;
    private $undoCommands = [];

    public function __construct(CommandInterface $onCommand,
                                CommandInterface $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }

    public function pressOnButton()
    {
        echo "{$this->onCommand->execute()}\n";
        $this->undoCommands[] = $this->onCommand;
    }

    public function pressOffButton()
    {
        echo "{$this->offCommand->execute()}\n";
        $this->undoCommands[] = $this->offCommand;
    }

    public function pressUndoButton()
    {
        if (count($this->undoCommands) > 0) {
            $command = array_pop($this->undoCommands);
            echo "{$command->execute()}\n";
        } else {
            echo "Can't undo";
        }
    }
}