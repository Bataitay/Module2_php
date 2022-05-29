<?php
namespace Employee;
class ManagerEmployee{
    public string $firsrName;
    public string $lastrName;
    private string $address;
    public string $dayOfBirth;
    public string $jobLocalcation;
    public function __construct($firsrName,$lastrName,$address,$dayOfBirth,$jobLocalcation){
        $this->firsrName = $firsrName;
        $this->lastrName = $lastrName;
        $this->address = $address;
        $this->dayOfBirth = $dayOfBirth;
        $this->jobLocalcation = $jobLocalcation;
    }
    public function getInfo():string{
        return "firsrName:  $this->firsrName". "<br>"."lastName: $this->lastrName". "<br>"."address: $this->address" . "<br>"."dayOfBirth: $this->dayOfBirth"."<br>"."jobLocalcation: $this->jobLocalcation";
    }
    public function setInfor($firsrName,$lastrName,$address,$dayOfBirth,$jobLocalcation){
        $this->firsrName = $firsrName;
        $this->lastrName =$lastrName;
        $this->address = $address;
        $this->dayOfBirth= $dayOfBirth;
        $this->address= $jobLocalcation;
    }
   
}
