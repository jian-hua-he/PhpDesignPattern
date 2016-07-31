<?php

namespace Src\State\States;

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can't insert another quarter\n";
    }

    public function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turned...\n";
        $this->gumballMachine->setState($this->getSoldState());
    }

    public function dispense()
    {
        echo "No gumball dispensed\n";
    }
}