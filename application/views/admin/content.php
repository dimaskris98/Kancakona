<!--main-container-part-->
<?php 
$link = $this->uri->segment(2);

?>
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?php echo base_url('Admin') ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <?php
    if($link=="Event"){
		echo '<a href="'.base_url('Admin/Event').'" title="Kembali ke Acara" class="tip-bottom"> Acara</a>';
	}elseif($link=="Menu"){
		echo '<a href="'.base_url('Admin/Menu').'" title="Kembali ke Menu" class="tip-bottom"> Menu</a>';
	}elseif($link=="newEvent"){
		echo '<a href="'.base_url('Admin/Event').'" title="Kembali ke Acara" class="tip-bottom"> Acara</a>';
		echo '<a href="'.base_url('Admin/newEvent').'" title="Kembali ke Acara Baru" class="tip-bottom"> Acara Baru</a>';
	}elseif($link=="newMenu"){
		echo '<a href="'.base_url('Admin/Menu').'" title="Kembali ke Menu" class="tip-bottom"> Menu</a>';
		echo '<a href="'.base_url('Admin/newMenu').'" title="Kembali ke Menu Baru" class="tip-bottom"> Menu Baru</a>';
	}
    ?>  
    
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
 

<!--end-main-container-part-->