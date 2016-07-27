<?php

namespace Src\Component\Menus;

use Exception;

class Menu extends MenuComponent
{
    private $menuComponents = [];
    private $name;
    private $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent)
    {
        if ($key = array_search($menuComponent, $this->menuComponents)) {
            unset($this->menuComponents[$key]);
            return;
        }

        throw new Exception('Menu not found');
    }

    public function getChild($index)
    {
        if ($index >= count($this->menuComponents)) {
            throw new Exception('Invalid key in array');
        }

        return $this->menuComponents[$index];
    }

    public function printMenu()
    {
        echo "{$this->name}\n";
        echo "{$this->description}\n";
        echo "------------------------------\n";

        foreach ($this->menuComponents as $menuComponent) {
            $menuComponent->printMenu();
        }

        echo "\n";
    }
}