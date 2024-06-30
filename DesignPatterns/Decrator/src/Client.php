<?php

require __DIR__ . './../vendor/autoload.php';

use DesignPatterns\Decrator\Models\Item;
use DesignPatterns\Decrator\Models\Addon;


$beverage = new Item();
$beverage = new Addon($beverage);
$beverage = new Addon($beverage);

echo $beverage->getDescription() . PHP_EOL;
echo $beverage->cost() . PHP_EOL;