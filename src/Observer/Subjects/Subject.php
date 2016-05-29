<?php

namespace Src\Observer\Subjects;

use Src\Observer\Observers\ObserverInterface;

class Subject
{
    protected $observers = [];
    protected $data;

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
            $observer->update($this->data);
        }
    }
}