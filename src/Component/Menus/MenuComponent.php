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

    public function printMenu()
    {
        throw new Exception('Not implemented');
    }
}