<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sah extends CI_Controller {
	
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
		$query = $this->M_dokumen->listPoint_menunggu();
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;

		$total_sah_poin = $this->M_dokumen->total_sah_poin($Id_user);
		$tsp = $total_sah_poin[0]->jumlah_sah;

		$percent_sah = ($tsp / 1000) * 100; // total sah di bagi 1000 poin minimal di ubah ke percent

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header() ;
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header() ;
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header() ;
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;

		
		$dataHalaman = array(
		  'title'=>"Menunggu",
		  'da' => $kue,
		  'query' => $query,
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
		  'total_sah_poin' => $tsp,
		  'percent_sah' => $percent_sah,
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah,
		);
		
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_sah',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function deletepoin($id){		
		$this->db->where('id_publikasi', $id);
        $query = $this->db->get('t_publikasi_jurnal');
        $row = $query->row();
        unlink("./fileupload/publikasi_jurnal/$row->file");
		$this->M_dokumen->deleteDok_publikasi($id);
		redirect('publikasi/PublikasiJurnal');
	}
}
