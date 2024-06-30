<?php

namespace DesignPatterns\Decrator\Models;

use DesignPatterns\Decrator\Contracts\ItemInterface;

class Addon implements ItemInterface
{
    protected ItemInterface $item;
    protected $description = 'Addon';

    public function __construct(ItemInterface $item )
    {
        $this->item = $item;
    }

    public function getDescription()
    {
        return $this->item->getDescription() . " + " . $this->description;
    }

    public function cost()
    {
        return $this->item->cost() + 1.5;
    }
}