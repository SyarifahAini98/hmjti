<?php
class Model_Berita extends CI_Model {
    
	function get_berita(){
		$query = $this->db->query("SELECT * FROM tbl_berita");
		return $query->result();
	}
}