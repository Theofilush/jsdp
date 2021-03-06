<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menunggu extends CI_Controller {
	
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

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header() ;
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header() ;
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header() ;
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;
		
		$daftar_sah = $this->M_dokumen->sum_sah() ;
			$sum_sah = $daftar_sah[0]->sum_sah;
		$daftar_menunggu = $this->M_dokumen->sum_menunggu() ;
			$sum_menunggu = $daftar_menunggu[0]->sum_menunggu;
		$daftar_tidaksah = $this->M_dokumen->sum_tidaksah() ;
			$sum_tidaksah = $daftar_tidaksah[0]->sum_tidaksah;


		$dataHalaman = array(
		  'title'=>"Approval",
		  'da' => $kue,
		  'query' => $query,
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
		  'sum_sah' => $sum_sah,
		  'sum_menunggu' => $sum_menunggu,
		  'sum_tidaksah' => $sum_tidaksah,
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah
		);
		
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_menunggu',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function editpoin($id)
	{ 
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query = $this->M_dokumen->listEditPoint_byNo($id);
		$domain = $this->M_dokumen->tampil_domain();

		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
			
		$dataHalaman = array( 
			'title'=>"Edit",
			'query' =>  $query,
			'domain' => $domain,
			'da' => $kue,
			'query' => $query,
			'id_user' => $Id_user,
			'nama_lengkap' => $nama_lengkap,
			'prodi' => $prodi,
			'status' => $status
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_edit_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
	public function updatepoin(){
        if ($this->input->post('btnUpload') == "Upload") {
			$_tingkat = $this->input->post('tingkat', TRUE);
			$id = $this->input->post('id', TRUE);

			if(($_anggota1 == "") && ($_anggota2 != "")){
				$_anggota1 =$_anggota2;
				$_anggota2= NULL;
			}elseif($_anggota1 == ""){
				$_anggota1 = NULL;
			}
			if($_anggota2 == ""){
				$_anggota2 = NULL;
			}
          
              $data = array(
				'cakupan_publikasi' => $_tingkat,
				'tahun_penerbitan' =>  $_tahun_publikasi,
				'judul' =>  $_judul,
				'nama_jurnal' =>  $_nama_jurnal,
				'issn' =>  $_issn,
				'volume' =>  $_volume,
				'nomor' =>  $_nomor,
				'halaman_awal' =>  $_halaman_awal,
				'halaman_akhir' =>  $_halaman_akhir,
				'url' =>  $_url,
				'penulis_publikasi' =>  $_penulis,
				'penulis_anggota1' =>  $_anggota1,
				'penulis_anggota2' =>  $_anggota2
              );              
          $query= $this->M_dokumen->updateDok_publikasi($data,$id);
          if ($query) {
            redirect("publikasi/PublikasiJurnal");
          }
          else{
			$this->session->set_flashdata('notification', 'Gagal Melakukan Update');	
            redirect("publikasi/PublikasiJurnal");
          }
        }
	} 

	public function deletepoin($id){		
		$this->db->where('id_publikasi', $id);
        $query = $this->db->get('t_publikasi_jurnal');
        $row = $query->row();
        unlink("./fileupload/publikasi_jurnal/$row->file");
		$this->M_dokumen->deleteDok_publikasi($id);
		redirect('publikasi/PublikasiJurnal');
	}

	public function validasi($id,$diperiksa_oleh){            
		$query= $this->M_dokumen->validasi_poin($id,$diperiksa_oleh);        
		if ($query) {
		  redirect("Menunggu");
		}
		else{
		  $this->session->set_flashdata('notification', 'Gagal Melakukan Validasi');		  
		  redirect("Menunggu");
		}
	} 

	public function tolakvalidasi($id,$diperiksa_oleh){            
		$query= $this->M_dokumen->toval_poin($id,$diperiksa_oleh);        
		if ($query) {
			redirect("Menunggu");
		}
		else{
			$this->session->set_flashdata('notification', 'Gagal Melakukan Penolakan Validasi');		  
			redirect("Menunggu");
		}
	} 
}
