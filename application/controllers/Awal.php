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
		$dMinu = $this->m_awal->ambilmenu('menu',array('kategori'=>'minuman'));
		$dMaka = $this->m_awal->ambilmenu('menu',array('kategori'=>'makanan'));
		$data = array('kopi'=>$dKopi,
					  'minuman'=>$dMinu,
					  'makanan'=>$dMaka,
					  'event'=>$dEvent
					  );
		$this->load->view('profil',$data);
	}
	
	public function pesan(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$jumlah = $this->input->post('jumlah');
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');
		
		$cek = $this->m_awal->cekTanggal($tanggal,$waktu,$jumlah);
		
		if($cek){
			$data = array(
						'no_pemesanan'=>'',
						'tgl_pemesanan'=>$tanggal,
						'nama'=>$nama,
						'waktu'=>$waktu,
						'email'=>$email,
						'no_hp'=>$hp,
						'keterangan'=>$keterangan,
						'jumlah'=>$jumlah);
			$cek2 = $this->m_awal->pesanTempat($data);
			if($cek2){
				echo '1';
			}else{
				echo '2';
			}
						
		}else{
			echo "0";
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
