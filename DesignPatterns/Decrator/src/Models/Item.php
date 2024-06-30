<?php

namespace DesignPatterns\Decrator\Models;

use DesignPatterns\Decrator\Contracts\ItemInterface;

class Item implements ItemInterface
{
    protected $description = 'Base Item';

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 0;
    }
}