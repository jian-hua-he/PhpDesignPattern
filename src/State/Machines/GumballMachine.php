<?php

namespace Src\State\Machines;

use Src\State\States\State;
use Src\State\States\SoldOutState;
use Src\State\States\NoQuarterState;
use Src\State\States\HasQuarterState;
use Src\State\States\SoldState;
use Exception;

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    private $currentState;
    private $count = 0;

    public function __construct($gumballNumber)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->count = $gumballNumber;

        $this->currentState = $this->soldOutState;
        if ($this->count > 0) {
            $this->currentState = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->currentState->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->currentState->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->currentState->turnCrank();
    }

    public function dispense()
    {
        $this->currentState->dispense();
    }

    public function setState(State $state)
    {
        $this->currentState = $state;
    }

    public function releaseBall()
    {
        echo "A gunball comes rolling out the solt...\n";
        if ($this->count > 0) {
            $this->count = $this->count - 1;
        }
    }

    public function getCount()
    {
        return $this->count;
    }

    public function printStatus()
    {
        echo "===== Current Status =====\n";
        echo "Gunball Count: {$this->count}\n";

        switch ($this->currentState) {
            case $this->soldOutState:
                echo "Machine is sold out\n";
                break;

            case $this->noQuarterState:
                echo "Machine is waiting for quarter\n";
                break;

            case $this->hasQuarterState:
                echo "Machine is waiting for you to turn crank\n";
                break;

            case $this->soldState:
                echo "Machine just sold a gunball\n";
                break;

            default:
                throw new Exception("Invalid state");
                break;
        }

        echo "===========================\n";
        echo "\n";
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }
}