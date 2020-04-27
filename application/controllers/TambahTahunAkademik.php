<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahTahunAkademik extends CI_Controller {

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
		$dataHalaman = array(   		
		  'da' => $kue,
        );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('admin/v_add_year');
		$this->load->view('dashboard/v_footer');
    }

	public function savedok(){     
		if($this->input->post('btnSimpan') == "Simpan"){
			$_tahun = $this->input->post('tahun', TRUE);
			$data = array(
				'tahun' =>  $_tahun,
			);       
			$query= $this->M_login->add_year($data);
			if ($query) {
				$this->session->set_flashdata('notification','Penambahan Tahun Akademik Berhasil dilakukan');
				redirect(site_url('Dashboard'));
				//print_r($stan);
			}
			else{
				$this->session->set_flashdata('notification','Penambahan Tahun Akademik GAGAL dilakukan');
				redirect(site_url('Dashboard'));
			}
		}				
	}
}
