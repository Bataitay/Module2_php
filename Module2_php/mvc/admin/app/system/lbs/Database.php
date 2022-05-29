<?php

class Database extends PDO
{

    public function __construct($connect, $user, $pass)
    {
        parent::__construct($connect, $user, $pass);
    }
    public function select($sql, $data = array())
    {
       
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value){
            //thhoong so bat buoc
        $statement->bindParam($key,$value );
            
        } 
        
//chuẩn bị câu lệnh
       
        $statement->execute();
        return $statement->fetchAll();
}
}