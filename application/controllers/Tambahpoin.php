<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahpoin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 	
	}

	public function index(){
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$domain = $this->M_dokumen->tampil_domain();
		$query_tampil_tahun = $this->M_dokumen->tampil_tahun();

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header() ;
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header() ;
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header() ;
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;


		$dataHalaman = array(
		  'title'=>"Dashboard",		
		  'da' => $kue,
		  'domain' => $domain,
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah,
		  'tampil_tahun'=> $query_tampil_tahun,
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

			$kue = $this->M_login->hak_ak($this->session->userdata('nama'));
			$Id_user =  $kue[0]->ID_user;

			$date=date_create($tgl_kegiatan);
			$tgl_kegiatann = date_format($date,"Y-m-d");

			$data = array(
				'id_mhs' => $Id_user,
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
				'status'=> "Menunggu",
			);
			
			/** Pengecekan Input menggunakan algoritma BRUTE FORCE */
			// echo $thn_akademik." ".$tgl_kegiatann." ".$domain." ".$kegiatan." ".$per_poin2." ".
			// 	$subkegiatan." ".$detail_kegiatan." ".$tempat." ".$lingkup." ".$Id_user."<br>----------------------------------------<br>" ;
				
			$queryPoinByNIM = $this->M_dokumen->listPointBF($Id_user);

			//echo $tgl_kegiatann." ".$detail_kegiatan." ".$lingkup."<br>===================================================<br>" ;

			$STglTrue = array();
			$SnamaKegiatanTrue = array();
			$SperanTrue = array();
			foreach ($queryPoinByNIM as $key ) {
				//echo "<br><br>INI ISI KEY: ".$key['tanggal_kegiatan']." ".$key['detail_kegiatan']." ".$key['lingkup']."<br>" ;

				$subject = $key['tanggal_kegiatan']." ".$key['detail_kegiatan']." ".$key['lingkup']." ";
				$pattern = $tgl_kegiatann;
				$n = strlen($subject);
				$m = strlen($pattern);
			
				for ($i = 0; $i < ($n-$m); $i++) {
					$j = 0;
					while ($j < $m && $subject[$i+$j] == $pattern[$j]) {
						$j++;
						// print_r("<br> subject = ".$subject."<br>"); print_r("patern = ".$pattern."<br>"); print_r("i = ".$i."<br>"); print_r("m = ".$m."<br>"); print_r("j = ".$j."<br>");
					}
					if ($j == $m) {
						//echo "<br>1. kasih variabel : STgl false";
                        array_push($STglTrue,"false");
					}
				}

				$pattern2 = $detail_kegiatan;
				$m2 = strlen($pattern2);
			
				for ($i = 0; $i < ($n-$m2); $i++) {
					$j = 0;
					while ($j < $m2 && $subject[$i+$j] == $pattern2[$j]) {
						$j++;
						// print_r("<br> subject = ".$subject."<br>"); print_r("patern = ".$pattern2."<br>"); print_r("i = ".$i."<br>"); print_r("m = ".$m2."<br>"); print_r("j = ".$j."<br>");
					}
					if ($j == $m2) {
						//echo "<br>2. kasih variabel : SnamaKegiatan false";
                        array_push($SnamaKegiatanTrue,"false");
					}
				}

				$pattern2 = " ".$lingkup;
				$m2 = strlen($pattern2);
			
				for ($i = 0; $i < ($n-$m2); $i++) {
					$j = 0;
					while ($j < $m2 && $subject[$i+$j] == $pattern2[$j]) {
						$j++;
						// print_r("<br> subject = ".$subject."<br>"); print_r("patern = ".$pattern2."<br>"); print_r("i = ".$i."<br>"); print_r("m = ".$m2."<br>"); print_r("j = ".$j."<br>");
					}
					if ($j == $m2) {
						//echo "<br>3. kasih variabel : Speran false";
                        array_push($SperanTrue,"false");
					}
				}
			}
			// echo "<br><br>";
            // print_r($STglTrue);echo "<br>";
            // print_r($SnamaKegiatanTrue);echo "<br>";
			// print_r($SperanTrue);echo "<br>";
			// echo count($STglTrue);
			// echo count($SnamaKegiatanTrue);
			// echo count($SperanTrue);
			// echo "<br>";
			if (count($STglTrue) > 0 && count($SnamaKegiatanTrue) > 0 && count($SperanTrue) > 0 ) {
				if ($STglTrue[0] == "false" && $SnamaKegiatanTrue[0] == "false" && $SperanTrue[0] == "false") {
						$this->session->set_flashdata('notification_dobel_act', 'Gagal input, kegiatan sudah pernah dimasukkan.');
					//	 echo "data sudah pernah dimasukin";
				}
			}elseif (count($STglTrue) == 0 || count($SnamaKegiatanTrue) == 0 || count($SperanTrue) == 0 ) {
				$query= $this->M_dokumen->simpanDok_poin($data);
				//echo "<p style='color:red'>tersimpan</p>";
				$this->session->set_flashdata('notification_berhasil_disimpan', 'Poin berhasil dimasukan, silakan menunggu disahkan :)');
			}
			 
			if ($query) {
				redirect(site_url('Poin'));
			}
			else{
				redirect(site_url('Poin'));
			}
		}
	}

	function sub_string($pattern="", $subject="") {
		//echo substr("Hello world",1,8)."<br>";
		$subject = "2020-10-01 juara 2 lomba cipta cerpen tema galaksi 35";
		$pattern = " 35";
		// $subject = "aku seorang petani gandum akulah orangnya";
		// $pattern = "aku";
		$n = strlen($subject);
		$m = strlen($pattern);
	 
		for ($i = 0; $i < ($n-$m); $i++) {
			$j = 0;
			while ($j < $m && $subject[$i+$j] == $pattern[$j]) {
				$j++;
				print_r("<br> subject = ".$subject."<br>");
				print_r("patern = ".$pattern."<br>");
				print_r("i = ".$i."<br>");
				print_r("m = ".$m."<br>");
				print_r("j = ".$j."<br>");
				
			}
			if ($j == $m) {
				echo "kasih variabel : dollarINIBRUTEFORCEKETEMUDOBELDATA".$i;
			}
		}
		return "this true";


		// print_r($queryPoinByNIM);echo "<br><br>";

		// echo "<br><br>";
		// foreach ($queryPoinByNIM as $key ) {
		// 	echo $key['tahun']." ".$key['tanggal_kegiatan']." ".$key['domain']." ".$key['kegiatan']." ".$key['poin']." ".
		// 	$key['sub_kegiatan']." ".$key['detail_kegiatan']." ".$key['tempat']." ".$key['lingkup']." ".$key['id_mhs']."<br>" ;
		// }
	}
}