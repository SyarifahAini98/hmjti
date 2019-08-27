<?php
class Model_Index extends CI_Model {
    
	function get_berita(){
		$query = $this->db->query("SELECT * FROM tb_berita");
		return $query->result();
	}
}