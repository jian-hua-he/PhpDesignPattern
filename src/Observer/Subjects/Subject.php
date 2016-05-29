<?php

namespace Src\Observer\Subjects;

use Src\Observer\Observers\ObserverInterface;

abstract class Subject
{
    protected $observers = [];

    public abstract function registerObserver(ObserverInterface $observer);
    public abstract function removeObserver(ObserverInterface $observer);
    public abstract function notifyObservers();
}