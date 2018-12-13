  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Berita Baru</h5>
      </div>
      <div class="widget-content">
      <form action="
      	<?php
      		if($this->uri->segment(2)=="editEvent"){
				echo base_url('AksiAdminEvent/updateEvent');
			}else{
				echo base_url('AksiAdminEvent/postEvent');
			}?>" 
			method="post" enctype="multipart/form-data">
      <div class="row-fluid" style="margin-top: 0px">
      	<div class="span12">
      		<h5>Attribut</h5>
      	</div>
      </div>
      	<div class="row-fluid attr">
      	<div class="span6">
      	<div class="row-fluid">
      		<div class="span2">
      		  <div class="control-group">
      		    <div class="controls">
      		      <label for="jdl">Judul : </label>	
      		    </div>
      	      </div>
      	    </div>
      	    <div class="span10">
      	    	<input type="hidden" value="<?php echo $this->uri->segment(3); ?>" name="no_post" />
      	    	<input type="text" class="form-control" id="jdl" name="judul" value="<?php if(isset($data->judul)){echo $data->judul;}?>"/>
      	    </div>
      	<div class="span2 control-group" style="margin-left: 0px">
      		<div class="controls">
      		<label for="img">Gambar : </label>
      		</div>
      	</div>
      	<div class="span10 control-group">
      			<div class="controls">
      				<input type='file' id="imgInp" name="img" />
      			</div>
      			
      		</div>
      	
      	</div>
      		
      	</div>
      	<div class="span6" id="bdr-ft">
      		<img id="blah" src="<?php 
      		if(isset($data)){
			  	echo base_url('assets/images/event')."/".$data->nama_gambar;
			  }else{
			  	base_url('assets/images/about_img_1.jpg');
			  	} ?>" alt="Foto Anda" />
      	</div>
      </div>
      <br>
      <h5>Isi Berita</h5>
        <div class="control-group">       
            <div class="controls">
              <textarea id="des" class="textarea_editor span12" rows="10" placeholder="Masukkan text....." name="isi" ><?php if(isset($data)){echo $data->isi;}?></textarea>
            </div>
            <div class="row-fluid">
            	<a href="<?php echo base_url('Admin/event'); ?>" class="btn btn-danger">KEMBALI</a>
            	<input class="btn btn-info kanan" type="submit" value="SIMPAN"/>
            </div>
            
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="<?php echo base_url('assets/admin/js/wysihtml5-0.3.0.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap-colorpicker.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/masked.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.uniform.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/select2.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/matrix.form_common.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/matrix.js')?>"></script>

<script src="<?php echo base_url('assets/admin/js/jquery.peity.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/bootstrap-wysihtml5.js')?>"></script>

<script>
$('#edit').wysihtml5({
    toolbar:{ "fa": true, "image": false, "html": false },
    locale: 'zh-TW',
    name: 't-iframe',
    events: {
        load: function(){
            var $body = $(this.composer.element);
            var $iframe = $(this.composer.iframe);
            iframeh = Math.max($body[0].scrollHeight, $body.height()) + 100;
            document.getElementsByClassName('wysihtml5-sandbox')[0].setAttribute('style','height: ' + iframeh +'px !important');
},change: function(){
            var $abody = $(this.composer.element);
            var $aiframe = $(this.composer.iframe);
            aiframeh = Math.max($abody[0].scrollHeight, $abody.height()) + 100;
            document.getElementsByClassName('wysihtml5-sandbox')[0].setAttribute('style','height: ' + aiframeh +'px !important');
        }
    }
});
</script>

<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>
<script type="text/javascript">
	$('.textarea_editor').wysihtml5();
</script>