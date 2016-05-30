<?php

require '../../vendor/autoload.php';

use Src\Decorator\Beverages\BlackTea;
use Src\Decorator\Beverages\Coffee;
use Src\Decorator\Beverages\Liquor;

$blackTea = new BlackTea;
echo "{$blackTea->getName()} cost : {$blackTea->cost()}\n";

$coffee = new Coffee;
echo "{$coffee->getName()} cost : {$coffee->cost()}\n";

$liquor = new Liquor;
echo "{$liquor->getName()} cost : {$liquor->cost()}\n";