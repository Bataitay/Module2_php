<?php
class Fan{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed  ;
    private bool $on;
    private float $radius;
    private String $color ;
    public function __construct(){
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function getOn(){
        return $this->on;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function setOn($on){
        $this->on = $on;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function toString(){
        if ($this->on==true) {
            return "Fan is on   "."<br>".$this->getSpeed()."<br>".$this->getColor()."<br>".$this->getRadius();
        } else{
            return "Fan is off   ".$this->getColor().$this->getRadius();
        }
    }
}
$fan =new Fan();
$fan->setOn(true);
$fan->setSpeed(2);
  $fan->setRadius(5);
  $fan->setColor("yellow");
  echo $fan->toString();