<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_poin= 'poin';

	function listPoint_byidMHSa(){
        $query = $this->db->get($this->t_poin);
        return $query->result();
    }

    function listPoint_byidMHS(){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function listEditPoint_byidMHS($id){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('no',$id);
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function listPoint_menunggu(){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->group_by('poin.no'); 
        $this->db->where('status', "Menunggu");
        $query = $this->db->get();
        return $query->result();
    }

    function tampil_domain(){ //query untuk menampilkan tahun pada form input
        $query = $this->db->get('domain'); 
        return $query->result();
    }

    public function viewByKegiatan($iddom){
        $this->db->where('id_domain', $iddom);
        $result = $this->db->get('kegiatan')->result(); // Tampilkan semua data kegiatan berdasarkan id domain
        return $result;
    }
    
    public function viewBySubKegiatan($iddom){
        $this->db->where('id_kegiatan', $iddom);
        $result = $this->db->get('subkegiatan')->result(); // Tampilkan semua data subkegiatan berdasarkan id kegiatan
        return $result;
    }

    public function viewByLingkup($iddom){
        $this->db->where('id_subkegiatan', $iddom);
        $result = $this->db->get('lingkup')->result(); // Tampilkan semua data subkegiatan berdasarkan id kegiatan
        return $result;
    }

    public function viewByPoin($iddom){
        $this->db->where('id_lingkup', $iddom);
        $result = $this->db->get('lingkup')->result(); // Tampilkan semua data subkegiatan berdasarkan id kegiatan
        return $result;
    }

    function simpanDok_poin($data){
        return $this->db->insert('poin', $data);
    } 

    function updateDok_poin($data,$id){
        $this->db->where('no',$id);
        return $this->db->update('poin',$data);
    }

    function deleteDok_poin($id){
        $this->db->where('no', $id);
        $this->db->delete('poin');
    }

    function select_domain($id){
        $this->db->select('id_domain,nama_domain');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function select_kegiatan($id){
        $this->db->select('id_kegiatan,nama_kegiatan');
        $this->db->from('poin');
        $this->db->join('kegiatan', 'poin.kegiatan = kegiatan.id_kegiatan','inner');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function select_subkegiatan($id){
        $this->db->select('nama_subkegiatan');
        $this->db->from('poin');
        $this->db->join('subkegiatan', 'poin.sub_kegiatan = subkegiatan.id_subkegiatan','inner');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function select_lingkup($id){
        $this->db->select('nama_lingkup');
        $this->db->from('poin');
        $this->db->join('lingkup', 'poin.lingkup = lingkup.id_lingkup','inner');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function total_sah_poin($id){
        $this->db->select('SUM(poin) as jumlah_sah');
        $this->db->from('poin');
        $this->db->where('id_mhs', $id);
        $this->db->where('status', "Sah");
        $query = $this->db->get();
        return $query->result();
    }

    function total_tidaksah_poin($id){
        $this->db->select('SUM(poin) as jumlah_tidaksah');
        $this->db->from('poin');
        $this->db->where('id_mhs', $id);
        $this->db->where('status', "Tidak sah");
        $query = $this->db->get();
        return $query->result();
    }

    function total_menunggu_poin($id){
        $this->db->select('SUM(poin) as jumlah_menunggu');
        $this->db->from('poin');
        $this->db->where('id_mhs', $id);
        $this->db->where('status', "Menunggu");
        $query = $this->db->get();
        return $query->result();
    }

}