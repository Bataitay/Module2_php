<?php

// goij moi hoat dong cua controller 
//nhung thu co trong load se co trong Pcontroller
class Pcontroller 
{
    protected $load = array();
    public function __construct(){
       $this->load = new Load();
    }
}
?>