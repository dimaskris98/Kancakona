<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdminSaran extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');
	}
	
	public function postSaran(){
		$tanggal = date('Y-m-d');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nomer = $this->input->post('nomer');
		$saran = $this->input->post('saran');
		
		$data = array('no_saran'=>'',
					  'tanggal'=>$tanggal,
					  'nama'=>$nama,
					  'email'=>$email,
					  'nomer'=>$nomer,
					  'saran'=>$saran);
		$cek = $this->M_aksiadmin->postSaran($data);
		
		if($cek){
					echo " <script>
							alert('Terimakasih atas saran yang Anda berikan');
							location.href = '".base_url()."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('$error');
							</script>
							";
				}
	}
	
	public function delSaran(){
		//$this->load->helper('file');
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->delSaran($ambil = array('no_saran'=>$id));
		if($data){
			
			echo "<script>
					alert('Event Berhasil dihapus');
					location.href='".base_url('Admin/Saran')."'
				  </script>";
		}else{
			echo "<script>
					alert('Hapus Data ERROR');
					location.href='".base_url('Admin/Saran')."'
				  </script>";
		}
	}
	
	public function delmulSaran(){
		
		$no_saran = $this->input->post('no_saran');
		$cek = TRUE;
		foreach($no_saran as $row){
			$data = $this->M_aksiadmin->delSaran($ambil = array('no_saran'=>$row));
			if(!$data){
				$cek = FALSE;
			}
		}
		
		if($cek){
			echo "<script>
					alert('Event Berhasil dihapus');
					location.href='".base_url('Admin/Saran')."'
				  </script>";
		}else{
			echo "<script>
					alert('Hapus Data ERROR');
					location.href='".base_url('Admin/Saran')."'
				  </script>";
		}
		
	}
}
?>