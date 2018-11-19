<?php
class M_aksiadmin extends CI_Model {
	function __construct() {
		
	}

	public function getEvent(){
		$data = $this->db->get('event');
		return($data->result());
	}
	public function selectEvent($where){
		$data = $this->db->get_where('event',$where);
		return($data->row());
	}
	public function postEvent($data){
		$cek = $this->db->insert('event',$data);	
		return($cek);
	}
}
?>