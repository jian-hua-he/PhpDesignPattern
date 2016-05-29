<?php

namespace Src\Observer\Displays;

use Src\Observer\SubjectDatas\SubjectDataInterface;

interface DisplayInterface
{
    public function display(SubjectDataInterface $data);
}