<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 
	}
	public function index($author="")
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;

		$query1 = $this->M_pengguna->listAllUserMhs();
		if ($author == "dosen") {
			$query2 = $this->M_pengguna->listAllUserDosen();
		}elseif ($author == "koordinator") {
			$query2 = $this->M_pengguna->listAllUserKa();
		}

		$tampil_prodi = $this->M_pengguna->tampilprodi();
		$tampil_author = $this->M_pengguna->tampilauthor();

		if ($author == NULL || $author == "") {
			$query = $query1;
		}else{
			$query = $query2;
		}

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header();
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header();
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header();
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;
 
		$dataHalaman = array(
		  'query'=> $query,
		  'da' => $kue,
		  'tampil_prodi'=>$tampil_prodi,
		  'tampil_author'=>$tampil_author,

		  'title'=>"Users",
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
		  
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah
        );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('pengguna/v_user',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function editUser($id)
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$Id_user =  $kue[0]->ID_user;
		$nama_lengkap =  $kue[0]->nama_lengkap;
		$prodi =  $kue[0]->prodi;
		$status =  $kue[0]->status;

		$tampil_prodi = $this->M_pengguna->tampilprodi();
		$tampil_author = $this->M_pengguna->tampilauthor();
		$query = $this->M_pengguna->listEditUser($id);

		//untuk header wajib*****
		$sah_header = $this->M_dokumen->count_sah_header();
			$count_sah = $sah_header[0]->count_sah;
		$menunggu_header = $this->M_dokumen->count_menunggu_header();
			$count_menunggu = $menunggu_header[0]->count_menunggu;
		$tidaksah_header = $this->M_dokumen->count_tidaksah_header();
			$count_tidaksah = $tidaksah_header[0]->count_tidaksah;
 
		$dataHalaman = array(
		  'query'=>$query,
		  'da' => $kue,
		  'tampil_prodi'=>$tampil_prodi,
		  'tampil_author'=>$tampil_author,

		  'title'=>"Users",
		  'id_user' => $Id_user,
		  'nama_lengkap' => $nama_lengkap,
		  'prodi' => $prodi,
		  'status' => $status,
		  
		  'count_sah' => $count_sah,
		  'count_menunggu' => $count_menunggu,
		  'count_tidaksah' => $count_tidaksah
        );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('pengguna/v_edit_user',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}

	public function updateUser(){
        if ($this->input->post('btnSimpan') == "Simpan") {
			$id_user = $this->input->post('id_user', TRUE);
			$username = $this->input->post('username', TRUE);
			$namaLengkap = $this->input->post('namaLengkap', TRUE);
			$_prodi = $this->input->post('prodi', TRUE);
			$email = $this->input->post('email', TRUE);
			$_password = $this->input->post('password', TRUE);
			$_cpassword = $this->input->post('cpassword', TRUE);
			$status = $this->input->post('status', TRUE);
			$author = $this->input->post('author', TRUE);
			$id = $this->input->post('id', TRUE);

          if($_password == ""){
            $data = array(
            	'ID_user' => $id_user,
            	'username' => $username,
        		'nama_lengkap' => $namaLengkap,
        		'prodi' => $_prodi,
            	'email' => $email,
            	'status' => $status,
        		'author' => $author
            );
			$query= $this->M_pengguna->simpanUpdateUser($data,$id);
          }
          else{
            if ($_password == $_cpassword) {
              //kumpulkan seua inputan kedalam array
              $data = array(
				'ID_user' => $id_user,
            	'username' => $username,
        		'nama_lengkap' => $namaLengkap,
        		'prodi' => $_prodi,
        		'password' => get_hash($_password),
            	'email' => $email,
            	'status' => $status,
				'author' => $author
              );              
              $query= $this->M_pengguna->simpanUpdateUser($data,$id);
            }
            else{
			  //jika password tidak sama
			  $this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <p><i class="icon fa fa-ban"></i> Password konfirmasi tidak cocok!</p></div>');
            }
          }       
          if ($query) {
            redirect('pengguna/Users');
          }
          else{
            $this->session->set_flashdata('notification_password', '<div class="col-xs-5 alert alert-danger alert-dismissible pull-right">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i> Edit Data gagal dilakukan</p> 
                  </div>');
            redirect('pengguna/Users');
          }
        }
	}

	public function tambahUser(){
		if($this->input->post('btnSimpan') == "Simpan"){
			$id_user = $this->input->post('id_user', TRUE);
			$username = $this->input->post('username', TRUE);
			$namaLengkap = $this->input->post('namaLengkap', TRUE);
			$_prodi = $this->input->post('prodi', TRUE);
			$email = $this->input->post('email', TRUE);
			$_password = $this->input->post('password', TRUE);
			$_cpassword = $this->input->post('cpassword', TRUE);
			$status = $this->input->post('status', TRUE);
			$author = $this->input->post('author', TRUE);

			if ($_password == $_cpassword) {
				$data = array(
				  'ID_user' => $id_user,
				  'username' => $username,
				  'nama_lengkap' => $namaLengkap,
				  'prodi' => $_prodi,
				  'password'=> get_hash($_password),
				  'email' => $email,
				  'status' => $status,
				  'author' => $author
				);
				$query= $this->M_pengguna->simpanUser($data);
				if ($query) {
					$this->session->set_flashdata('notification', 'Pendaftaran berhasil, silakan login.');	
					redirect(site_url('pengguna/Users'));
				}
				else{
					$this->session->set_flashdata('notification', 'Pendaftaran gagal, silakan ulangi.');	
					redirect(site_url('pengguna/Users'));
				}
			}
			else{
			  //jikapassword tidak sama degan confirm password
			  $this->session->set_flashdata('notification', 'Password Baru dan Konfirmasi Password harus sama');	
			  redirect(site_url('#signup'));
			}
		}
	}
	
	public function deleteUser($id){
		$this->M_pengguna->deleteUser($id);
		redirect('pengguna/Users');
	}

}
