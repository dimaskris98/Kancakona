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
	
	function cekTanggal($tgl, $waktu){
		$this->db->select('SUM(jumlah) as total');
		$this->db->where("tgl_pemesanan = '$tgl' AND waktu = '$waktu'");
		$this->db->from('pemesanan');
		$total = $this->db->get()->row();
		
		if($total->total<1){
			return $total->total;
		}else{
			return $total->total;
		}
	}
	
	function pesanTempat($data){
		$sql = $this->db->insert('pemesanan',$data);
		return $sql;
	}
		

}
?>