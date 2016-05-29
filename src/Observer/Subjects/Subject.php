<?php

namespace Src\Observer\Subjects;

abstract class Subject
{
    protected $observers = [];

    public abstract function registerObserver();
    public abstract function removeObserver();
    public abstract function notifyObservers();
}