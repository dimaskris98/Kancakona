<?php $aktif = $this->uri->segment(2);?>

<div id="sidebar"><a href="<?php echo base_url('Admin/')?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($aktif==''){echo "active";} ?>"><a href="<?php echo base_url('Admin/')?>"><i class="icon icon-home"></i> <span>Halaman Awal</span></a> </li>
    <li class="<?php if($aktif=='reservasi'){echo "active";} ?>"><a href="<?php echo base_url('Admin/Reservasi')?>"><i class="icon icon-book"></i> <span>Pesan Tempat</span></a></li>
    <li class="<?php if($aktif=='event'){echo "active";} ?>"> <a href="<?php echo base_url('Admin/Event')?>"><i class="icon icon-tags"></i> <span>Acara</span></a> </li>
    <li class="<?php if($aktif=='menu'){echo "active";} ?>"><a href="<?php echo base_url('Admin/Menu')?>"><i class="icon icon-glass"></i> <span>Menu</span></a></li>
    <li class="<?php if($aktif=='saran'){echo "active";} ?>"><a href="<?php echo base_url('Admin/Saran')?>"><i class="icon icon-envelope-alt"></i> <span>Saran</span></a></li>
    <li class="<?php if($aktif=='pengaturan'){echo "active";} ?>"><a href="<?php echo base_url('Admin/Pengaturan')?>"><i class="icon icon-cog"></i> <span>Pengaturan</span></a></li>
    
    
    <!-- <li> <a href="<?php echo base_url('Admin/Widgets')?>"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li> -->
    <!-- <li><a href="<?php echo base_url('Admin/grid')?>"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
    <!--<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Post</span> <span class="label label-important">3</span></a>
      <ul>
        <li class="<?php if($aktif=='a'){echo "active";} ?>"><a href="form-common.html">Posting Menu</a></li>
        <li class="<?php if($aktif=='d'){echo "active";} ?>"><a href="form-validation.html">Posting Berita</a></li>
        <li class="<?php if($aktif=='d'){echo "active";} ?>"><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>-->
    <!-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li> -->
    
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li> -->
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li> -->
    <!-- <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> -->
  </ul>
</div>
<!--sidebar-menu-->