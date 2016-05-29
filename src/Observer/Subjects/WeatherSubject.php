<?php

namespace Src\Observer\Subjects;

use Src\Observer\Observers\ObserverInterface;
use Src\Observer\SubjectDatas\WeatherData;

class WeatherSubject extends Subject
{
    private $weatherData;

    public function __construct()
    {
        $this->weatherData = new WeatherData;
    }

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers);
        unset($this->observers[$index]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->weatherData);
        }
    }

    public function updateMeasurements($temperature, $humidity, $pressure)
    {
        $this->weatherData->temperature = $temperature;
        $this->weatherData->humidity = $humidity;
        $this->weatherData->pressure = $pressure;

        $this->notifyObservers();
    }
}