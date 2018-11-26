<div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Data Post Berita</h5>
            <a href="<?php echo base_url('Admin/newEvent'); ?>"><button  class=" btn btn-mini btn-info buttons">Buat Berita Baru</button></a>
          </div>
          <div class="widget-content nopadding">
        	
            <table class="table table-bordered data-table with-check event">
              <thead>
                <tr>
                  <th class="satu"><i class="icon-resize-vertical"></th>
                  <th class="dua">Tanggal</th>
                  <th class="tiga">Judul</th>
                  <th class="empat">Isi</th>
                  <th class="lima">Opsi</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($data as $row){?>
                <tr class="gradeX">
                  <td class="satu"><input type="checkbox" /></td>
                  <td class="dua"><?php echo $row->tanggal;?></td>
                  <td class="tiga"><p><?php echo $row->judul; ?></p></td>
                  <td class="empat"><p><?php echo htmlentities($row->isi); ?></p></td>
                  <td class="lima">
                  	<a  href="<?php echo base_url()."Admin/editEvent/".$row->no_post ?>" class="btn btn-mini btn-info">Edit</a>
                  	<a  href="" class="btn btn-mini btn-danger">Hapus</button></button>
                  </td>
                </tr>
                <?php } ?>
                                
              </tbody>
            </table>
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