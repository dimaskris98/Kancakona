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
		$config['file_name'] = $menu;
		
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
							'nama_gambar'=>$menu.$this->upload->data('file_ext'));
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
							'nama_gambar'=>'');
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
	
	public function updateMenu(){
		$menu = $this->input->post('menu');
		$id = $this->input->post('no_menu');
		$des = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		
		$config['upload_path'] = 'assets/images/menu/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $menu;
		
		$this->load->library('upload',$config);
		$cek = $_FILES['gambar']['name']; 
		
		if($cek){
			if($this->upload->do_upload('gambar')){
				$data = array(
							'nama'=>$menu,
							'kategori'=>$kategori,
							'harga'=>$harga,
							'deskripsi'=>$des,
							'nama_gambar'=>$menu.strtolower($this->upload->data('file_ext')));
				$query = $this->M_aksiadmin->updateMenu($id,$data);	
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
							'nama'=>$menu,
							'kategori'=>$kategori,
							'harga'=>$harga,
							'deskripsi'=>$des
							);
				$query = $this->M_aksiadmin->updateMenu($id,$data);	
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
	
		public function delMenu(){
		$id = $this->uri->segment(3);
		$data = $this->M_aksiadmin->delMenu($ambil = array('no_Menu'=>$id));
		
		if($data){
			
			echo "<script>
					alert('Menu Berhasil dihapus');
					location.href='".base_url('Admin/Menu')."'
				  </script>";
		} 
	}
	
	public function delmulMenu(){
		
		$no_menu = $this->input->post('no_menu');
		$cek = TRUE;
		foreach($no_menu as $row){
			$data = $this->M_aksiadmin->delMenu($ambil = array('no_menu'=>$row));
			if(!$data){
				$cek = FALSE;
			}
		}
		
		if($cek){
			echo "<script>
					alert('Menu Berhasil dihapus');
					location.href='".base_url('Admin/Menu')."'
				  </script>";
		}else{
			echo "<script>
					alert('Hapus Data ERROR');
					location.href='".base_url('Admin/Menu')."'
				  </script>";
		}
		
	}	
}
?>