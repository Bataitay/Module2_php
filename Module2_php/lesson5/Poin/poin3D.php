<?php
include_once "poin/Point2D.php";

use Poin\Point2D;

class poin3D{
    public float $z;
    public function __construct(float $x, float $y, float $z){
        $this->z = $z;
    }
    public function getZ():float { 
       return $this->getZ();    
    }
    public function setZ(float $z):void{
        $this->setZ($z);
    }
    public function setXYZ(float $x, float $y ,float $z):void{
        $this->setXYZ($x, $y,$z);
    }
    public function getXYZ():array{
        return $this->getXYZ();
    }
    public function toString(){
       $this-> toString();
    }

}