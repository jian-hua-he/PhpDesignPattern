<?php

namespace Src\Observer\Subjects;

use Src\Observer\Observers\ObserverInterface;
use Src\Observer\SubjectDatas\WeatherData;

class WeatherSubject extends Subject
{
    public function __construct()
    {
        $this->data = new WeatherData;
    }

    public function updateMeasurements($temperature, $humidity, $pressure)
    {
        $this->data->temperature = $temperature;
        $this->data->humidity = $humidity;
        $this->data->pressure = $pressure;

        $this->notifyObservers();
    }
}