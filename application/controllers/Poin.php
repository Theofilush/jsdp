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
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
		$queryAdmin = $this->M_dokumen->listPoint_byadmin();
		$queryMhsSah = $this->M_dokumen->listPointSah_byIdMhs($Id_user);
		$queryDosen = $this->M_dokumen->listPointViewDosen($Id_user);
		$queryKa = $this->M_dokumen->listPoint_ka($Id_user);

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
		  'queryMhs' => $queryMhsSah,
		  'queryDosen' => $queryDosen,
		  'queryKa'=> $queryKa,
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
		$this->load->view('poin/poin_mhs/v_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function Menunggu()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
		$queryMhsMenunggu = $this->M_dokumen->listPointMenunggu_byIdMhs($Id_user);

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
		  'queryMhs' => $queryMhsMenunggu,
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
		$this->load->view('poin/poin_mhs/v_poin_menunggu',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function TidakSah()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;
		$queryMhsMenunggu = $this->M_dokumen->listPointTidakSah_byIdMhs($Id_user);

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
		  'queryMhs' => $queryMhsMenunggu,
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
		$this->load->view('poin/poin_mhs/v_poin_tidaksah',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function editpoin($id="")
	{ 
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query = $this->M_dokumen->listEditPoint_byNo($id);
		$domain = $this->M_dokumen->tampil_domain();
		$SelectDomain = $this->M_dokumen->select_domain($id);
		$SelectKegiatan = $this->M_dokumen->select_kegiatan($id);
		$SelectSubKegiatan = $this->M_dokumen->select_subkegiatan($id);
		$SelectLingkup = $this->M_dokumen->select_lingkup($id);
		$byProdiName = implode((array) $kue[0]->prodi);

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
			
		$dataHalaman = array( 
			'title'=>"Edit",
			'query' =>  $query,
			'domain' => $domain,
			'da' => $kue,
			'query' => $query,
			'id_user' => $Id_user,
			'nama_lengkap' => $nama_lengkap,
			'prodi' => $prodi,
			'status' => $status,
			'select_domain' => $SelectDomain,
			'select_kegiatan' => $SelectKegiatan,
			'select_subKegiatan' => $SelectSubKegiatan,
			'select_lingkup' => $SelectLingkup,
			'prodi' => $prodi,
			'count_sah' => $count_sah,
			'count_menunggu' => $count_menunggu,
			'count_tidaksah' => $count_tidaksah
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('poin/v_edit_poin',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
	public function updatepoin(){
        if ($this->input->post('btnUpload') == "Upload") {
			$config['upload_path'] = './fileupload/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 1124;
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

			$edit_poin = $this->input->post('edit_poin', TRUE);
			$status_change = $this->input->post('status_change', TRUE);
			$keterangan_poin = $this->input->post('keterangan_poin', TRUE);
			// if($keterangan_poin==""){$keterangan_poin == NULL;}
			// var_dump($keterangan_poin);exit();

			// if edit value poin 0 then run this
			// if edit value poin not 0 then run insert array poin to database

			// if status_changed is blank, no input to db
			//if status_Changed is fill content , input db

			$kue = $this->M_login->hak_ak($this->session->userdata('nama'));
			$Id_user =  $kue[0]->ID_user;
			$username =  $kue[0]->username;
			$no = $this->input->post('no', TRUE);
			$id_mhs = $this->input->post('id_mhs', TRUE);

			$tgl_kegiatann = date_format(new DateTime($tgl_kegiatan),"Y-m-d");

			if ($status_change == "" || $status_change == NULL) {
				$status_change = "Menunggu";
				
				if ($edit_poin == 0 ) {
					if ($_upload == "" || $_upload == NULL ) {
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $per_poin2,
							'status'=> $status_change,
						);
					} else {
						$this->db->where('no', $no);
						$queryy = $this->db->get('poin');
						$row = $queryy->row();
						unlink("./fileupload/$row->file");
				
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $per_poin2,
							'file' => $_upload,
							'status'=> $status_change,
						);
					}	
				} else {
					if ($_upload == "" || $_upload == NULL ) {
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $edit_poin,
							'status'=> $status_change,
						);
					} else {
						$this->db->where('no', $no);
						$queryy = $this->db->get('poin');
						$row = $queryy->row();
						unlink("./fileupload/$row->file");
	
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $edit_poin,
							'file' => $_upload,
							'status'=> $status_change,
						);
					}	
				}
			}else {
				if ($edit_poin == 0 ) {
					if ($_upload == "" || $_upload == NULL ) {
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $per_poin2,
							'status'=> $status_change,
							'keterangan'=> $keterangan_poin,
							'tanggal_periksa'=>date("Y-m-d H:i:s", strtotime('+5 hours')),
							'diperiksa_oleh'=> $username,
						);
					} else {
						$this->db->where('no', $no);
						$queryy = $this->db->get('poin');
						$row = $queryy->row();
						unlink("./fileupload/$row->file");
				
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $per_poin2,
							'file' => $_upload,
							'status'=> $status_change,
							'status'=> $keterangan_poin,
							'tanggal_periksa'=>date("Y-m-d H:i:s", strtotime('+5 hours')),
							'diperiksa_oleh'=> $username,
						);
					}	
				} else {
					if ($_upload == "" || $_upload == NULL ) {
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $edit_poin,
							'status'=> $status_change,
							'tanggal_periksa'=>date("Y-m-d H:i:s", strtotime('+5 hours')),
							'diperiksa_oleh'=> $username,
						);
					} else {
						$this->db->where('no', $no);
						$queryy = $this->db->get('poin');
						$row = $queryy->row();
						unlink("./fileupload/$row->file");
	
						$data = array(
							'tahun' => $thn_akademik,
							'tanggal_kegiatan' => $tgl_kegiatann,
							'domain' => $domain,
							'kegiatan' => $kegiatan,
							'sub_kegiatan' => $subkegiatan,
							'detail_kegiatan' => $detail_kegiatan,
							'tempat' => $tempat,
							'lingkup' => $lingkup,
							'poin' => $edit_poin,
							'file' => $_upload,
							'status'=> $status_change,
							'tanggal_periksa'=>date("Y-m-d H:i:s", strtotime('+5 hours')),
							'diperiksa_oleh'=> $username,
						);
					}	
				}
			}

        	$query= $this->M_dokumen->updateDok_poin($data,$no);
        	if ($query) {
            	redirect("Poin");
          	}
          	else{
				$this->session->set_flashdata('notification', 'Gagal Melakukan Update');	
    	        redirect("Poin");
        	}
        }
	} 

	public function deletepoin($id){
		$this->db->where('no', $id);
        $query = $this->db->get('poin');
        $row = $query->row();
        unlink("./fileupload/$row->file");
		$this->M_dokumen->deleteDok_poin($id);
		redirect('poin');
	}

	public function validasi($id,$diperiksa_oleh){
		$query= $this->M_dokumen->validasi_poin($id,$diperiksa_oleh);
		if ($query) {
		  redirect("Poin");
		}
		else{
		  $this->session->set_flashdata('notification', 'Gagal Melakukan Validasi');
		  redirect("Poin");
		}
	} 

	public function tolakvalidasi($id,$diperiksa_oleh){
		$query= $this->M_dokumen->toval_poin($id,$diperiksa_oleh);
		if ($query) {
			redirect("Poin");
		}
		else{
			$this->session->set_flashdata('notification', 'Gagal Melakukan Penolakan Validasi');
			redirect("Poin");
		}
	} 
}
