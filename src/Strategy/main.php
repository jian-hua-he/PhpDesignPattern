<?php

require '../../vendor/autoload.php';

use Src\Strategy\Cats\ActualCat;
use Src\Strategy\Cats\ToyCat;
use Src\Strategy\Cats\RobotCat;
use Src\Strategy\Behaviors\MewWithMouth;
use Src\Strategy\Behaviors\MewWithScreen;
use Src\Strategy\Behaviors\MewWithSpeaker;
use Src\Strategy\Behaviors\WalkByFoot;
use Src\Strategy\Behaviors\WalkByWheel;
use Src\Strategy\Behaviors\WalkNoWay;

$mewWithMouth = new MewWithMouth;
$walkByFoot = new WalkByFoot;
$cat = new ActualCat($mewWithMouth, $walkByFoot);

echo $cat->display() . 'Mew Sound: ' . $cat->mew();
echo "\n";
echo $cat->display() . 'Walk Sound: ' . $cat->walk();
echo "\n\n";

$mewWithSpeaker = new MewWithSpeaker;
$walkByWheel = new WalkByWheel;
$toyCat = new ToyCat($mewWithSpeaker, $walkByWheel);

echo $toyCat->display() . 'Mew Sound: ' . $toyCat->mew();
echo "\n";
echo $toyCat->display() . 'Walk Sound: ' . $toyCat->walk();
echo "\n\n";

$mewWithScreen = new MewWithScreen;
$walkNoWay = new WalkNoWay;
$robotCat = new RobotCat($mewWithScreen, $walkNoWay);

echo $robotCat->display() . 'Mew Sound: ' . $robotCat->mew();
echo "\n";
echo $robotCat->display() . 'Walk Sound: ' . $robotCat->walk();
echo "\n\n";