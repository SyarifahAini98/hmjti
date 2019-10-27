<?php
class Model_Berita extends CI_Model {
    
	function get_berita(){
		$query = $this->db->query("SELECT * FROM tbl_berita");
		return $query->result();
	}

	function get_detail_berita($id_berita){
		$query = $this->db->query("SELECT * FROM tbl_berita WHERE id_berita='$id_berita'");
		return $query->result();
	}
	function berita($id,$number,$offset){
		$this->db->where($id);
		return $query = $this->db->get('tbl_berita',$number,$offset)->result();
	}
	function jumlah($id){
		$this->db->where($id);
		return $query = $this->db->get('tbl_berita')->num_rows();
	}
}