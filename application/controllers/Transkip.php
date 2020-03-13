<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkip extends CI_Controller {
	
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
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
		$queryAdmin = $this->M_dokumen->listPoint_byadmin();
		$queryMhs = $this->M_dokumen->listPoint_byIdMhs($Id_user);

		$total_sah_poin = $this->M_dokumen->total_sah_poin($Id_user);
		$tsp = $total_sah_poin[0]->jumlah_sah;
		$percent_sah = ($tsp / 1000) * 100; // total sah di bagi 1000 poin minimal di ubah ke percent

		$sisa = 1000 - $tsp;
		$percent_sisa = ($sisa / 1000) * 100;

		$total_tidaksah_poin = $this->M_dokumen->total_tidaksah_poin($Id_user);
		$ttsp = $total_tidaksah_poin[0]->jumlah_tidaksah;
		$percent_tidaksah = ($ttsp / 1000) * 100; // total tidak sah di bagi 1000 poin minimal di ubah ke percent

		$total_menunggu = $this->M_dokumen->total_menunggu_poin($Id_user);
		$tmp = $total_menunggu[0]->jumlah_menunggu;
		$percent_menunggu = ($tmp / 1000) * 100; // total menunggu di bagi 1000 poin minimal di ubah ke percent

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header() ;
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header() ;
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header() ;
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;

		$dataHalaman = array(
		  'title'=>"Poin",
		  'da' => $kue,
		  'queryAdmin' => $queryAdmin,
		  'queryMhs' => $queryMhs,
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
		  'total_sah_poin' => $tsp,
		  'percent_sah' => $percent_sah,
		  'total_tidaksah_poin' => $ttsp,
		  'percent_tidaksah' => $percent_tidaksah,
		  'total_menunggu' => $tmp,
		  'percent_menunggu' => $percent_menunggu,
		  'sisa' => $sisa,
		  'percent_sisa' => $percent_sisa,
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
}
