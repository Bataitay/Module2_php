<?php
class user {
    protected string $username;
    protected string $email;
    public int $role ;
    public function __construct($username,$email,$role){
        $this->username = $username;
        $this->email = $email;
        $this->role = $role;
    }
    public function setName($username){
        $this->username= $username;
    }
    public function getName(){
        return $this->username;
    }
    public function setEmail($email){
        $this ->email= $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setRole($role){
        $this->role= $role;
    }
    public function getRole(){
       return $this->role; 
    }
    public function getInfo(){
        return $this->username.$this->email;
    }
    public function isAdmin(){
        if($this->role==1){
            return 'admin';
        }else if($this->role==2){
            return 'user nomal';
        }
    }
}
$Username= new user('duong','duong@gmail.com',1);
echo $Username->getInfo(). "<br>";
echo $Username->isAdmin() ;

