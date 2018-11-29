<?php
class M_awal extends CI_Model {
	
	function ambilmenu($table,$where,$limit){
		$data = $this->db->get_where($table,$where,$limit)->result();
		return($data);
	}
	function ambilEvent($table,$limit){
		$data = $this->db->get($table,$limit);
		return($data->result());
	}

}
?>