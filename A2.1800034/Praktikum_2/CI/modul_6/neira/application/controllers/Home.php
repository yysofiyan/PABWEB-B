<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('Login_helper');
        cek_session();
    }

    public function index() {
        $this->load->view('home/home_view');
    }
}