<?php

require '../../vendor/autoload.php';

use Src\Facade\Facades\HomeTheaterFacade;

$theater = new HomeTheaterFacade;
$dvd = 'Star War';
$theater->watchDVD($dvd);
$theater->endWatch();