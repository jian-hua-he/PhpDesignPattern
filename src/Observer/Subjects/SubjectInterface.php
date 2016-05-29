<?php

namespace Src\Observer\Subjects;

interface SubjectInterface
{
    public function registerObserver();
    public function removeObserver();
    public function notifyObserver();
}