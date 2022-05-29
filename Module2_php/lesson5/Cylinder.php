<?php


abstract class Motor
{
protected $speed;

function __construct($speed){
$this->speed = $speed;
}

abstract protected function getSpeed();
abstract protected function setSpeed($speed);

public function printOut() {
print "Speed: " . $this->getSpeed() . "\n";
}
}

$motor = new Motor(150);
$motor->printOut();