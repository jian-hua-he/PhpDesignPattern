<?php

require '../../vendor/autoload.php';

use Src\State\Machines\GumballMachine;
use Src\State\States\HasQuarterState;
use Src\State\States\NoQuarterState;
use Src\State\States\SoldOutState;
use Src\State\States\SoldState;

$gumballMachine = new GumballMachine(5);
$gumballMachine->printStatus();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->dispense();
$gumballMachine->printStatus();

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();
$gumballMachine->dispense();
$gumballMachine->printStatus();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->ejectQuarter();
$gumballMachine->printStatus();

$gumballMachine->dispense();
$gumballMachine->printStatus();

$gumballMachine->insertQuarter();
$gumballMachine->printStatus();