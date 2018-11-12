<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AksiAdmin extends CI_Controller {
	function __construct() {
		parent::__construct();

	}
	
	public function postEvent(){
		$config['upload_path'] = 'assets/images/event/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		
		$this->load->library('upload',$config);
		
		$judul = $this->input->post('judul');
		if(!$this->upload->do_upload('gambar'))
		{
			$error =$this->upload->display_errors();
			var_dump($error);
			echo "
					<script>
						alert('$error');
					</script> ";	
		}else{
			echo "
					<script>
						alert('Berhasil');
					</script>
			 ";
		}
	}
}
?>