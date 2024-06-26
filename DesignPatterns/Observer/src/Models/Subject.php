<?php 

namespace DesignPatterns\Observer\Models;

use DesignPatterns\Observer\Contracts\ObserverContract;
use DesignPatterns\Observer\Contracts\SubjectContract;

class Subject implements SubjectContract{
    private $observers = [];

    public function attach(ObserverContract $observer){
        $this->observers[] = $observer;
    }

    public function detach(ObserverContract $observer){
        foreach($this->observers as $key => $obs){
            if($obs === $observer){
                unset($this->observers[$key]);
            }
        }
    }
    
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}