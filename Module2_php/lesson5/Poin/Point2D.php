<?php
namespace Poin;
 class Point2D {
    public float $x;
    public float $y;
    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX($x):void{
        $this->x = $x;
    }
    public function setY($y):void{
        $this->y = $y;
    }
    public function getXY():array{
        return $this->getXY();
    }
    public function setXY(float $x, float $y):void{
        $this->setXY( $x, $y );
    }
    public function tostring(){
        $this->toString();
    }
 }