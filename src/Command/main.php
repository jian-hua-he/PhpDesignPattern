<?php

require '../../vendor/autoload.php';

use Src\Command\Receivers\Light;
use Src\Command\Commands\LightOnCommand;
use Src\Command\Commands\LightOffCommand;
use Src\Command\Controls\LightControl;

$light = new Light;
$lightOnCommand = new LightOnCommand($light);
$LightOffCommand = new LightOffCommand($light);
$lightControl = new LightControl($lightOnCommand, $LightOffCommand);

$lightControl->pressOnButton();
$lightControl->pressOffButton();
$lightControl->pressOffButton();
$lightControl->pressOnButton();
$lightControl->pressOffButton();

echo "Let's undo\n";

$lightControl->pressUndoButton();
$lightControl->pressUndoButton();
$lightControl->pressUndoButton();
$lightControl->pressUndoButton();
$lightControl->pressUndoButton();
$lightControl->pressUndoButton();