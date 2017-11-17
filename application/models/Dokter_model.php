<?php
// x dokter_model
class Dokter_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_dokter(){
		$query = $this->db->get('dokter');
		return $query->result_array();
	}

	public function get_dokter($kode){
		$query= $this->db->where('kode_dokter',$kode)->get('dokter');
		return $query->row();
		
	
	}
	
	public function tambah_dokter($kode_dokter,$nama_dokter){
		$data= array(
		'kode_dokter' => $kode_dokter,
		'nama_dokter' => $nama_dokter
		);
		$this->db->insert('dokter',$data);
	}

	public function edit_dokter($kode_dokter,$nama_dokter){
		$data= array(
		'kode_dokter' => $kode_dokter,
		'nama_dokter' => $nama_dokter
		);
		$this->db->set('nama_dokter', $nama_dokter);
		$this->db->where('kode_dokter', $kode_dokter);
		$this->db->update('dokter', $data);
	}

	public function delete_dokter($kode){
		$this->db->delete('dokter', array('kode_dokter' => $kode));
	}
}
?>