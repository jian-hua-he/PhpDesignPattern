<?php

namespace Src\State\States;

class SoldState implements State
{
    private $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we’re already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn’t get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $state = $this->gumballMachine->getNoQuarterState();
            $this->gumballMachine->setState($state);
        } else {
            echo "Oops, out of gumballs!\n";
            $state = $this->gumballMachine->getSoldOutState();
            $this->gumballMachine->setState($state);
        }
    }
}