<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		
		
	}
	
	public function index(){
		$cek = $this->session->userdata('admin');
		if(isset($cek)){
			$this->load->view('admin/head');
			$this->load->view('admin/navigation');
			$this->load->view('admin/content');
			$this->load->view('admin/beranda');
			$this->load->view('admin/footer');
		}else{
			echo '
				<script>
					alert("Silahkan Login kembali")
					history.
				</script>';
			header("Location: ".base_url());
		}
		
		
	}
	public function logout(){
		header("Location: ".base_url());
		$this->session->sess_destroy();
	}
}
?>