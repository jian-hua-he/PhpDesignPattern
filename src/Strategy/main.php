<?php

require '../../vendor/autoload.php';

use Src\Strategy\Cats\ActualCat;
use Src\Strategy\Cats\ToyCat;

$cat = new ActualCat;
echo $cat->display() . ': ' . $cat->mew();
echo "\n";

$toyCat = new ToyCat;
echo $toyCat->display() . ': ' . $toyCat->mew();
echo "\n";