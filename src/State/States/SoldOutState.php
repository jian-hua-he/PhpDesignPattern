<?php

namespace Src\State\States;

class SoldOutState implements State
{
    private $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can’t insert another quarter\n";
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
        echo "No gumball dispensed\n";
    }
}