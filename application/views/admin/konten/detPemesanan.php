<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Detail Pemesanan Tempat </h5>
          <button class=" btn btn-mini btn-info buttons" id="edit">Edit Pemesanan</button>
        </div>
        <div class="widget-content nopadding">
        <form action="
          <?php
          $link = $this->uri->segment(2);
          if($link == "detPemesanan"){
			   $posisi = TRUE;
			  }
      		?>" 
          method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" class="span11" placeholder="Nama Menu" name="no_menu" value="<?php  if(isset($data)){echo $data->no_pemesanan;}?>" />
            <div class="control-group">
              <label class="control-label">Tanggal Pemesanan :</label>
              	  <div class="controls c-kanan">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $tgl;}?></label>
              	  </div>          
              <div class="controls i-kanan">
			  	<input type="text" class="span5 hide" placeholder="Nama Menu" name="menu"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              	<div class="controls c-kanan">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->nama;}?></label>	
			  	</div>        
              <div class="controls">
              <input type="text" class="span5 hide" placeholder="Nama Menu" name="nama" />
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Waktu :</label>
              	<div class="controls c-kanan">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->waktu;} ?></label>	
				  </div>        
              <div class="controls">
                <input type="text" class="span5 hide" placeholder="Harga Menu" name="waktu"/>
              </div>            
            </div>
        	<div class="control-group">
              <label class="control-label">Jumlah :</label>
              <div class="controls">
                <select class="span4" name="kategori" <?php if($posisi){echo 'disabled';} ?> >
                  <option value="1" <?php if(isset($data)){ if($data->jumlah == 1){echo "selected";}} ?>>1 Orang</option>
                  <option value="2" <?php if(isset($data)){ if($data->jumlah == 2){echo "selected";}} ?>>2 Orang</option>
                  <option value="3" <?php if(isset($data)){ if($data->jumlah == 3){echo "selected";}} ?>>3 Orang</option>
                  <option value="4" <?php if(isset($data)){ if($data->jumlah == 4){echo "selected";}} ?>>4+ Orang</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls c-kanan">
				<label class="control-label label-kanan"><?php  if($data->email!=""){echo $data->email;}else{echo 'kosong';}?></label>	  	
			  </div>          
              <div class="controls">
                <input type="text" class="span5 hide" placeholder="Email" name="waktu"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Hp :</label>
              <div class="controls c-kanan">
				<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->no_hp;}?></label>	  	
			  </div>         
              <div class="controls">
                <input type="text" class="span5 hide" placeholder="Nomor Hp" name="hp"/>
              </div>
            </div>
        	<div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
                <textarea class="span11" rows="3"  name="keterangan" placeholder="Deskripsi Menu ..."> <?php  if(isset($data)){echo $data->keterangan;}?></textarea>
              </div>
            </div>
            <div class="form-actions">
              <a href="<?php echo base_url('Admin/menu'); ?>" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-success kanan">Simpan</button>
            </div>
          </form>
        
        
        
        
          <!--<form action="
          <?php
          $link = $this->uri->segment(2);
          if($link == "detPemesanan"){
			   $posisi = TRUE;
			  }
      		?>" 
          method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" class="span11" placeholder="Nama Menu" name="no_menu" value="<?php  if(isset($data)){echo $data->no_pemesanan;}?>" />
            <div class="control-group">
              <label class="control-label">Tanggal Pemesanan :</label>
              <?php	if($posisi){ ?>
              	  <div class="controls c-kanan">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $tgl;}?></label>
              	  </div>
				  	
			  <?php }else{ ?>           
              <div class="controls">
			  	<input type="text" class="span5" placeholder="Nama Menu" name="menu"/>
              </div>
              <?php } ?>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <?php	if($posisi){ ?>
              	<div class="controls c-kanan">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->nama;}?></label>	
			  	</div>
			  <?php }else{ ?>           
              <div class="controls">
              <input type="text" class="span5" placeholder="Nama Menu" name="nama" />
              </div>
              <?php } ?>
            </div>
           <div class="control-group">
              <label class="control-label">Waktu :</label>
              <?php	if($posisi){ ?>
              	<div class="controls c-kanan">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->waktu;} ?></label>	
				  </div>
			  <?php }else{ ?>           
              <div class="controls">
                <input type="text" class="span5" placeholder="Harga Menu" name="waktu"/>
              </div>
              <?php } ?>
              
            </div>
        	<div class="control-group">
              <label class="control-label">Jumlah :</label>
              <div class="controls">
                <select class="span2" name="kategori" <?php if($posisi){echo 'disabled';} ?> >
                  <option value="1" <?php if(isset($data)){ if($data->jumlah == 1){echo "selected";}} ?>>1 Orang</option>
                  <option value="2" <?php if(isset($data)){ if($data->jumlah == 2){echo "selected";}} ?>>2 Orang</option>
                  <option value="3" <?php if(isset($data)){ if($data->jumlah == 3){echo "selected";}} ?>>3 Orang</option>
                  <option value="4" <?php if(isset($data)){ if($data->jumlah == 4){echo "selected";}} ?>>4+ Orang</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <?php	if($posisi){ ?>
              <div class="controls c-kanan">
				<label class="control-label label-kanan"><?php  if($data->email!=""){echo $data->email;}else{echo 'kosong';}?></label>	  	
			  </div>
			  <?php }else{ ?>           
              <div class="controls">
                <input type="text" class="span5" placeholder="Email" name="waktu"/>
              </div>
              <?php } ?>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Hp :</label>
              <?php	if($posisi){ ?>
              <div class="controls c-kanan">
				<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->no_hp;}?></label>	  	
			  </div>
			  <?php }else{ ?>           
              <div class="controls">
                <input type="text" class="span5" placeholder="Nomor Hp" name="hp"/>
              </div>
              <?php } ?>
            </div>
        	<div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
                <textarea class="span11" rows="3"  name="keterangan" placeholder="Deskripsi Menu ..."> <?php  if(isset($data)){echo $data->keterangan;}?></textarea>
              </div>
            </div>
            <div class="form-actions">
              <a href="<?php echo base_url('Admin/menu'); ?>" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-success kanan">Simpan</button>
            </div>
          </form>-->
        </div>
      </div>
</div></div>
</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#edit').click(function(){
			$('.hide').addClass('show-input');
			
		})
	})
	
</script>