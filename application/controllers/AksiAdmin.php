<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdmin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_aksiadmin');

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
		
		$this->load->library('upload',$config);
		$cek = $_FILES['img']['name']; 
		
		if($cek){
			if($this->upload->do_upload('img')){
				$tanggal = date('Y-m-d');
				$data = array(
							'no_post'=>'',
							'tanggal'=>$tanggal,
							'judul'=>$judul,
							'gambar'=>NULL,
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
							alert('asd');
							</script>
							".var_dump($error);
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
			echo "
					<script>
						alert('FOTO KOSONG');
						window.history.back();
					</script>
			 		";
		}
	}
}
?>