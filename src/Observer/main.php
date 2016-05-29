<?php

require '../../vendor/autoload.php';

use Src\Observer\Subjects\WeatherSubject;
use Src\Observer\Observers\SmartPhone;

$weatherSubject = new WeatherSubject;

$smartPhone = new SmartPhone('Jian-Hua, He');

$weatherSubject->registerObserver($smartPhone);
$weatherSubject->updateMeasurements(30, 40, 1012);