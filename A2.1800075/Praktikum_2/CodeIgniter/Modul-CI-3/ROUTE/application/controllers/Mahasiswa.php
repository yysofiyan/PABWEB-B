<?php

    class Mahasiswa extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
        }

        public function index()
        {
            $data['mahasiswa'] = $this->Mahasiswa_model->lihat_data();
            $this->load->view('mahasiswa_v', $data);
        }
    }