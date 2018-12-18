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
			$this->load->view('admin/konten/home');
			$this->load->view('admin/footer');
		//}else{
			//echo '
		//		<script>
				//	alert("Silahkan Login kembali")
			//		history.
				//</script>';
		//	header("Location: ".base_url());
	//	}
		//$this->load->view('admin/footer');
		
		
	}
	//PEMESANAN CONTROLLER
	public function reservasi(){
		if(null !== $this->input->get('tanggal')){
			$tanggal = $this->input->get('tanggal');
			$waktu = $this->input->get('waktu');
			$jumlah = $this->input->get('jumlah');
			
			$where = "tgl_pemesanan = '$tanggal' OR waktu = '$waktu' OR jumlah = $jumlah";
			$data = $this->M_aksiadmin->getPemesanan($where);
			$this->load->view('admin/konten/reservasi',$var = array('data' =>$data));
			$this->load->view('admin/footer');
			
			
		}else{
			$data = $this->M_aksiadmin->getPemesanan2();
			$this->load->view('admin/konten/reservasi',$var = array('data' =>$data));
			$this->load->view('admin/footer');
		}
		
	}
	
	public function detPemesanan(){
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->getPemesananRow(array('no_pemesanan'=>$id));
		
		$tanggal = $this->M_aksiadmin->ubahTanggal($data->tgl_pemesanan);
			
		$this->load->view('admin/konten/detPemesanan',$var = array('data'=>$data,'tgl'=>$tanggal));
		$this->load->view('admin/footer');
	}
	
	//EVENT CONTROLLER
	public function event(){
		$htmlTag = array('&lt;div&gt;','&lt;/div&gt;');
		$data = $this->M_aksiadmin->getEvent();
		$this->load->view('admin/konten/event',$var = array('data' =>$data,'html'=>$htmlTag));
		$this->load->view('admin/footer');
	}
	
	public function newEvent(){
		$this->load->view('admin/konten/newEvent');
		$this->load->view('admin/footer');
	}
	
	public function editEvent(){
			
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->selectEvent($ambil = array('no_post'=>$id));
			
		$this->load->view('admin/konten/newEvent',$var = array('data'=>$data));
		$this->load->view('admin/footer');
	}
	
	
	//MENU CONTROLLER
	public function menu(){
		$data = $this->M_aksiadmin->getMenu();
		$this->load->view('admin/konten/menu', array('data'=>$data));
		$this->load->view('admin/footer');
	}
	
		public function newMenu(){
		$this->load->view('admin/konten/newMenu');
		$this->load->view('admin/footer');
	}
	
	public function editMenu(){
			
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->selectMenu($ambil = array('no_menu'=>$id));
			
		$this->load->view('admin/konten/newMenu',$var = array('data'=>$data));
		$this->load->view('admin/footer');
	}
	
	
	
	
	
	public function saran(){
		$data = $this->M_aksiadmin->getSaran();
		$this->load->view('admin/konten/saran', array('data'=>$data));
		$this->load->view('admin/footer');
	}
	
	public function logout(){
		header("Location: ".base_url());
		$this->session->sess_destroy();
	}
}
?>