<?php

require '../../vendor/autoload.php';

use Src\AbstractFactory\ComponentFactories\GemanyComponentFactory;
use Src\AbstractFactory\ComponentFactories\JapanComponentFactory;
use Src\AbstractFactory\Cars\Car;

$japanComponentFactory = new JapanComponentFactory;
$gemanyComponentFactory = new GemanyComponentFactory;

$japanTire = $japanComponentFactory->createTire();
$japanCarBody = $japanComponentFactory->createCarBody();
$japanCar = new Car($japanTire, $japanCarBody);
echo "{$japanCar->drive()}\n";

$gemanyTire = $gemanyComponentFactory->createTire();
$gemanyCarBody = $gemanyComponentFactory->createCarBody();
$gemanyCar = new Car($gemanyTire, $gemanyCarBody);
echo "{$gemanyCar->drive()}\n";

$mixinCar = new Car($japanTire, $gemanyCarBody);
echo "{$mixinCar->drive()}\n";