<?php

namespace Src\Factory\Pizza;

abstract class Pizza
{
    public $name = 'Pizza';

    protected abstract function prepareProcess();

    public function manufacturingProcess()
    {
        $this->prepare();
        $this->bake();
        $this->cut();
        $this->box();
        echo "\n";
    }

    protected function prepare()
    {
        echo "Prepare {$this->name}...\n";
        $this->prepareProcess();
    }

    protected function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    protected function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    protected function box()
    {
        echo "Place {$this->name} in box\n";
    }
}