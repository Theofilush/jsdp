<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_poin= 'poin';

    function listPoint_byadmin(){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('status !=',"Sah"); 
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function listPointSah_byIdMhs($id){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('id_mhs',$id); 
        $this->db->where('status','Sah'); 
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function listPointMenunggu_byIdMhs($id){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('id_mhs',$id); 
        $this->db->where('status','Menunggu'); 
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function listPointTidakSah_byIdMhs($id){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('id_mhs',$id); 
        $this->db->where('status','Tidak sah');
        $this->db->group_by('poin.no');
        $query = $this->db->get();
        return $query->result();
    }

    function listPointViewDosen($id){
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

    function listPoint_ka(){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('status !=',"Sah"); 
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        //$this->db->join('login', 'poin.id_mhs = login.ID_user','inner');
        $this->db->where('poin.id_mhs', $keyword); 
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function get_keyword_transkip($keyword){
        $this->db->select('*');
        $this->db->from('poin');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        //$this->db->join('login', 'poin.id_mhs = login.ID_user','inner');
        $this->db->where('poin.id_mhs', $keyword);
        $this->db->where('poin.status', "Sah");
        $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result();
    }

    function sum_poin_sah($keyword){
        $this->db->select_sum('poin.poin');
        $this->db->from('poin');
        $this->db->where('poin.id_mhs', $keyword);
        $this->db->where('poin.status', "Sah");
        $query = $this->db->get();
        return $query->result();
    }

    function cek_nim($usn){		
		$this->db->where("ID_user", $usn);
		$query = $this->db->get("login");
    	return $query;
	}

    function listEditPoint_byNo($id){
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
        $this->db->select('*, poin.status AS status_poin, login.status AS status_login');
        $this->db->from('poin');
        $this->db->join('login', 'poin.id_mhs = login.ID_user','inner');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->group_by('poin.no'); 
        $this->db->where('poin.status', "Menunggu");
        $query = $this->db->get();
        return $query->result();
    }

    function listPoint_sah(){
        $this->db->select('*, poin.status AS status_poin, login.status AS status_login');
        $this->db->from('poin');
        $this->db->join('login', 'poin.id_mhs = login.ID_user','inner');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->group_by('poin.no'); 
        $this->db->where('poin.status', "Sah");
        $query = $this->db->get();
        return $query->result();
    }

    function listPoint_tidaksah(){
        $this->db->select('*, poin.status AS status_poin, login.status AS status_login');
        $this->db->from('poin');
        $this->db->join('login', 'poin.id_mhs = login.ID_user','inner');
        $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->group_by('poin.no'); 
        $this->db->where('poin.status', "Tidak sah");
        $query = $this->db->get();
        return $query->result();
    }

    function tampil_domain(){ //query untuk menampilkan tahun pada form input
        $query = $this->db->get('domain'); 
        return $query->result();
    }

    function tampil_tahun(){ //query untuk menampilkan tahun pada form input
        $this->db->order_by('tahun', 'DESC');
        $query = $this->db->get('tahun'); 
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
        $this->db->group_by('nama_lingkup'); 
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
    
    function listPointBF($id){
        $this->db->select('*');
        $this->db->from('poin');
        // $this->db->join('domain', 'poin.domain = domain.id_domain','inner');
        // $this->db->join('kegiatan', 'domain.id_domain = kegiatan.id_domain','inner');
        // $this->db->join('subkegiatan', 'kegiatan.id_kegiatan = subkegiatan.id_kegiatan','inner');
        // $this->db->join('lingkup', 'subkegiatan.id_subkegiatan = lingkup.id_subkegiatan','inner');
        $this->db->where('id_mhs',$id); 
        //$this->db->where('status','Sah'); 
        // $this->db->group_by('poin.no'); 
        $query = $this->db->get();
        return $query->result_array();
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
        $this->db->select('id_subkegiatan,nama_subkegiatan');
        $this->db->from('poin');
        $this->db->join('subkegiatan', 'poin.sub_kegiatan = subkegiatan.id_subkegiatan','inner');
        $this->db->where('no', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function select_lingkup($id){
        $this->db->select('id_lingkup,nama_lingkup');
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

    function validasi_poin($id,$diperiksa_oleh){
        $this->db->set('diperiksa_oleh', $diperiksa_oleh);
        $this->db->set('tanggal_periksa', date("Y-m-d H:i:s", strtotime('+5 hours')));
        $this->db->set('status', "Sah");
        $this->db->set('keterangan', NULL);
        $this->db->where('no',$id);
        return $this->db->update('poin');
    }

    function toval_poin($id,$diperiksa_oleh){
        $this->db->set('diperiksa_oleh', $diperiksa_oleh);
        $this->db->set('tanggal_periksa', date("Y-m-d H:i:s", strtotime('+5 hours')));
        $this->db->set('status', "Tidak sah");
        $this->db->where('no',$id);
        return $this->db->update('poin');
    }

    function count_sah_header(){
        $this->db->select('COUNT(*) as count_sah');
        $this->db->from('poin');
        $this->db->where('status', "Sah");
        $query = $this->db->get();
        return $query->result();
    }

    function count_menunggu_header(){
        $this->db->select('COUNT(*) as count_menunggu');
        $this->db->from('poin');
        $this->db->where('status', "Menunggu");
        $query = $this->db->get();
        return $query->result();
    }

    function count_tidaksah_header(){
        $this->db->select('COUNT(*) as count_tidaksah');
        $this->db->from('poin');
        $this->db->where('status', "Tidak sah");
        $query = $this->db->get();
        return $query->result();
    }

    function sum_sah(){
        $this->db->select('SUM(poin) as sum_sah');
        $this->db->from('poin');
        $this->db->where('status', "Sah");
        $query = $this->db->get();
        return $query->result();
    }

    function sum_menunggu(){
        $this->db->select('SUM(poin) as sum_menunggu');
        $this->db->from('poin');
        $this->db->where('status', "Menunggu");
        $query = $this->db->get();
        return $query->result();
    }

    function sum_tidaksah(){
        $this->db->select('SUM(poin) as sum_tidaksah');
        $this->db->from('poin');
        $this->db->where('status', "Tidak sah");
        $query = $this->db->get();
        return $query->result();
    }


}