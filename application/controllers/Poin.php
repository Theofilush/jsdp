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
		  'status' => $status
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function editpoin($id)
	{ 
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query = $this->M_dokumen->listEditPoint_byidMHS($id);
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
}
