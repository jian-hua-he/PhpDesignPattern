<?php

namespace Src\Component\Menus;

use Exception;

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent)
    {
        throw new Exception('Not implemented');
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new Exception('Not implemented');
    }

    public function getChild($index)
    {
        throw new Exception('Not implemented');
    }

    public function getName()
    {
        throw new Exception('Not implemented');
    }

    public function getDescription()
    {
        throw new Exception('Not implemented');
    }

    public function getPrice()
    {
        throw new Exception('Not implemented');
    }

    public function isVegetarian()
    {
        throw new Exception('Not implemented');
    }

    public function print()
    {
        throw new Exception('Not implemented');
    }
}