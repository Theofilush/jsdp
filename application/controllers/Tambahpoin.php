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
		$this->load->view('tambahdata/v_add_poin');
		$this->load->view('dashboard/v_footer');
	}

	public function listKegiatan(){
		$id_domain = $this->input->post('id_domain');
		$kegiatans = $this->M_dokumen->viewByKegiatan($id_domain);
		
		$lists = "<option value=''>Pilih...</option>";
		
		foreach($kegiatans as $data){ $lists .= "<option value='".$data->id_kegiatan."'>".$data->nama_kegiatan."</option>"; }
		
		$callback = array('list_perkegiatan'=>$lists);
		echo json_encode($callback); 
	}

	public function listSubKegiatan(){
		$id_kegiatan = $this->input->post('id_kegiatan');
		$subkegiatans = $this->M_dokumen->viewBySubKegiatan($id_kegiatan);
		
		$lists = "<option value=''>Pilih...</option>";
		
		foreach($subkegiatans as $data){ $lists .= "<option value='".$data->id_subkegiatan."'>".$data->nama_subkegiatan."</option>"; }
		
		$callback = array('list_persubkegiatan'=>$lists);
		echo json_encode($callback); 
	}

	public function listLingkup(){
		$id_subkegiatan = $this->input->post('id_subkegiatan');
		$lingkups = $this->M_dokumen->viewByLingkup($id_subkegiatan);
		
		$lists = "<option value=''>Pilih...</option>";
		
		foreach($lingkups as $data){ $lists .= "<option value='".$data->id_lingkup."'>".$data->nama_lingkup."</option>"; }
		
		$callback = array('list_perlingkup'=>$lists);
		echo json_encode($callback); 
	}

	public function getPoin(){
		$id_lingkup = $this->input->post('id_lingkup');
		$poins = $this->M_dokumen->viewByPoin($id_lingkup);
		
		$lists = "";
		
		foreach($poins as $data){ $lists = $data->skor_poin; }

		$callback = array('list_perpoin'=>$lists);
		echo json_encode($callback); 
	}

	public function savedok(){     
		if($this->input->post('btnUpload') == "Upload"){
			$config['upload_path'] = './fileupload/';
			$config['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);                
			if ( ! $this->upload->do_upload('filepdf')){
			  	$error = array('error' => $this->upload->display_errors());			
			}
			else{
				 $data = array('upload_data' => $this->upload->data());                              
			}

			$thn_akademik = $this->input->post('thn_akademik', TRUE);
			$tgl_kegiatan = $this->input->post('tgl_kegiatan', TRUE);
			$domain = $this->input->post('domain', TRUE);
			$kegiatan = $this->input->post('kegiatan', TRUE);
			$per_poin2 = $this->input->post('per_poin2', TRUE);
			
			$subkegiatan = $this->input->post('subkegiatan', TRUE);
			$detail_kegiatan = $this->input->post('detail_kegiatan', TRUE);
			$tempat = $this->input->post('tempat', TRUE);
			$lingkup = $this->input->post('lingkup', TRUE);
			$_upload = $this->upload->data('file_name');

			$kue = $this->M_login->hak_ak($this->session->userdata('nama'));
			$Id_user =  $kue[0]->ID_user;

			$data = array(
				'id_mhs' => $Id_user,
				'tahun' => $thn_akademik,
				'tanggal_kegiatan' => $tgl_kegiatan,
				'domain' => $domain,
				'kegiatan' => $kegiatan,
				'sub_kegiatan' => $subkegiatan,
				'detail_kegiatan' => $detail_kegiatan,
				'tempat' => $tempat,
				'lingkup' => $lingkup,
				'poin' => $per_poin2,
				'file' => $_upload,
				'status'=> "Menunggu",
			);       
			$query= $this->M_dokumen->simpanDok_poin($data);
			 
			if ($query) {
				redirect(site_url('Poin'));
			}
			else{
				redirect(site_url('Poin'));
			}
		}
	}

}