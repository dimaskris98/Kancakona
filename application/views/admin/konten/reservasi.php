<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
<div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
      	<div class="widget-title">
      		<span class="icon">
      			<i class="icon icon-th-list"></i>
      		</span>
      		<h5>Filter Data</h5>
      	</div>
      	<div class="widget-content nopadding">
      		<form class="form-vertical" action="<?php echo base_url('Admin/reservasi');  ?>" method="get">
      			<div class="row-fluid pad15">
      			<div class="span4 control-group">
      				<label class="control-label">Tanggal :</label>
      				<div class="controls">
      					<input type="text" class="span12" name="tanggal" id="tanggal" placeholder="Tanggal..." autocomplete="off"/>
      				</div>
      			</div>
      			<div class="span4 control-group">
      				<label class="control-label">Bulan :</label>
      				<div class="controls">
      					<select class="span12" name="bulan" >
      						<option>--Pilih Bulan--</option>
      						<option value="1">Januari</option>
      						<option value="2">Februari</option>
      						<option value="3">Maret</option>
      						<option value="4">April</option>
      						<option value="5">Mei</option>
      						<option value="6">Juni</option>
      						<option value="7">Juli</option>
      						<option value="8">Agustus</option>
      						<option value="9">September</option>
      						<option value="10">Oktober</option>
      						<option value="11">November</option>
      						<option value="12">Desember</option>
      					</select>
      				</div>
      			</div>
      			<div class="span4 control-group">
      				<label class="control-label">Tahun :</label>
      				<div class="controls">
      					<select class="span12" name="tahun" >
      					<option>--Pilih Tahun--</option>
      						<?php 
      							$start = 2018;
      							$now = date('Y')+1;
      						    $range = $now-$start;
      						    for($i = 0; $i <= $range ; $i++){
								  	echo "<option value='$start'>$start</option>";
								  	$start++;
								  }
      						    
      						?>
      					</select>
      				</div>
      			</div>
      			
      		</div>
      		
      			<div class="form-actions">
      		<a class="btn btn-warning" href="<?php echo base_url('Admin/reservasi'); ?>">Reset</a>
      		<button type="submit" name="cari" class="btn btn-primary">Cari</button>
      		</div>
      		
      		
      			
      		</form>
      	</div>
      </div>
        <div class="widget-box">
        	<form action="<?php echo base_url('AksiAdminPemesanan/delmulPemesanan')?>" method="post">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Data Pemesanan Tempat</h5>
            <input type="submit" class=" btn btn-mini btn-danger buttons" value="Hapus" />
            
          </div>
          <div class="widget-content nopadding">
        	
            <table class="table table-bordered data-table with-check event">
              <thead>
                <tr>
                  <th class="satu"><i class="icon-resize-vertical"></th>
                  <th class="r-dua">Tanggal</th>
                  <th class="r-dua">Waktu</th>
                  <th class="r-dua">Jumlah</th>
                  <th class="r-tiga">Nama</th>
                  <th class="r-empat">Keterangan</th>
                  <th class="r-lima">Opsi</th>
                </tr>
              </thead>
              <tbody>
              	
              <?php foreach($data as $row){?>
                <tr class="gradeX">
                  <td class="satu"><input type="checkbox" name="no_pemesanan[]" value="<?php echo $row->no_pemesanan ?>" /></td>
                  <td class="r-dua"><?php echo $row->tgl_pemesanan;?></td>
                  <td class="r-dua"><?php echo $row->waktu; ?></td>
                  <td class="r-dua"><?php echo $row->jumlah; ?></td>
                  <td class="r-tiga"><?php echo $row->nama; ?></td>
                  <td class="r-empat"><p><?php echo $row->keterangan; ?></p></td>
                  <td class="r-lima">
                  	<a  href="<?php echo base_url()."Admin/detPemesanan/".$row->no_pemesanan ?>" class="btn btn-mini btn-success">Detail</a>
                  	<a  href="<?php echo base_url()."AksiAdminPemesanan/delPemesanan/".$row->no_pemesanan ?>" class="btn btn-mini btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
                         
              </tbody>
            </table>
            </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    
<script src="<?php echo base_url('assets/admin/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.ui.custom.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/jquery.uniform.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/select2.min.js')?>"></script>  
<script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/matrix.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/matrix.tables.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>

<script type="text/javascript">
	$('#waktu').timepicker();
	  $('#tanggal').datepicker({
	  'format': 'd/m/yyyy',
	  'autoclose': true
	});
</script>