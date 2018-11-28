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
		$dKopi = $this->m_awal->ambilmenu('menu',array('kategori'=>'kopi'),4);
		$dMinu = $this->m_awal->ambilmenu('menu',array('kategori'=>'minuman'),4);
		$dMaka = $this->m_awal->ambilmenu('menu',array('kategori'=>'makanan'),4);
		$data = array('kopi'=>$dKopi,
					  'minuman'=>$dMinu,
					  'makanan'=>$dMaka);
		$this->load->view('profil',$data);
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
}
