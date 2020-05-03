<?php 

class Home extends CI_Controller
{

    public function __construct()
    {
        paren::__construct();
        $this->load->helper('login');
        cek_session();
    }
    
    public function index()
    {
        $this->load->view('home/home_view');
    }
}