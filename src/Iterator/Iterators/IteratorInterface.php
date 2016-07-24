<?php

namespace Src\Iterator\Iterators;

interface IteratorInterface
{
    public function hasNext();
    public function next();
    public function remove($position);
}