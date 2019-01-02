<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Menu Baru </h5>
        </div>
        <div class="widget-content nopadding">
          <form action="
          <?php
      		if($this->uri->segment(2)=="editMenu"){
				echo base_url('AksiAdminMenu/updateMenu');
			}else{
				echo base_url('AksiAdminMenu/simpanMenu');
			}?>" 
          method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Menu :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Menu" name="menu"value="<?php  if(isset($data)){echo $data->nama;}?>" />
                <input type="hidden" class="span11" placeholder="Nama Menu" name="no_menu" value="<?php  if(isset($data)){echo $data->no_menu;}?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kategori</label>
              <div class="controls">
                <select name="kategori" >
                  <option value="kopi" <?php if(isset($data)){ if($data->kategori == "kopi"){echo "selected";}} ?>>kopi</option>
                  <option value="makanan" <?php if(isset($data)){ if($data->kategori == "makanan"){echo "selected";}} ?>>makanan</option>
                  <option value="mojito&soda" <?php if(isset($data)){ if($data->kategori == "mojito&soda"){echo "selected";}} ?>>mojito&soda</option>
                  <option value="teh" <?php if(isset($data)){ if($data->kategori == "teh"){echo "selected";}} ?>>teh</option>
                  <option value="frappe" <?php if(isset($data)){ if($data->kategori == "frappe"){echo "selected";}} ?>>frappe</option>
                  <option value="camilan" <?php if(isset($data)){ if($data->kategori == "camilan"){echo "selected";}} ?>>camilan</option>
                  
                  
                </select>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Harga :</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Harga Menu" name="harga" value="<?php  if(isset($data)){echo $data->harga;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Deskripsi</label>
              <div class="controls">
                <textarea class="span11"  name="deskripsi" placeholder="Deskripsi Menu ..."> <?php  if(isset($data)){echo $data->deskripsi;}?></textarea>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Gambar Menu</label>
              <div class="controls">
                <input type="file" name="gambar"/>
              </div>
            </div>
            <?php if(isset($data)&& $data->nama_gambar!=""){
				echo '
				<div class="control-group">
				<label class="control-label">Gambar :</label>
            		<div class="controls">
      					<img id="blah" alt="Gambar Menu" src="'.base_url("assets/images/menu")."/".str_replace(' ','_',$data->nama_gambar).'" />
			  		</div>
            	</div>';
            } ?>  
            <div class="form-actions">
              <a href="<?php echo base_url('Admin/menu'); ?>" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-success kanan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
</div></div>
</div>
</div>