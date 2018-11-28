<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdminEvent extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');
		$this->load->helper("file");
	}
	
	public function postEvent(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$config['upload_path'] = 'assets/images/event/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $judul;
		$tanggal = date('Y-m-d');
		$this->load->library('upload',$config);
		$cek = $_FILES['img']['name']; 
		
		if($cek){
			if($this->upload->do_upload('img')){
				
				$data = array(
							'no_post'=>'',
							'tanggal'=>$tanggal,
							'judul'=>$judul,
							'nama_gambar'=>$judul.$this->upload->data('file_ext'),
							'isi'=>$isi);
				$query = $this->M_aksiadmin->postEvent($data);	
				if($query){
					echo " <script>
							alert('Acara berhasil disimpan');
							location.href = '".base_url('Admin/event')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('$error');
							</script>
							";
				}
				
			}else{
				$error = $this->upload->display_errors('','');
				echo '
					<script>
						alert("'.$error.'");
						window.history.back();
					</script> ';	
			}
		}else{
			$data = array(
							'no_post'=>'',
							'tanggal'=>$tanggal,
							'judul'=>$judul,
							'nama_gambar'=>NULL,
							'isi'=>$isi);
			$query = $data = $this->M_aksiadmin->postEvent($data);
				if($query){
					echo " <script>
							alert('Acara berhasil disimpan');
							location.href = '".base_url('Admin/event')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('asd');
							</script>
							".var_dump($error);
				}
		}
	}
	
	public function delEvent(){
		//$this->load->helper('file');
		$id = $this->uri->segment(3);
		$a = $this->M_aksiadmin->getImgName('event',array('no_post'=>$id));
		$data = $this->M_aksiadmin->delEvent($ambil = array('no_post'=>$id));
		$nama = str_replace(' ','_',$a['nama_gambar']) ;
		if($nama!=NULL){
				delete_files('assets/images/event/'.$nama);
			}
		if($data){
			
			echo "<script>
					alert('Event Berhasil dihapus');
					location.href='".base_url('Admin/Event')."'
				  </script>";
		} 
	}
	
	public function delmulEvent(){
		
		$no_post = $this->input->post('no_post');
		$cek = TRUE;
		foreach($no_post as $row){
			$data = $this->M_aksiadmin->delEvent($ambil = array('no_post'=>$row));
			$a = $this->M_aksiadmin->getImgName('event',array('no_post'=>$row));
			$nama = str_replace(' ','_',$a['nama_gambar']) ;
			if($nama!=NULL){
				delete_files('assets/images/event/'.$nama);
			}
			if(!$data){
				$cek = FALSE;
			}
		}
		
		if($cek){
			echo "<script>
					alert('Event Berhasil dihapus');
					location.href='".base_url('Admin/Event')."'
				  </script>";
		}else{
			echo "<script>
					alert('Hapus Data ERROR');
					location.href='".base_url('Admin/Event')."'
				  </script>";
		}
		
	}
	
	public function updateEvent(){
		$no_post = $this->input->post('no_post');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		
		$config['upload_path'] = 'assets/images/event/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $judul;
		
		$this->load->library('upload',$config);
		$cek = $_FILES['img']['name'];
		
		if($cek){
			if($this->upload->do_upload('img')){
				$data = array(
							'judul'=>$judul,
							'nama_gambar'=>$judul.$this->upload->data('file_ext'),
							'isi'=>$isi);
				$query = $data = $this->M_aksiadmin->updateEvent($no_post,$data);
				if($query){
					echo " <script>
							alert('Acara berhasil disimpan');
							location.href = '".base_url('Admin/event')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('asd');
							</script>
							".var_dump($error);
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
							'judul'=>$judul,
							'isi'=>$isi);
			$query = $data = $this->M_aksiadmin->updateEvent($no_post,$data);
				if($query){
					echo " <script>
							alert('Acara berhasil disimpan');
							location.href = '".base_url('Admin/event')."';
							</script>
							";
					
				}else{
					$error = $this->db->error();
					echo " <script>
							alert('asd');
							</script>
							".var_dump($error);
				}
		}
		
	}
	
}
?>