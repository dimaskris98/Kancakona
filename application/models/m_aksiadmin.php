<?php
class M_aksiadmin extends CI_Model {
	function __construct() {
		
	}

public function getEvent(){
	$data = $this->db->get('event')->result();
	return($data);
}
}
?>