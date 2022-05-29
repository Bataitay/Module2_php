<?php
class Circle{
    public int $radius;
    public string $mausac;
    public function __construct($radius,$mausac){
        $this->radius = $radius;
        $this->mausac =$mausac;
    }
    public function tostring(){

    }
    public function getInfo(){
        return $this->radius. "<br>".$this->mausac;
    }
    public function setInfo($radius,$mausac){
        $this->radius=$radius;
        $this->mausac =$mausac;
    }
    public function dientich(){
       return  ($this->radius*2)*PI();
        
    }

}
    
class Cylinder extends circle {
    public int $height=5;
    public function dientich(){
        echo parent :: dientich();
    }
    public function tostring(){
        parent::tostring();
    }
    public function thetich(){
        return PI()*($this->radius*2)*($this->height);
    }
}
$cylinder = new Cylinder(5, ' xanh');
echo $cylinder->getInfo() ."<br>";
echo $cylinder->dientich()."<br>";
echo $cylinder->thetich();