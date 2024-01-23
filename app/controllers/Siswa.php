<?php

class Siswa extends Controller{

        public $data = ['title' => 'Siswa'];

        public function index()
        {

            $data = [
                'title' => 'Siswa',
                'nama' => 'Fafa'
            ];

            // $data['title'] = "Siswa";
            // $data['nama'] = "Joshua";

            $this->view("templates/header", $data );
            $this->view("siswa/index", $data);
            $this->view("templates/footer", $data);
        }

        public function biodata()
        {
            $data = [
                'title' => 'Siswa',
                'nama' => 'Fifi'
            ];

            $this->view("templates/header", $data );
            $this->view("siswa/index", $data);
            $this->view("templates/footer", $data);
        }
    }