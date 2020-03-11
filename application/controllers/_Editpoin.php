<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahpoin extends CI_Controller {
	
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
		$domain = $this->M_dokumen->tampil_domain();

		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		  'domain' => $domain
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_edit_poin');
		$this->load->view('dashboard/v_footer');
	}


}