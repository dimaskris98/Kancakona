<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>">
<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Detail Pemesanan Tempat </h5>
          <button class=" btn btn-mini btn-info buttons" id="edit">Edit Pemesanan</button>
        </div>
        <div class="widget-content nopadding r-detail-widget">
        <form action="<?php echo base_url('AksiAdminPemesanan/updatePemesanan'); ?>" 
          method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" class="span11" placeholder="Nama Menu" name="no_menu" value="<?php  if(isset($data)){echo $data->no_pemesanan;}?>" />
            <div class="control-group">
              <label class="control-label">Tanggal Pemesanan :</label>
              	  <div class="controls c-kanan a">
              	  	<label class="control-label label-kanan"><?php  if(isset($data)){echo $tgl;}?></label>
              	  </div>          
              <div class="controls i-kanan b">
			  	<input type="text" class="span5" placeholder="Nama Menu" name="tgl" id="tanggal" value="<?php  if(isset($data)){echo $data->tgl_pemesanan;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              	<div class="controls c-kanan a">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->nama;}?></label>	
			  	</div>        
              <div class="controls b">
              <input type="text" class="span5" placeholder="Nama Menu" name="nama" value="<?php  if(isset($data)){echo $data->nama;}?>"/>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Waktu :</label>
              	<div class="controls c-kanan a">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->waktu;} ?></label>	
				  </div>        
              <div class="controls b">
                <input type="text" maxlength="6" class="span5" placeholder="Harga Menu" id='waktu' name="waktu" value="<?php  if(isset($data)){echo $data->waktu;} ?>"/>
              </div>            
            </div>
        	<div class="control-group">
              <label class="control-label">Jumlah :</label>
              	<div class="controls c-kanan a">
					<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->jumlah;} ?> Orang</label>	
				  </div>        
              <div class="controls b">
                <input type="number" max="100" min="1" class="span5" placeholder="Jumlah Orang" id='jumlah' name="jumlah" value="<?php  if(isset($data)){echo $data->jumlah;} ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls c-kanan a">
				<label class="control-label label-kanan"><?php  if($data->email!=""){echo $data->email;}else{echo 'kosong';}?></label>	  	
			  </div>          
              <div class="controls b">
                <input type="text" class="span5" placeholder="Email" name="email" value="<?php  if($data->email!=""){echo $data->email;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Hp :</label>
              <div class="controls c-kanan a">
				<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->no_hp;}?></label>	  	
			  </div>         
              <div class="controls b">
                <input type="text" class="span5" placeholder="Nomor Hp" name="hp" value="<?php  if(isset($data)){echo $data->no_hp;}?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Acara :</label>
              <div class="controls c-kanan a">
				<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->acara;}?></label>	  	
			  </div>         
              <div class="controls b">
                <input type="text" class="span5" placeholder="Nomor Hp" name="hp" value="<?php  if(isset($data)){echo $data->acara;}?>"/>
              </div>
            </div>
        	<div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
                <textarea class="span11" rows="3" id="keterangan" disabled="disabled" name="keterangan" placeholder="Deskripsi Menu ..."> <?php  if(isset($data)){echo $data->keterangan;}?></textarea>
              </div>
            </div>
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          		<h5>Menu Yang Dipesan</h5>
          	</div>
          	<div class="control-group">
              <label class="control-label">Total Item :</label>
              <div class="controls c-kanan">
				<label class="control-label label-kanan"><?php  if(isset($data)){echo $data->total_menu;}?> Item</label>	  	
			  </div>         
            </div>
            <div class="control-group">
              <label class="control-label">Total Harga :</label>
              <div class="controls c-kanan">
				<label class="control-label label-kanan">Rp. <?php  if(isset($data)){echo number_format($data->total_harga,0,'','.');}?></label>	  	
			  </div>         
            </div>
            <div class="control-group">
              <table class="table table-bordered data-table t-detail" style="max-width: 80%">
              <thead>
                <tr>
                  <th class="satu">No.</th>
                  <th class="r-tiga">Nama</th>
                  <th class="r-dua">Harga</th>
                  <th class="r-dua">Jumlah</th>
                  <th class="r-dua">Total Harga</th>
                </tr>
              </thead>
              <tbody>
              	
              <?php $no = 1; foreach($detail as $row){?>
                <tr class="gradeX">
                  <td class="satu"><?php echo $no; ?></td>
                  <td class="rd-tiga"><?php echo $row->nama;?></td>
                  <td class="rd-dua"><?php echo 'Rp. '.$row->harga; ?></td>
                  <td class="rd-dua"><?php echo $row->jumlah_item; ?></td>
                  <td class="rd-dua"><?php echo 'Rp. '.number_format($row->jumlah_harga,0,'','.'); ?></td>
                </tr>
                <?php $no++;} ?>
                         
              </tbody>
            </table>
            </div>
            <div class="form-actions">
              <a href="<?php echo base_url('Admin/reservasi'); ?>" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-success kanan" id="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
</div></div>
<input type="hidden" id="sembunyi" value="0"/>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.uniform.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#waktu').timepicker({
    		'minTime': '2:00pm',
    		'maxTime': '11:30pm'
		});
		$('#tanggal').datepicker({
	  		'format': 'm/d/yyyy',
	  		'autoclose': true
		});
		
		$('.b').hide();
		$('#simpan').hide();
		$('#edit').click(function(){
			$a = $('#sembunyi').val();
			if($a=='0'){
				$('.a').hide();
				$('.b').show();
				$("#kategori").removeAttr('disabled');
				$("#keterangan").removeAttr('disabled');
				$('#sembunyi').val('1');
				$('#simpan').show();
			}else{
				$('.a').show();
				$('.b').hide();
				$("#kategori").attr('disabled','disabled');
				$("#keterangan").attr('disabled','disabled');
				$('#sembunyi').val('0');
				$('#simpan').hide();
			}
			
		})
	})
	
</script>