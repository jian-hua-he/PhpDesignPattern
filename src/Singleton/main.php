<?php

require '../../vendor/autoload.php';

use Src\Singleton\Boilers\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();

echo "{$boiler->getName()}\n";
echo "{$boiler->getCount()}\n";

$boiler = ChocolateBoiler::getInstance();

echo "{$boiler->getCount()}\n";