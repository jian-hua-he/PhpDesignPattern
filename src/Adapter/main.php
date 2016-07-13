<?php

require '../../vendor/autoload.php';

use Src\Adapter\Plugs\EuroPlug;
use Src\Adapter\Plugs\JapanPlug;

$euroPlug = new EuroPlug;
$euroPlug->insertEuroSocket();

$japanPlug = new JapanPlug;
$japanPlug->insertJapanSocket();