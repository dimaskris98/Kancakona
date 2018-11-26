<?php
class M_aksiadmin extends CI_Model {
	function __construct() {
		
	}
<<<<<<< HEAD
	//DATA MODEL EVENT
=======

>>>>>>> ed2f63066849eb59d1855e55c68297c9fdff4684
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
<<<<<<< HEAD
	public function delEvent($where){
		$cek = $this->db->delete('event',$where);
		return($cek);
	}
	public function updateEvent($pk,$data){
		$cek = $this->db->update('event',$data, array('no_post'=>$pk));
		return($cek);
	}
	
	//DATA MODEL MENU
	
	public function getMenu(){
		$data = $this->db->get('menu');
		return($data->result());
	}
	public function selectMenu($where){
		$data = $this->db->get_where('menu',$where);
		return($data->row());
	}
	public function postMenu($data){
		$cek = $this->db->insert('menu',$data);	
		return($cek);
	}
	public function delMenu($where){
		$cek = $this->db->delete('menu',$where);
		return($cek);
	}
	
	// DATA SARAN 
	public function getSaran(){
		$data = $this->db->get('saran');
		return($data->result());
	}
=======
>>>>>>> ed2f63066849eb59d1855e55c68297c9fdff4684
}
?>