<?php

require '../../vendor/autoload.php';

use Src\Observer\Subjects\WeatherSubject;
use Src\Observer\Subjects\NewsSubject;
use Src\Observer\Observers\SmartPhone;

$jianhuaSmartPhone = new SmartPhone('Jian-Hua, He');
$yahueiSmartPhone = new SmartPhone('Ya-Huei, Wu');

$weatherSubject = new WeatherSubject;
$weatherSubject->registerObserver($jianhuaSmartPhone);
$weatherSubject->updateMeasurements(30, 40, 1012);

$newsSubject = new NewsSubject;
$newsSubject->registerObserver($jianhuaSmartPhone);
$newsSubject->registerObserver($yahueiSmartPhone);
$newsSubject->updateNews('Obama go to Hiroshima', 'Love and Peace');

$newsSubject->removeObserver($jianhuaSmartPhone);
$newsSubject->updateNews('ES6 is 99% support by chrome!', 'That is awesome!');
