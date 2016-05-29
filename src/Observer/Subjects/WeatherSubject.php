<?php

namespace Src\Observer\Subjects;

use Src\Observer\Observers\ObserverInterface;

class WeatherSubject extends Subject
{
    private $temperature;
    private $humidity;
    private $pressure;

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
            $observer->update($this);
        }
    }

    public function updateMeasurements($temperature, $humidity, $pressure)
    {
        $this->$temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->notifyObservers();
    }
}