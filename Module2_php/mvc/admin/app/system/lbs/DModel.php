<?php
    class DModel {
        //protected chi co ai ke thua moi goi duoc
        protected $db = array();
        public function __construct(){
            $connect = 'mysql:dbname=list_food; host=localhost';
            $user ='root';
            $pass = '';
            
            $this->db = new Database($connect,$user,$pass);
        }
    }

?>