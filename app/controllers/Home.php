<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $this->view("templates/header", $data);
        $this->view("siswa/index", $data);
        $this->view("templates/footer");
    }

    public function detail()
    {
        $this->view("siswa/detail");
    }

    
}