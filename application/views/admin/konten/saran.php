<div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
        	<form action="<?php echo base_url('AksiAdminEvent/delmulEvent')?>" method="post">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Saran</h5>
            <input type="submit" class=" btn btn-mini btn-danger buttons" value="Hapus" />
            
          </div>
          <div class="widget-content nopadding">
        	
            <table class="table table-bordered data-table with-check event">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></th>
                  <th class="s-dua">Tanggal</th>
                  <th class="s-tiga">Nama</th>
                  <th class="s-tiga">Email</th>
                  <th class="s-nomer">Nomor Handphone</th>
                  <th class="s-empat">Saran</th>
                  <th class="s-lima">Opsi</th>
                </tr>
              </thead>
              <tbody>
              	
              <?php foreach($data as $row){?>
                <tr class="gradeX">
                  <td><input type="checkbox" name="no_saran[]" value="<?php echo $row->no_saran ?>" /></td>
                  <td class="s-dua"><?php echo $row->tanggal;?></td>
                  <td class="s-tiga"><p><?php echo $row->nama; ?></p></td>
                  <td class="s-tiga"><p><?php echo $row->email; ?></p></td>
                  <td class="s-nomer"><p><?php echo $row->nomer; ?></p></td>
                  <td class="s-empat"><p><?php echo $row->saran; ?></p></td>
                  <td class="s-lima">
                  	<a  href="<?php echo base_url()."AksiAdminSaran/delSaran/".$row->no_saran ?>" class="btn btn-mini btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
                         
              </tbody>
            </table>
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
<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script> 
<script src="<?php echo base_url('assets/admin/js/matrix.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/matrix.tables.js')?>"></script>