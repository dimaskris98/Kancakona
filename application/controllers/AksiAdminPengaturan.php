<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdminPengaturan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');

	}
	
	public function updateAkun(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$data = array(
					'username'=>$username,
					'password'=>$password);
		
		$cek = $this->M_aksiadmin->updateSetting($data);
		if($cek){
			echo "<script>
					alert('Akun Berhasil Diperbarui');
					location.href = '".base_url('Admin/pengaturan')."';
				  </script>";
		}
	}
	
	public function updateEmail(){
		$eToko = $this->input->post('eToko');
		$eAdmin = $this->input->post('eAdmin');
		$pToko = md5($this->input->post('pToko'));
		$data = array(
					'email_toko'=>$eToko,
					'pass_email_toko'=>$pToko,
					'email_admin'=>$eAdmin);
		
		$cek = $this->M_aksiadmin->updateSetting($data);
		if($cek){
			echo "<script>
					alert('Email Berhasil Diperbarui');
					location.href = '".base_url('Admin/pengaturan')."';
				  </script>";
		}
	}
	
}

?>