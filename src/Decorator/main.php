<?php

require '../../vendor/autoload.php';

use Src\Decorator\Beverages\BlackTea;
use Src\Decorator\Beverages\Coffee;
use Src\Decorator\Beverages\Liquor;
use Src\Decorator\Condiments\Milk;
use Src\Decorator\Condiments\Chocolate;

$blackTea = new Chocolate(new Milk(new BlackTea));
echo "{$blackTea->getName()} cost : {$blackTea->cost()}\n";

$coffee = new Chocolate(new Coffee);
echo "{$coffee->getName()} cost : {$coffee->cost()}\n";

$liquor = new Milk(new Liquor);
echo "{$liquor->getName()} cost : {$liquor->cost()}\n";