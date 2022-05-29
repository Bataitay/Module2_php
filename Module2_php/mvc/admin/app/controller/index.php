<?php

class index extends PController
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function homepage()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');

    }
    
}
?>