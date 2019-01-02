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
		$totalItems = $this->input->post('tMenu');
		$totalHarga = $this->input->post('tHarga');
		$acara = $this->input->post('acara');
		
		$menuID = $this->input->post('menu');
		$jmlmenu = $this->input->post('jml');
		$jmlHarga = $this->input->post('tot');
		
		$cek = $this->m_awal->cekTanggal($tanggal,$waktu,$jumlahOrang);
		$error = 'a';
		
		if($cek){
			
			$data = array(
						'no_pemesanan'=>'',
						'tgl_pemesanan'=>$tanggal,
						'nama'=>$nama,
						'waktu'=>$waktu,
						'email'=>$email,
						'no_hp'=>$hp,
						'acara'=>$acara,
						'keterangan'=>$keterangan,
						'total_menu'=>$totalItems,
						'total_harga'=>$totalHarga,
						'jumlah'=>$jumlahOrang);
						
			$cek2 = $this->m_awal->pesanTempat($data);
			if($cek2){
				$noPemesanan = $this->db->insert_id();
				$index = 0;
				
				foreach($menuID as $id){
					$data = array(
								'no_detail'=>'',
								'no_pemesanan'=>$noPemesanan,
								'no_menu'=>$id,
								'jumlah_item'=>$jmlmenu[$index],
								'jumlah_harga'=>$jmlHarga[$index]);
								
					$cek3 = $this->m_awal->pesanDetail($data);
					
					if(!$cek3){
						$error += $this->db->error(); 
					}
					$index++;
				}
				
				echo '2';
			}else{
				$error += $this->db->error();
				echo $error;
			}
						
		}else{
			echo '0';
		}
	}
	
	public function auth()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$where = array(
					'username' => $username,
					'password' => $password
					);
		
		$cek = $this->m_login->cek_login('pengaturan',$where)->num_rows();
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
