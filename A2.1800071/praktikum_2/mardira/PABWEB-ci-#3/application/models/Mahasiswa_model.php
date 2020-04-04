<?php 
class Mahasiswa_model extends CI_Model
{
	function lihatData()
	{
		return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left')->get('mahasiswa')->result();
	}
}
// 	public function metodeResult()
// 	{
// 		$query = $this->db->get('mahasiswa');
// 		return $query->result();
// 	}
// 	function metodeRow()
// 	{
// 		$query = $this->db->where('id_mahasiswa', 1);
// 		$query = $this->db->get('mahasiswa');
// 		return $query->row();
// 	}
// 	public function mhs_resultArray()
// 	{
// 		$data['resultarray'] = $this->Mahasiswa_model->metodeResultArray();
// 		$this->load->view('resultarray_view', $data);
// 	}
// 	function metodeResultArray()
// 	{
// 		$query = $this->db->get('mahasiswa');
// 		return $query->result_array();
// 	}
// 	public function metodeRowArray()
// 	{
// 		$query = $this->db->where('id_mahasiswa', 1);
// 		$query = $this->db->get('mahasiswa');
// 		return $query->row_array();
// 	}
// }