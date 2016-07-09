<?php

namespace Src\Command\Commands;

interface CommandInterface
{
    public function execute();
    public function undo();
}