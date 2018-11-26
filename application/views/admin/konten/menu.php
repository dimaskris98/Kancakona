<div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
        	<form action="<?php echo base_url('AksiAdminMenu/delmulMenu')?>" method="post">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Data Post Berita</h5>
            <input type="submit" class=" btn btn-mini btn-danger buttons" value="Hapus" />
            <a href="<?php echo base_url('Admin/newMenu'); ?>" class=" btn btn-mini btn-info buttons">Buat Berita Baru</a>
            
          </div>
          <div class="widget-content nopadding">
        	
            <table class="table table-bordered data-table with-check event">
              <thead>
                <tr>
                  <th class=""><i class="icon-resize-vertical"></th>
                  <th class="m-dua">Nama</th>
                  <th class="m-tiga">Harga</th>
                  <th class="m-empat">Deskripsi</th>
                  <th class="m-dua">Foto</th>
                  <th class="lima">Opsi</th>
                </tr>
              </thead>
              <tbody>
              	
              <?php foreach($data as $row){?>
                <tr class="gradeX">
                  <td class=""><input type="checkbox" name="no_menu[]" value="<?php echo $row->no_menu ?>" /></td>
                  <td class="dua"><?php echo $row->nama;?></td>
                  <td class="tiga"><p><?php echo $row->harga; ?></p></td>
                  <td class="empat"><p><?php echo $row->deskripsi; ?></p></td>
                  <td class="dua"><p><?php echo $row->gambar; ?></p></td>
                  <td class="lima">
                  	<a  href="<?php echo base_url()."Admin/editMenu/".$row->no_menu ?>" class="btn btn-mini btn-info">Edit</a>
                  	<a  href="<?php echo base_url()."Admin/delMenu/".$row->no_menu ?>" class="btn btn-mini btn-danger">Hapus</a>
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