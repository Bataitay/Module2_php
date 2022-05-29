<?php

class category extends PController
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
  
    public function list_category()
    {
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        $category_food = 'category_food';
       $data['categories'] = $homemodel->list_category($category_food);
        // print_r($data['category'] );die();
        $this->load->view('category',$data);
        $this->load->view('footer');

    }public function catebyid()
    {
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        $id =3;
        $category_food = 'category_food';
        $data['categorybyid'] = $homemodel->catebyid($category_food, $id);
        $this->load->view('categorybyid',$data);
        $this->load->view('footer');

    }
    
}
?>