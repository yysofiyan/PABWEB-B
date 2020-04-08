<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		echo "Hello Cruel World";
	}

	public function hello_model() {
		$this->load->model('Hello_model');
		$data = $this->Hello_model->hello_world();
		echo $data;
	}

	public function hello_view() {
		$this->load->view('hello_view');
	}

	public function hello_mvc()	{
		$this->load->model('Hello_model');
		$data['mvc'] = $this->Hello_model->hello_mvc();
		$this->load->view('hello_view',$data);
	}
}
