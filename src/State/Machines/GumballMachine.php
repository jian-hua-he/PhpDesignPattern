<?php

namespace Src\State\Machines;

use Src\State\States\State;
use Src\State\States\NoQuarterState;

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    private $current_state;
    private $count = 0;

    public function __construct($gumballNumber)
    {
        $this->noQuarterState = new NoQuarterState($this);
        $this->current_state = $this->noQuarterState;
    }
}