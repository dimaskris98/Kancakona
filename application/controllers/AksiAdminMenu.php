<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdminMenu extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');

	}
	
		public function simpanMenu(){
		$menu = $this->input->post('menu');
		$des = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		
		$config['upload_path'] = 'assets/images/menu/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $nama;
		
		$this->load->library('upload',$config);
		$cek = $_FILES['gambar']['name']; 
		
		if($cek){
			if($this->upload->do_upload('gambar')){
				$data = array(
							'no_menu'=>'',
							'nama'=>$menu,
							'kategori'=>$kategori,
							'harga'=>$harga,
							'deskripsi'=>$des,
							'gambar'=>$judul.$this->upload->data('file_ext'));
				$query = $this->M_aksiadmin->postMenu($data);	
				if($query){
					echo " <script>
							alert('Menu berhasil disimpan');
							location.href = '".base_url('Admin/menu')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('asd');
							</script>
							".$error;
				}
				
			}else{
				$error = $this->upload->display_errors('','');
				echo '
					<script>
						alert("'.$error.$isi.'");
						window.history.back();
					</script> ';	
			}
		}else{
			$data = array(
							'no_menu'=>'',
							'nama'=>$menu,
							'kategori'=>$kategori,
							'harga'=>$harga,
							'deskripsi'=>$des,
							'gambar'=>'');
				$query = $this->M_aksiadmin->postMenu($data);	
				if($query){
					echo " <script>
							alert('Menu berhasil disimpan');
							location.href = '".base_url('Admin/menu')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('Database bermasalah');
							</script>
							";
				};
		}
	}	
}
?>