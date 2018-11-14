 
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Berita Baru</h5>
      </div>
      <div class="widget-content">
      <form action="<?php echo base_url('AksiAdmin/postEvent');?>" method="post" enctype="multipart/form-data">
      <div class="row-fluid" style="margin-top: 0px">
      	<div class="span12">
      		<h5>Attribut</h5>
      	</div>
      </div>
      	<div class="row-fluid">
      	<div class="span4">
      	<div class="control-group">
      		<div class="controls">
      		<label for="jdl">Judul : <input type="text" class="form-control" id="jdl" name="judul"/></label>
      			
      		</div>
      	</div>
      	</div>
      	<div class="span5">
      	<div class="control-group">
      		<div class="controls">
      		<label for="img">Gambar : <input class="joint" type='file' id="imgInp" /></label>
      		</div>
      	</div>
      	</div>
      	<div class="span3">
      		<img style="width:45px" id="blah" src="#" alt="your image" />
      	</div>
      </div>
      <br>
      <h5>Isi Berita</h5>
        <div class="control-group">       
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" placeholder="Masukkan text" name="isi"></textarea>
            </div>
            <div class="row-fluid">
            	<button class="btn btn-danger">KEMBALI</button>
            	<input class="btn btn-info kanan" type="submit" value="SIMPAN"/>
            </div>
            
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap-colorpicker.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/masked.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.uniform.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/select2.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/matrix.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/wysihtml5-0.3.0.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.peity.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/bootstrap-wysihtml5.js')?>"></script>
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