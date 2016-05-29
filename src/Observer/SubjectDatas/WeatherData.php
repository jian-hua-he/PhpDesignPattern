<?php

namespace Src\Observer\SubjectDatas;

class WeatherData implements SubjectDataInterface
{
    public $temperature;
    public $humidity;
    public $pressure;
}