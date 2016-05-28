<?php

require '../../vendor/autoload.php';

use Src\Strategy\Cats\ActualCat;
use Src\Strategy\Cats\ToyCat;
use Src\Strategy\Cats\RobotCat;

$cat = new ActualCat;
echo $cat->display() . ': ' . $cat->mew();
echo "\n";

$toyCat = new ToyCat;
echo $toyCat->display() . ': ' . $toyCat->mew();
echo "\n";

$robotCat = new RobotCat;
echo $robotCat->display() . ': ' . $robotCat->mew();
echo "\n";