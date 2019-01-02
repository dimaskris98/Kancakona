<?php
class M_aksiadmin extends CI_Model {
	function __construct() {
		
	}
	//DATA MODEL RESERVASI
	public function getPemesanan($where){
		$data = $this->db->get_where('pemesanan',$where);
		return($data->result());
	}
	public function getPemesananRow($where){
		$data = $this->db->get_where('pemesanan',$where);
		return($data->row());
	}
	public function getDetail($where){
		$this->db->select('*');
		$this->db->from('detail_pemesanan');
		$this->db->join('menu','detail_pemesanan.no_menu = menu.no_menu');
		$this->db->where($where);
		$data = $this->db->get();
		return($data->result());
	}
	public function getPemesanan2(){
		$data = $this->db->get('pemesanan');
		return($data->result());
	}
	
	public function ubahTanggal($tgl){
		
		$a = date_create_from_format('d/m/Y',$tgl);
		$b = date_format($a,'d .M Y');
		$pattern = array(".jan",".feb",".mar",".apr",'.may',".jun",'.jul','.agu','.sep','.okt','.nov','.dec');
		$replace = array("Januari","Februari","Maret","April",'Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$b = str_ireplace($pattern,$replace,$b);
		return $b;
	}
	public function delPemesanan($where){
		$cek = $this->db->delete('pemesanan',$where);
		return($cek);
	}
	
	
	//DATA MODEL EVENT
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
	public function delEvent($where){
		$cek = $this->db->delete('event',$where);
		return($cek);
	}
	public function updateEvent($pk,$data){
		$cek = $this->db->update('event',$data, array('no_post'=>$pk));
		return($cek);
	}
	
	public function getImgName($table, $id){
		$this->db->select('nama_gambar');
		$this->db->from($table);
		$this->db->limit(1);
		$this->db->where($id);
		$name = $this->db->get()->row_array();
		
		return($name);
	}
	

	function deleteFiles($path){
	$jalur = $_SERVER['DOCUMENT_ROOT'].'/Kancakona/assets/images/'.$path;
    unlink($jalur); // delete file
        //echo $file.'file deleted';
	}
	
	//DATA MODEL MENU
	
	public function getMenu(){
		$this->db->order_by('no_menu','ASC');
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
	public function updateMenu($pk,$data){
		$cek = $this->db->update('menu',$data, array('no_menu'=>$pk));
		return($cek);
	}
	
	// DATA SARAN 
	public function getSaran(){
		$data = $this->db->get('saran');
		return($data->result());
	}
	
	public function postSaran($data){
		$cek = $this->db->insert('saran',$data);	
		return($cek);
	}
	
	public function delSaran($where){
		$cek = $this->db->delete('saran',$where);
	}
	
	//DATA PENGATURAN
	public function getPengaturan(){
		$this->db->limit(1);
		$data = $this->db->get('pengaturan');
		return($data->row());
	}
	public function updateSetting($data){
		$this->db->where('id',1);
		$cek = $this->db->update('pengaturan',$data);
		
		return $cek;
		
		
	}
}
?>