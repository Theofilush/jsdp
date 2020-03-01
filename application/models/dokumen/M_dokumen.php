<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_poin= 'poin';

	function listPoint_byidMHS(){
        $query = $this->db->get($this->t_poin);
        return $query->result();
    } 
}