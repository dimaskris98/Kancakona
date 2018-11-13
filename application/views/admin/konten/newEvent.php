 
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
      	<div class="span3">
      	<div class="control-group">
      		<label for="jdl">Judul :</label>
      		<div class="controls">
      			<input type="text" class="form-control" id="jdl" name="judul"/>
      		</div>
      	</div>
      	</div>
      	<div class="span3">
      	<div class="control-group">
      		<label for="img">Gambar :</label>
      		<div class="controls">
      			<input type="file" id="img" name="gambar" />
      		</div>
      	</div>
      	</div>
      	<div class="span6">
      		<img src="" alt="Gambar" class="img-fluid"/>
      	</div>
      </div>
      <br>
      <h5>Isi Berita</h5>
        <div class="control-group">
        
          
            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" placeholder="Masukkan text" name="isi"></textarea>
            </div>
            <input class="btn btn-info" type="submit"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

