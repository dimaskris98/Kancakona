<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
			$this->load->view('admin/head');
			$this->load->view('admin/navigation');
			$this->load->view('admin/content');
		
		
	}
	
	public function index(){
		//$cek = $this->session->userdata('admin');
		//if(isset($cek)){
			$this->load->view('admin/konten/beranda');
			$this->load->view('admin/footer');
		//}else{
			//echo '
		//		<script>
				//	alert("Silahkan Login kembali")
			//		history.
				//</script>';
		//	header("Location: ".base_url());
	//	}
		
		
	}
	
	public function event(){
			$this->load->view('admin/konten/event');
			$this->load->view('admin/footer');
	}
	
	public function newEvent(){
			$this->load->view('admin/konten/newEvent');
			$this->load->view('admin/footer');
	}
	public function logout(){
		header("Location: ".base_url());
		$this->session->sess_destroy();
	}
}
?>