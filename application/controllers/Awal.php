<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_awal');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$htmlTag = array('&lt;div&gt;','&lt;/div&gt;');
		$dEvent = $this->m_awal->ambilEvent('event',10);
		$dKopi = $this->m_awal->ambilmenu('menu',array('kategori'=>'kopi'));
		$dTeh = $this->m_awal->ambilmenu('menu',array('kategori'=>'teh'));
		$dMoji = $this->m_awal->ambilmenu('menu',array('kategori'=>'mojito&soda'));
		$dFrap = $this->m_awal->ambilmenu('menu',array('kategori'=>'frappe'));
		$dCam = $this->m_awal->ambilmenu('menu',array('kategori'=>'camilan'));
		$dMaka = $this->m_awal->ambilmenu('menu',array('kategori'=>'makanan'));
		$dDes = $this->m_awal->ambilmenu('menu',array('deskripsi'));
		$data = array('kopi'=>$dKopi,
					  'teh'=>$dTeh,
					  'mojito'=>$dMoji,
					  'frappe'=>$dFrap,
					  'camilan'=>$dCam,
					  'makanan'=>$dMaka,
					  'deskripsi'=>$dDes,
					  'event'=>$dEvent,
					  'html'=>$htmlTag
					  );
		$this->load->view('profil',$data);
	}
	
	public function pesan(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$jumlahOrang = $this->input->post('jumlah');
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');
		$menuID = $this->input->post('menu');
		$jmlmenu = $this->input->post('jml');
		$jmlHarga = $this->input->post('tot');
		$totalItems = $this->input->post('tMenu');
		$totalHarga = $this->input->post('tHarga');
		$acara = $this->input->post('acara');
		
		$cek = $this->m_awal->cekTanggal($tanggal,$waktu);
		
		if($cek>0){
			$data = array(
						'no_pemesanan'=>'',
						'tgl_pemesanan'=>$tanggal,
						'nama'=>$nama,
						'waktu'=>$waktu,
						'email'=>$email,
						'no_hp'=>$hp,
						'keterangan'=>$keterangan,
						'jumlah'=>$jumlahOrang);
			$cek2 = $this->m_awal->pesanTempat($data);
			if($cek2){
				echo $cek;
			}else{
				echo $cek;
			}
						
		}else{
			echo $cek;
		}
	}
	
	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
					'Username' => $username,
					'Password' => $password
					);
		
		$cek = $this->m_login->cek_login('user',$where)->num_rows();
		if($cek){
			$this->session->set_userdata('admin',$username);
			redirect("Admin");
		}else{
			redirect("/");
		}
		
	}
	
	public function tampilEvent(){
		$id = $this->uri->segment(3);
		$data = $this->m_awal->ambilMenu('event',array('no_post'=>$id));
		echo json_encode($data[0]);
	}
}
