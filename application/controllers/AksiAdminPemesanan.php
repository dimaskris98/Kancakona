<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdminPemesanan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');

	}
	
	public function updatePemesanan(){
	}
	
	public function delPemesanan(){
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->delPemesanan(array('no_pemesanan'=>$id));
		
		if($data){
			
			echo "<script>
					alert('Data Berhasil dihapus');
					location.href='".base_url('Admin/reservasi')."'
				  </script>";
		}
	}
	
	public function delmulPemesanan(){
		
		$no_pemesanan = $this->input->post('no_pemesanan');
		$cek = TRUE;
		foreach($no_pemesanan as $row){
			$data = $this->M_aksiadmin->delPemesanan(array('no_pemesanan'=>$row));
			if(!$data){
				$cek = FALSE;
			}
		}
		
		if($cek){
			echo "<script>
					alert('Data Berhasil dihapus');
					location.href='".base_url('Admin/reservasi')."'
				  </script>";
		}else{
			echo "<script>
					alert('Hapus Data ERROR');
					location.href='".base_url('Admin/reservasi')."'
				  </script>";
		}
		
	}
}
?>