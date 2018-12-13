<?php
class M_awal extends CI_Model {
	
	function ambilmenu($table,$where,$limit=null){
		$data = $this->db->get_where($table,$where,$limit)->result();
		return($data);
	}

	function ambilEvent($table,$limit){
		$data = $this->db->get($table,$limit);
		return($data->result());
	}
	
	function cekTanggal($tgl, $waktu,$meja){
		$this->db->select('*');
		$this->db->where("tgl_pemesanan = '$tgl' AND waktu = '$waktu' AND jumlah = $meja ");
		$this->db->from('pemesanan');
		$total = $this->db->count_all_results();
		
		$this->db->select('*');
		$this->db->from('meja');
		$this->db->where("kapasitas = '$meja' ");
		$stok = $this->db->count_all_results();
		
		if($stok > $total){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	function pesanTempat($data){
		$sql = $this->db->insert('pemesanan',$data);
		return $sql;
	}
		

}
?>