<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-exclamation-sign"></i> </span>
          <h5>Pengaturan Email </h5>
          <button class=" btn btn-mini btn-info buttons" id="edit-email">Edit Email</button>
        </div>
        <div class="widget-content nopadding r-detail-widget">
          <form action="
          <?php	echo base_url('AksiAdminPengaturan/updateEmail');?>" 
          method="post" class="form-horizontal">
            
            <div class="control-group">
              <label class="control-label">Email Toko 
              <span class="icon tip-top" data-original-title="Email untuk pengirim notifikasi" >
                  <i class="icon icon-info-sign"></i></span> :</label>
              	  <div class="controls c-kanan a-email">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->email_toko;}?></label>
              	  </div>          
              <div class="controls i-kanan b-email">
			  	<input type="text" class="span5" placeholder="Email Toko" name="eToko" value="<?php  if(isset($data)){echo $data->email_toko;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password Email Toko :</label>
              	  <div class="controls c-kanan a-email">
              	  	<label class="control-label label-kanan">---</label>
              	  </div>          
              <div class="controls i-kanan b-email">
			  	<input type="password" class="span5" placeholder="Password Email Toko" name="pToko"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Admin 
              <span class="icon tip-top" data-original-title="Email yang akan dituju sebagai notifikasi" >
                  <i class="icon icon-info-sign"></i></span> :</label>
              	  <div class="controls c-kanan a-email">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->email_admin;}?></label>
              	  	
              	  	
              	  </div>          
              <div class="controls i-kanan b-email">
			  	<input type="text" class="span5" placeholder="Email sebagai notifikasi" name="eAdmin" value="<?php  if(isset($data)){echo $data->email_admin;}?>"/>
              </div>
            </div>
        <div class="form-actions">
              <button type="submit" id="simpan-email" class="btn btn-success kanan">Simpan</button>
        </div>
        </form>
            
        <div class="widget-title"><span class="icon"> <i class="icon-group"></i> </span>
          <h5>Pengaturan Akun </h5>
          <button class=" btn btn-mini btn-info buttons" id="edit-akun">Edit Akun</button>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('AksiAdminPengaturan/updateAkun') ?>" method="post">
            <div class="control-group">
              <label class="control-label">Username 
              <span class="icon tip-top" data-original-title="Sebagai akun untuk masuk halaman admin" >
                  <i class="icon icon-info-sign"></i>
              </span> :</label>
              	  <div class="controls c-kanan a-akun">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->username;}?></label>
              	  </div>          
              <div class="controls i-kanan b-akun">
			  	<input type="text" class="span5" placeholder="Username" name="username" value="<?php  if(isset($data)){echo $data->username;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              	  <div class="controls c-kanan a-akun">
              	  	<label class="control-label label-kanan">---</label>
              	  </div>          
              <div class="controls i-kanan b-akun">
			  	<input type="password" class="span5" placeholder="Password Baru" name="password"/>
              </div>
            </div>
            
            
            <div class="form-actions">
              <button type="submit" id="simpan-akun" class="btn btn-success kanan">Simpan</button>
            </div>
            </form>
        </div>
      </div>
</div></div>
<input type="hidden" id="sembunyi-email" value="0"/>
<input type="hidden" id="sembunyi-akun" value="0"/>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/matrix.js')?>"></script>

<script type="text/javascript">
	$(document).ready(function (){
		$('.b-email').hide();
		$('#simpan-email').hide();
		$('.b-akun').hide();
		$('#simpan-akun').hide();
		
		$('#edit-email').click(function(){
			$a = $('#sembunyi-email').val();
			if($a=='0'){
				$('.a-email').hide();
				$('.b-email').show();
				$('#sembunyi-email').val('1');
				$('#simpan-email').show();
			}else{
				$('.a-email').show();
				$('.b-email').hide();
				$('#sembunyi-email').val('0');
				$('#simpan-email').hide();
			}
			
		})
		
		$('#edit-akun').click(function(){
			$a = $('#sembunyi-akun').val();
			if($a=='0'){
				$('.a-akun').hide();
				$('.b-akun').show();
				$('#sembunyi-akun').val('1');
				$('#simpan-akun').show();
			}else{
				$('.a-akun').show();
				$('.b-akun').hide();
				$('#sembunyi-akun').val('0');
				$('#simpan-akun').hide();
			}
			
		})
		
	})
</script>