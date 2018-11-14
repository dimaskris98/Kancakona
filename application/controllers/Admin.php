<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
			$this->load->model('M_aksiadmin');
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
		$this->load->view('admin/footer');
		}
		else{
			echo '<script type="text/javascript">
					alert("hai");
					</script>';
			header("Location: ".base_url());	}
		
		
	}
	
	public function event(){
			
			$data = $this->db->get('event')->result();
			$this->load->view('admin/konten/event',$var = array('data' =>$data));
			$this->load->view('admin/footer');
	}
	
	public function newEvent(){
			$this->load->view('admin/konten/newEvent');
			$this->load->view('admin/footer');
	}
	public function menu(){
			$this->load->view('admin/konten/menu');
			$this->load->view('admin/footer');
	}
	public function saran(){
			$this->load->view('admin/konten/saran');
			$this->load->view('admin/footer');
	}
	public function logout(){
		header("Location: ".base_url());
		$this->session->sess_destroy();
	}
}
?>