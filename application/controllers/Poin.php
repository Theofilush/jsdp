<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 	
	}

	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$query = $this->M_dokumen->listPoint_byidMHS();
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;

		$dataHalaman = array(
		  'title'=>"Poin",
		  'da' => $kue,
		  'query' => $query,
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
}
