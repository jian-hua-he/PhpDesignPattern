<?php

namespace Src\Observer\Observers;

use Src\Observer\SubjectDatas\SubjectDataInterface;
use Src\Observer\Displays\DisplayInterface;

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
        echo "{$this->owner}'s Smart Phone \n";
        echo "Temperature is: {$data->temperature}\n";
        echo "Humidity is: {$data->humidity}\n";
        echo "Pressure is: {$data->pressure}\n";
        echo "\n";
    }
}