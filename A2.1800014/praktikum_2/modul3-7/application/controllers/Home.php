<?php
class Home extends CI_Controller
{
    public function __costruct()
    {
        parent::__contruct();
        $this->load->herper('login');
    }
    public function index()
    {
        $this->load->view('home/home_view');
    }
}