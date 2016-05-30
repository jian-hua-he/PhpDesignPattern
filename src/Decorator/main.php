<?php

require '../../vendor/autoload.php';

use Src\Decorator\Beverages\BlackTea;
use Src\Decorator\Beverages\Coffee;
use Src\Decorator\Beverages\Liquor;
use Src\Decorator\Condiments\Milk;
use Src\Decorator\Condiments\Sugar;

$blackTea = new Sugar(new Milk(new BlackTea));
echo "{$blackTea->getName()} cost : {$blackTea->cost()}\n";

$coffee = new Sugar(new Coffee);
echo "{$coffee->getName()} cost : {$coffee->cost()}\n";

$liquor = new Milk(new Liquor);
echo "{$liquor->getName()} cost : {$liquor->cost()}\n";