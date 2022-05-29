<?php

// 
class Load
{
    public function __construct()
    {
    }
    

    public function view($fileName, $data = null)
    {
        //file tu dong
        if($data){
            extract($data);
        }
        include './app/views/' . $fileName . '.php';
    }
    public function model($fileName)
    {
        //file tu dong
        include './app/models/' . $fileName . '.php';
        return new $fileName();
    }
}
