<?php

namespace Src\State\States;

class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You haven’t inserted a quarter\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there’s no quarter\n";
    }

    public function dispense()
    {
        echo "You need to pay first\n";
    }
}