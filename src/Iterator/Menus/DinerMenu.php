<?php

namespace Src\Iterator\Menus;

use Src\Iterator\Iterators\IteratorInterface;

class DinerMenu implements IteratorInterface
{
    private $menuItems = [];
    private $position = 0;

    public function __construct(array $items)
    {
        $this->menuItems = $items;
    }

    public function next()
    {
        $item = $this->menuItems[$this->position];
        $this->position += 1;
        return $item;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->menuItems)) {
            return false;
        }

        return true;
    }
}