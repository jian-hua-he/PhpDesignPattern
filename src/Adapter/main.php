<?php

require '../../vendor/autoload.php';

use Src\Adapter\Plugs\EuroPlug;
use Src\Adapter\Plugs\JapanPlug;
use Src\Adapter\Adapters\EuroPlugToJapanAdapter;
use Src\Adapter\Adapters\JapanPlugToEuroAdapter;
use Src\Adapter\Sockets\EuroSocket;
use Src\Adapter\Sockets\JapanSocket;

$euroPlug = new EuroPlug;
$euroSocket = new EuroSocket;
$euroSocket->inserted($euroPlug);

$japanPlug = new JapanPlug;
$japanSocket = new JapanSocket;
$japanSocket->inserted($japanPlug);

$japanPlugToEuroAdapter = new JapanPlugToEuroAdapter($japanPlug);
$euroSocket->inserted($japanPlugToEuroAdapter);

$euroPlugToJapanAdapter = new EuroPlugToJapanAdapter($euroPlug);
$japanSocket->inserted($euroPlugToJapanAdapter);