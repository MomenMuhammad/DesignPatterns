<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPatterns\Observer\Models\Observer;
use DesignPatterns\Observer\Models\Subject;

$subject = new Subject();
$observer1 = new Observer('Observer 1');
$observer2 = new Observer('Observer 2');
$observer3 = new Observer('Observer 3');


$subject->attach($observer1);
$subject->attach($observer2);


$subject->notify();

echo "-------------------------------- \n";

$subject->detach($observer1);

$subject->notify();
echo "-------------------------------- \n";

$subject->detach($observer2);
$subject->attach($observer3);

$subject->notify();
echo "-------------------------------- \n";
