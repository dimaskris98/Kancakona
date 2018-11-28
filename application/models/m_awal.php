<?php
class M_awal extends CI_Model {
	
	function ambilmenu($table,$where,$limit){
		$data = $this->db->get_where($table,$where,$limit)->result();
		return($data);
	}



}
?>