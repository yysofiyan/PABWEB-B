<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

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
	function lihatData() {
        return $this->db->get('mahasiswa')->result();
    }

    public function metodeResult() {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function metodeRow() {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
	}
	
	function metodeResultArray() {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
	}
	
	function metodeRowArray() {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row_array();
	}
}
