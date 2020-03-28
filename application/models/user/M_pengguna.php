<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_pengguna extends CI_Model{
    
    var $dt_login= 'login';

    function listAllUserMhs(){ //query untuk menampilkan list user pada halaman user
        $this->db->where('author','mahasiswa');
        $query = $this->db->get($this->dt_login);
        return $query->result();
    }

    function listAllUserDosen(){ //query untuk menampilkan list user pada halaman user
        $this->db->where('author','dosen');
        $query = $this->db->get($this->dt_login);
        return $query->result();
    }

    function listAllUserKa(){ //query untuk menampilkan list user pada halaman user
        $this->db->where('author !=','mahasiswa');
        $this->db->where('author !=','dosen');
        $query = $this->db->get($this->dt_login);
        return $query->result();
    }

    function listEditUser($id){
        $this->db->select('*');
        $this->db->from($this->dt_login);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    function simpanUpdateUser($data,$id){//query untuk menyimpan user baru pada halaman tambah users
        $this->db->where('id',$id);
        $hasil = $this->db->update($this->dt_login,$data);
        return $hasil; 
    }

    public function simpanUser($data){//function untuk menyimpan pengguna baru yg melakukan signup
		return $this->db->insert($this->dt_login, $data);
    }
    
    function deleteUser($id){
        $this->db->where('id', $id);
        $this->db->delete($this->dt_login);
    }

    function tampilprodi(){ //query untuk menampilkan list prodi pada halaman edit user
        $query = $this->db->get('program_studi');
        return $query->result();
    }

    function tampilauthor(){ //query untuk menampilkan list prodi pada halaman edit user
        $query = $this->db->get('author');
        return $query->result();
    }

    function simpanUpdatePass($data,$id){//query untuk menyimpan user baru pada halaman Ubah Password
        $this->db->where('ID_user',$id);
        $hasil = $this->db->update($this->dt_login,$data);
        return $hasil; 
    }

}