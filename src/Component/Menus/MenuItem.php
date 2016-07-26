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

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function print()
    {
        echo "{$this->name}: {$this->price} -- {$this->description}\n";
    }
}