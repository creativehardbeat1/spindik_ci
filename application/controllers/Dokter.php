<?php
//Dokter.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('dokter_model'); 
	}

	public function index()
	{
		//$this->load->view('welcome_message');
	}
	
	public function list_dokter()
	{
		$all_dokter = $this->dokter_model->get_all_dokter();
		$data['all_dokter_array']=$all_dokter;
		$this->load->view('dokter/list',$data);
		
	}
	public function tambah_dokter()
	{
		$kode_dokter = $this->input->post("kode_dokter");
		$nama_dokter = $this->input->post("nama_dokter");
		if($kode_dokter != null && $nama_dokter != null){
			$this->dokter_model->tambah_dokter($kode_dokter,$nama_dokter);
			redirect(base_url().index_page().'/dokter/list_dokter','location'); 
		}
		$this->load->view('dokter/tambah');
	}
	public function edit_dokter($kode_dokter)
	{
		$dokter=$this->dokter_model->get_dokter($kode_dokter);
		$data['dokter'] = $dokter;
		$this->load->view('dokter/ubah',$data);
	}
	public function simpan_edit_dokter()
	{
		$kode_dokter = $this->input->post("kode_dokter");
		$nama_dokter = $this->input->post("nama_dokter");
		if($kode_dokter != null && $nama_dokter != null){
			$this->dokter_model->edit_dokter($kode_dokter,$nama_dokter);
			redirect(base_url().index_page().'/dokter/list_dokter','location'); 
		}
		$this->load->view('dokter/ubah');
	}
	public function delete_dokter($kode)
	{
		$this->dokter_model->delete_dokter($kode);
		redirect(base_url().index_page().'/dokter/list_dokter','location'); 
	}
	public function lihatdetail_dokter()
	{
		$this->load->view('dokter/lihat');
	}
	
	
	
}
?>