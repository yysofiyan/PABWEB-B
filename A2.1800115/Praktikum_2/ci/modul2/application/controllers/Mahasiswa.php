<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

	public function index()	{
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
		$this->load->view('Mahasiswa_view', $data);
    }
    
    public function mhs_result() {
        $data['result'] = $this->Mahasiswa_model->metodeResult();
        $this->load->view('result_view', $data);
    }

    public function mhs_row() {
        $data['row'] = $this->Mahasiswa_model->metodeRow();
        $this->load->view('row_view', $data);
	}

	public function mhs_resultArray() {
        $data['resultarray'] = $this->Mahasiswa_model->metodeResultArray();
        $this->load->view('resultarray_view', $data);
	}
	
	public function mhs_rowArray() {
        $data['rowarray'] = $this->Mahasiswa_model->metodeRowArray();
        $this->load->view('rowarray_view', $data);
	}

}
