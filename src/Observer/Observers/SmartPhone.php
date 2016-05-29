<?php

namespace Src\Observer\Observers;

use Src\Observer\SubjectDatas\SubjectDataInterface;
use Src\Observer\Displays\DisplayInterface;
use Src\Observer\SubjectDatas\WeatherData;
use Src\Observer\SubjectDatas\NewsData;

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
        echo "Smart Phone owner: {$this->owner}\n";

        if ($data instanceof WeatherData) {
            echo "Temperature is: {$data->temperature}\n";
            echo "Humidity is: {$data->humidity}\n";
            echo "Pressure is: {$data->pressure}\n";
            echo "\n";
        } else if ($data instanceof NewsData)
            echo "News title: {$data->title}\n";
            echo "{$data->content}\n";
            echo "\n";
        } else {
            echo "You put wrong data\n";
        }
    }
}