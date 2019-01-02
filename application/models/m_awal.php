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
	
	function cekTanggal($tgl, $waktu, $jumlah){
		$this->db->select('SUM(jumlah) as total');
		$this->db->where("tgl_pemesanan = '$tgl' AND waktu = '$waktu'");
		$this->db->from('pemesanan');
		$total = $this->db->get()->row();
		
		if((100-$total->total)>$jumlah){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	function pesanTempat($data){
		$sql = $this->db->insert('pemesanan',$data);
		return $sql;
	}
	function pesanDetail($data){
		$sql = $this->db->insert('detail_pemesanan',$data);
		return $sql;
	}
		

}
?>