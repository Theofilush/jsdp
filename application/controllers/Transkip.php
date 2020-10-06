<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkip extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 	
	}

	public function index(){
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
		$author = $kue[0]->author;

		$keyword = $this->input->post('keyword');
		$abc = "baru sekali";
		if ($keyword == null || $keyword == '' ) {
			$keyword = '-';
		}else {
			$abc = "udah ada keywordnya";
		}
		
		$querySearch = $this->M_dokumen->get_keyword_transkip($keyword);
		$bio_nim = $this->M_dokumen->cek_nim($keyword)->result_array();

		if ( $abc == "baru sekali") {
			$querySearcha = "belum diisi";
		} elseif ($abc == "udah ada keywordnya" ) {
			$querySearcha = "udah diisi tapi salah";
			$cek = $this->M_dokumen->cek_nim($keyword)->num_rows();
			if($cek > 0){
				if ( $querySearch == null || $querySearch == '' ) {
					$this->session->set_flashdata('notification_no_kegiatan', '<ul class="nav navbar-right panel_toolbox">
					<li>
							<div class="alert alert-warning alert-dismissible" style="margin-bottom:0;">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<small> Mahasiswa bersangkutan belum menambahkan poin</small>
					</li>
					</ul>');
				} elseif ($querySearch != null || $querySearch != '' ) {
					$querySearcha = "sudah diisi";
				}
			}else {
				$this->session->set_flashdata('notification_no_kegiatan', '<ul class="nav navbar-right panel_toolbox">
				<li>
						<div class="alert alert-warning alert-dismissible" style="margin-bottom:0;">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<small> NIM tidak ditemukan</small>
				</li>
				</ul>');
			}
			
		} 

		$queryAdmin = $this->M_dokumen->listPoint_byadmin();
		$queryMhsSah = $this->M_dokumen->listPointSah_byIdMhs($Id_user);
		//$queryDosen = $this->M_dokumen->listPointViewDosen($Id_user);
		//$queryKa = $this->M_dokumen->listPoint_ka($Id_user);

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
		$sah_header = $this->M_dokumen->count_sah_header();
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header();
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header();
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;

		if ($author == "mahasiswa") {
			$sumPoinSah = $this->M_dokumen->sum_poin_sah($Id_user);	
		}else{
			$sumPoinSah = $this->M_dokumen->sum_poin_sah($keyword);
		}
			$sum_poin_sah = $sumPoinSah[0]->poin;
			if ($sum_poin_sah == null || $sum_poin_sah == "" ) {
				$sum_poin_sah = "-";
			}

		$dataHalaman = array(
		  'title'=>"Transkip",
		  'da' => $kue,
		  'queryAdmin' => $queryAdmin,
		  'queryMhs' => $queryMhsSah,
		  'querySearch' => $querySearch,
		  'querySearcha' => $querySearcha,
		  //'queryDosen' => $queryDosen,
		  //'queryKa'=> $queryKa,
		  'bio_nim' => $bio_nim,
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
		  'count_tidaksah' => $count_tidaksah,
		  'sum_poin_sah' => $sum_poin_sah
		);
		
		$this->load->view('dashboard/v_header',$dataHalaman);
		if ($author == "dosen" || $author == "administrator" || $author == "koordinator") {
			$this->load->view('transkip/v_view_transkip',$dataHalaman);
		}else {
			$this->load->view('transkip/v_transkip',$dataHalaman);
		}
		$this->load->view('dashboard/v_footer');
	}
}
