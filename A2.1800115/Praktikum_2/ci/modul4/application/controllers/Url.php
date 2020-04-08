<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {

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
	public function index()
	{
		$this->load->view('url_view');
	}

	public function detail($id) {
		$id = $this->uri->segment(3);
		$data['segment'] = $id;
		$this->load->view('halaman_detail',$data);
	}

	public function blank() {
		echo "Halaman ini Kosong silahkan kembali";
		redirect('halaman');
	}
}
