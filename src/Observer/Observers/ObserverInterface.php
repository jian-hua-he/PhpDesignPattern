<?php

namespace Src\Observer\Observers;

use Src\Observer\SubjectDatas\SubjectDataInterface;

interface ObserverInterface
{
    public function update(SubjectDataInterface $data);
}