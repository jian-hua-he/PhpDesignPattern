<?php

namespace Src\Observer\Observers;

use Src\Observer\SubjectDatas\SubjectDataInterface;
use Src\Observer\Displays\DisplayInterface;
use Src\Observer\SubjectDatas\WeatherData;

class SmartPhone implements ObserverInterface, DisplayInterface
{
    private $owner;

    public function __construct($name)
    {
        $this->owner = $name;
    }

    public function update(SubjectDataInterface $data)
    {
        $this->display($data);
    }

    public function display(SubjectDataInterface $data)
    {
        if ($data instanceof WeatherData) {
            echo "Smart Phone owner: {$this->owner}\n";
            echo "Temperature is: {$data->temperature}\n";
            echo "Humidity is: {$data->humidity}\n";
            echo "Pressure is: {$data->pressure}\n";
            echo "\n";
        } else {
            echo "You put wrong data\n";
        }
    }
}