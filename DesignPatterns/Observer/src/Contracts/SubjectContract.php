<?php 

namespace DesignPatterns\Observer\Contracts;


interface SubjectContract
{
    public function attach(ObserverContract $observer);
    public function detach(ObserverContract $observer);
    public function notify();
}