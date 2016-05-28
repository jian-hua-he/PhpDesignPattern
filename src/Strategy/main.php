<?php

require '../../vendor/autoload.php';

Use Src\Strategy\Cats\ActualCat;

$cat = new ActualCat;

echo $cat->mew();
echo "\n";