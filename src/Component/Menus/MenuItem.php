<?php

namespace Src\Component\Menus;

class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $price;

    public function __construct($name,
                                $description,
                                $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function print()
    {
        echo "{$this->name}: {$this->price} -- {$this->description}\n";
    }
}