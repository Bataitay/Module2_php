
<?php
//model dùng để tương tác với csdl   
//controller để hiển thị view và gọi model
class homemodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function list_category($category_food)
    {  
        return $this->db->select($category_food);
        // $sql = "SELECT * FROM `category_food`"; 
        // $result = $this->db->select($sql);
        // return $result;
    //     $sql = "SELECT * FROM `category_food`"; 
    //     $stmt = $this->db->query($sql);
    //     $stmt->setFetchMode(PDO::FETCH_OBJ);
    //    $result = $stmt->fetchAll();
    //    return $result;
  
    }
    public function catebyid($category_food, $id){
        $sql = "SELECT * FROM $category_food WHERE id_category_food = :id"; 
       
        $data = array(':id' => $id);
        return $this->db->select($sql,$data);
   
    }
}

?>