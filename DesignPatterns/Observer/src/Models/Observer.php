<?php

namespace DesignPatterns\Observer\Models;

use DesignPatterns\Observer\Contracts\ObserverContract;

class Observer implements ObserverContract{
    public $name = "Observer";

    public function __construct(string $name){
        $this->name = $name;
        echo "$name has been created\n";
    }

    public function update(){
        echo "$this->name has been updated\n";
    }
}