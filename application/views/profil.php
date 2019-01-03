<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Website KANCAKONA KOPI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">   
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flipcard.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/mystyle.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylepreloader.css')?>">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo SITENAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">Sejarah</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Event</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <!--<li class="nav-item"><a href="#section-news" class="nav-link">Menu</a></li>-->
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Galeri</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Saran</a></li>
            <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
<div class="parallax"   style="background-image: url(<?php echo base_url('assets/images/w.png')?>);">
    <section class="site-cover"  id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">KANCAKONA KOPI</h1>
            <h5 style="color:#f6f6f6">ngopi <font style="font-size: 6px;vertical-align: middle;">&#9899;</font>  ngaji <font style="font-size: 6px;vertical-align: middle;">&#9899;</font> berbagi</h5>    
            <p><a href="" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Pesan Tempat Sekarang</a></p>
          </div>
        </div>
      </div>
    </section>
</div>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 style="color:#828080" class="site-sub-title">Sekilas Tentang Kami</h4>
            <h2 class="site-primary-title display-4">Kancakona Kopi</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <!--<p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>-->
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="<?php echo base_url('assets/images/aa.jpeg')?>" alt="kancakona" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
<div class="parallax"   style="background-image: url(<?php echo base_url('assets/images/DSC005872.jpg')?>);">
	<!--<div class="caption">
	<p style="color:#f6f6f6"><font size="6" ><i>ngopi <font size="3">&#x26AB</font> ngaji <font size="3">&#x26AB</font> berbagi</i></font></p>
	</div>-->
<!--</div>-->
<section class="site-section" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4 text-white">Event</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-one site-owl">
            
			<?php foreach($event as $ro){ ?>
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0 pad-10">
                  <div class="event-img-div" style="background-image: url('<?php if($ro->nama_gambar!=""){
                  			echo base_url('assets/images/event/'.str_replace(' ','_',$ro->nama_gambar));}?>')">
                  </div>
                  
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary"><?php echo $ro->tanggal; ?></h5>
                    <h5 class="mt-0 h4"><?php echo $ro->judul; ?></h5>
                    <p class="mb-4 event-deskripsi">
                    	<?php echo str_replace($html,"",htmlentities($ro->isi)); ?></p>
                    <p class="mb-0"><a href="" data-toggle="modal" onclick="tampilEvent(<?php echo $ro->no_post;  ?>)" data-target="#eventModal" class="btn btn-primary btn-sm">Baca Detail</a></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
</section>
    </div>
    <!-- END section -->
	

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Menu</h2>
            <div class="row justify-content-center">
              <!--<div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>-->
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Kopi</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Teh</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-mojito-tab" data-toggle="pill" href="#pills-mojito" role="tab" aria-controls="pills-teh" aria-selected="false">Mojito & Soda</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-frappe-tab" data-toggle="pill" href="#pills-frappe" role="tab" aria-controls="pills-frappe" aria-selected="false">Frappe</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-camilan-tab" data-toggle="pill" href="#pills-camilan" role="tab" aria-controls="pills-camilan" aria-selected="false">Camilan</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Makanan</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="owl-carousel  owl-two site-owl">
                <div class="row">
                  
                  <?php $index=0;
                  	foreach($kopi as $row) { 
                  	if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
                  	}
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    <?php  $index++; } ?>

                    
                  </div>
                  </div>
                </div>
             
              
              
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                
                	<div class="owl-carousel  owl-two site-owl">
                	<div class="row">
                  <?php $index = 0;
                  	foreach($teh as $row) { 
                  	if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
					  }
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    
                    <?php
                    $index++; } ?>
                    </div>
              </div>
              </div>
              <div class="tab-pane fade" id="pills-mojito" role="tabpanel" aria-labelledby="pills-mojito-tab">
                
                	<div class="owl-carousel  owl-two site-owl">
                	<div class="row">
                  <?php $index = 0;
                  	foreach($mojito as $row) { 
                  	if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
					  }
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    
                    <?php
                    $index++; } ?>
                    </div>
              </div>
              </div>
              <div class="tab-pane fade" id="pills-frappe" role="tabpanel" aria-labelledby="pills-frappe-tab">
                
                	<div class="owl-carousel  owl-two site-owl">
                	<div class="row">
                  <?php $index = 0;
                  	foreach($frappe as $row) { 
                  	if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
					  }
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    
                    <?php
                    $index++; } ?>
                    </div>
              </div>
              </div>
              <div class="tab-pane fade" id="pills-camilan" role="tabpanel" aria-labelledby="pills-camilan-tab">
                
                	<div class="owl-carousel  owl-two site-owl">
                	<div class="row">
                  <?php $index = 0;
                  	foreach($camilan as $row) { 
                  	if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
					  }
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    
                    <?php
                    $index++; } ?>
                    </div>
              </div>
              </div>
              
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="owl-carousel  owl-two site-owl">
                <div class="row">
                  <?php $index=0;
                  	foreach($makanan as $row) {
                  		if($index%6==0&&$index!=0){
                  		echo '
                  			</div>
                  			<div class="row">
                  			';
                  	}
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p><?php echo $row->deskripsi; ?></p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    <?php $index++; } ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!--<section class="site-section bg-light" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Event</h2>
            <div class="row justify-content-center">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6">
		  <div class="media d-block mb-4 text-center site-media site-animate">
		  	<div class="card">
		  		<div class="front">
		  			<img src="<?php echo base_url('assets/images/offer_2.jpg')?>" alt="Free Template by colorlib.com" class="img-fluid">
		  		</div>
		  		<div class="back">
		  			<div class="details">
		  				<h2 class="mt-0 h4">Merriage Celebrations</h2><br>
                		<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                		<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
		  			</div>
		  		</div>
		  	</div>
		  </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6">
		  <div class="media d-block mb-4 text-center site-media site-animate">
		  	<div class="card">
		  		<div class="front">
		  			<img src="<?php echo base_url('assets/images/offer_2.jpg')?>" alt="Free Template by colorlib.com" class="img-fluid">
		  		</div>
		  		<div class="back">
		  			<div class="details">
		  				<h2 class="mt-0 h4">Merriage Celebrations</h2><br>
                		<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                		<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
		  			</div>
		  		</div>
		  	</div>
		  </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6">
		  <div class="text-center site-media site-animate">
		  	<div class="card">
		  		<div class="front">
		  			<img src="<?php echo base_url('assets/images/offer_2.jpg')?>" alt="Free Template by colorlib.com" class="img-fluid">
		  		</div>
		  		<div class="back">
		  			<div class="details">
		  				<h2 class="mt-0 h4">Merriage Celebrations</h2><br>
                		<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                		<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
		  			</div>
		  		</div>
		  	</div>
		  </div>
          </div>
          
          
          
          div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="<?php echo base_url('assets/images/offer_3.jpg')?>" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Merriage Celebrations</h5>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- END section -->
    <div class="parallax"   style="background-image: url(<?php echo base_url('assets/images/w.png')?>);">
    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4 text-white">Galeri</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
              
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 1.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 1.jpg')?>" alt="gambar 1" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 2.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 2.jpg')?>" alt="gambar 2" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 3.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 3.jpg')?>" alt="gambar 3" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 4.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 4.jpg')?>" alt="gambar 4" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 5.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 5.jpg')?>" alt="gambar 5" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="<?php echo base_url('assets/images/gambar 6.jpg')?>" class="site-thumbnail image-popup">
              <img src="<?php echo base_url('assets/images/gambar 6.jpg')?>" alt="gambar 6" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    </div>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Saran</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Berikan saran anda untuk kemajuan kami</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 site-animate">
            <p><iframe src="https://www.youtube.com/embed/Jljp3y9KBt8" frameborder="0" style="width:100%;min-height:250px"></iframe></p>
            <p class="text-black">
              Alamat: <br> Jalan Basuki Rahmat No. 230 <br> Tegal Besar, Jember <br> <br>
              Telepon: <br> 081336641191 <br> <br>
              Email: <br> <a href="mailto:kancakonakopiiaajember@gmail.com">kancakonakopijember@gmail.com</a>
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7 mb-5 site-animate">
            <form action="<?php echo base_url('AksiAdminSaran/postSaran')?>" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Nama</label>
                <input type="text" class="form-control" name="nama" id="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Saran</label>
                <textarea id="message" name="saran"  cols="30" rows="10" class="form-control" placeholder="Masukkan Saran Anda"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Kirim Saran">
              </div>
            </form>
          </div>
          
          
        </div>
      </div>
    </section>
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.856413307632!2d113.6962672!3d-8.2063644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cb6c0670a70591!2sKanca+Kona+Kopi!5e0!3m2!1sid!2sid!4v1543729686761" width="100%" height="400" frameborder="0" style="border:0"></iframe></div>
    <!-- END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
             <!-- <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>-->
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="https://www.facebook.com/Kancakona-Kopi-Iaa-Jember-717024918628485/"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="https://www.instagram.com/kancakonakopijember/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p> Kancakona Kopi Jember ||  <i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal 
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(<?php echo base_url('assets/images/DSC00275.jpg')?>);"></div>
              </div>
                <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>TUTUP </small><span aria-hidden="true">&times;</span>
                </button>
                <h5 class="text-primary"><?php echo $ro->tanggal; ?></h5>
                    <h5 class="mt-0 h4"><?php echo $ro->judul; ?></h5>
                    <p class="mb-4 event-deskripsi"><?php echo htmlentities($ro->isi); ?></p>
                  
             
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(<?php echo base_url('assets/images/DSC00275.jpg')?>);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>TUTUP </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Pesan Tempat</h1>  
                <form action="<?php echo base_url('Awal/pesan');?>" method="post" id="reservasiForm"">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Nama Lengkap <span style="color: red">*</span></label>
                      <input type="text" class="form-control " id="r_nama" name="nama">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="r_email" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="jumlah">Jumlah Orang <span style="color: red;font-size: 20px">*</span></label>
                      <input type="number" class="form-control" id="r_jumlah" name="jumlah" min="1" max="100">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="r_hp">Nomor Hp <span style="color: red;font-size: 20px">*</span></label>
                      <input type="text" class="form-control" id="r_hp" name="hp" value="+62">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Tanggal <span style="color: red;font-size: 20px">*</span></label>
                      <input type="text" class="form-control" id="r_tanggal" name="tanggal">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Waktu <span style="color: red;font-size: 20px">*</span></label>
                      <input type="text" class="form-control" id="r_waktu" name="waktu" maxlength="6" min="6">
                    </div>
                  </div>
                  
                  <div class="row" style="padding: 10px 0px">
                  	<div class="col-sm-12 form-group">
                  		<div  style=";height: 3px;background-color: #e6e6e6 !important"></div>
                  	</div>
                  </div>
                  
                  <div class="row">
                  	<div class="col-md-12 form-group">
                  		<label for="menu">Pilih Makanan dan Minuman</label>
                  		<a href="" target="_blank" data-toggle="modal" data-target="#pilihModal" id="bPilih" class="btn btn-primary btn-lg btn-block">Pilih Makanan</a>
                  	</div>
                  </div>
                  <div class="row">
                	<div class="col-sm-6">
                		<label class="full btn btn-primary">Nama Menu</label>
                	</div>
                	<div class="col-sm-2">
                		<label class="full btn btn-primary">Harga</label>
                	</div>
                	<div class="col-sm-2">
                		<label class="full btn btn-primary">Jumlah</label>
                	</div>
                	<div class="col-sm-2">
                		<label class="full btn btn-primary">Total</label>
                	</div>
                  </div>
                  
                  <div class="row">
                  	<div class="col-md-12" id="menuKonten">
                  				
                  	</div>
                  </div>
                  <div class="row">
                  	<div class="col-md-8 form-group">
                  		<label class="full btn btn-primary">Total Menu</label>
                  		<input type="text" class="form-control" id="t_menu" disabled="true">
                  		<input type="hidden" class="form-control" id="hMenu" name="tMenu" value="0">
                  	</div>
                  	<div class="col-md-4 form-group">
                  		<label class="full btn btn-primary">Total Harga</label>
                  		<input type="text" class="form-control" id="t_harga" disabled="true">
                  		<input type="hidden" class="form-control" id="hHarga" name="tHarga" value="0">
                  	</div>
                  </div>
                  <div class="row" style="padding: 10px 0px">
                  	<div class="col-sm-12 form-group">
                  		<div  style=";height: 3px;background-color: #e6e6e6 !important"></div>
                  	</div>
                  </div>
                  
                  <div class="row">
                  	<div class="col-md-12 form-group">
                      <label for="m_message">Acara</label>
                      <input type="text" class="form-control" id="r_acara" name="acara">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Keterangan Tambahan</label>
                      <textarea class="form-control" id="r_keterangan" cols="30" rows="7" name="keterangan"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Pesan Sekarang">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>TUTUP </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Login Sebagai Admin</h1>  
                <form action="Awal/auth" method="post" onsubmit="return validateLogin()">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_fname">Username</label>
                      <input type="text" class="form-control" name="username" id="f_user">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="m_lname">Password</label>
                      <input type="password" class="form-control" name="password" id="f_pass">
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="submit" value="Masuk" name="submit" class="btn btn-info" style="width: 100%" id="m_submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL PILIH MAKANAN-->
    <div class="modal fade" id="pilihModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="max-width: 1200px!important" role="document">
        <div class="modal-content">
          <div class="modal-body">
          <form id="formMenu">
            <div class="row centang">
              <div class="col-lg-12">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>TUTUP </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Pilih Menu yang akan ditampilkan</h1>
              </div>
              
              <div class="col-lg-6 mp-5">
              	<div class="row">
              	<div class="col-md-12">
              		<label class="full btn btn-primary">Minuman</label>
              	</div>
              </div>
              	<div class="row" style="overflow-y: auto; max-height: 300px">
              	<div class="col-sm-12">
              		<h5 align="center">Kopi</h5>
              	</div>
              		<?php 
              		foreach($kopi as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
				
				<div class="col-sm-12">
              		<h5 align="center">TEH</h5>
              	</div>
              		<?php 
              		foreach($teh as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
				<div class="col-sm-12">
              		<h5 align="center">Mojito & Soda</h5>
              	</div>
              		<?php 
              		foreach($mojito as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
				<div class="col-sm-12">
              		<h5 align="center">Frappe</h5>
              	</div>
              		<?php 
              		foreach($frappe as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
              	</div> 
              </div>
              
              <div class="col-lg-6 mp-5">
              	<div class="row">
              	<div class="col-lg-12">
              		<label class="full btn btn-primary">Makanan</label>
              	</div>
              </div>
              	<div class="row" style="overflow-y: auto; max-height: 300px">
              	<div class="col-sm-12">
              		<h5 align="center">Camilan</h5>
              	</div>
              	<?php 
              		foreach($camilan as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
              	<div class="col-sm-12">
              		<h5 align="center">Makanan</h5>
              	</div>
              		<?php 
              		foreach($makanan as $row){
				?>
					<div class="col-sm-6">
						<label><?php echo $row->nama ?></label>
					</div>
					<div class="col-sm-4" style="text-align: right">
						<label>Rp. <?php echo number_format($row->harga,0,'','.') ?></label>
					</div>
					<div class="col-sm-1">
						<input type="hidden" value="<?php echo $row->nama ;?>"/>
						<input class="cMenu" type="checkbox" name="menu[]" value="<?php echo $row->no_menu ;?>"/>
						<input type="hidden" value="<?php echo $row->harga ;?>"/>
					</div>
				<?php
					}
				?>
              	</div>
              </div>
              <div class="col-lg-12" style="padding-top:15px ">
              	<button id="simpanMenu" data-dismiss="modal" class="btn btn-primary" style="width: 100%">Simpan</button>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- MODAL EVENT DETAIL -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="max-width: 1000px!important" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 p-5">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>TUTUP </small><span aria-hidden="true">&times;</span>
                </button>
                
              
              </div>
              <div class="col-lg-12 p-5" style="padding-top: 0px!important">
              	<div id="eventImg" class="modalEventText"></div>
                
              </div>
              
              <div class="col-lg-12 p-5" style="padding-top: 0px !important">
              	<div class="row">
              		<div class="col-sm-12">
              			<h3 style="float: left;" id="eventJudul">JUDUL EVENT</h3>
                <h5 class="text-primary" style="float: right" id="eventTanggal">TANGGAL</h5>
              		</div>
              	</div>
              	<p id="eventText"></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loade" class="show fullscreen">
    <!--<svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>-->
    <div class="cup">
		<div class="handle">
	</div>
	</div>
    
    </div>


    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mousewheel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('.cMenu').change(function(){
    			var id = $(this).val(); 
    			var text = $(this).prev().val();
    			var harga =  parseInt($(this).next().val());
    			var jumlah = parseInt($('#hargaHidden').val());
    			
    			var tItems = parseInt($('#hMenu').val());
    			var tHarga = parseInt($('#hHarga').val());
    			
    			if(this.checked){
    			 tItems = tItems+1;
    			 tHarga = tHarga+harga;
    			var konten = "<div class='row' id='"+id+"'>"+
    						"<input type='hidden' name='menu[]' value='"+id+"' />"+
    						"<label class='col-sm-6'>"+text+"</label>"+
    						"<label class='col-sm-2'>Rp. "+harga.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"</label>"+
    						"<div class='col-sm-2'>"+
    						"<input type='hidden' value='"+harga+"' />"+
    						"<input onchange='return totalHarga(this)' class='full jumlah center' type='number' min='1' max='100' name='jml[]' value='1'/>"+
    						"<input class='jmlHarga' type='hidden' name='tot[]' value='"+harga+"' /></div>"+
    						""+
    						"<div class='col-sm-2'><input class='full center total' value='Rp. "+harga.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"' disabled/></div>"+
    						"</div>";
    			$('#menuKonten').append(konten);
    			$('#hMenu').val(tItems);
    			$('#hHarga').val(tHarga);
    			
    			hitungItem();
    			hitungHarga();
				}else{
					
    			tItems = tItems-($('#'+id).find('.jumlah').val())
    			tHarga = tHarga-($('#'+id).find('.jmlHarga').val())
    			$('#'+id).remove();
    			$('#hMenu').val(tItems);
    			$('#hHarga').val(tHarga);
    			
    			hitungItem();
    			hitungHarga();
    			
				}
    		})
    		
    		$('#simpanMenu').click(function(e){
    		})
    	})
    </script>
    <script type="text/javascript">
    	function hitungItem(){
    		var total=0;
			 $("#menuKonten .jumlah").each(function(){
			 	total+=parseInt($(this).val());
			 })
			 $('#hMenu').val(total)
			 $('#t_menu').val(total+" Menu");
		}
		
		function hitungHarga(){
			var harga = 0;
			$('#menuKonten .jmlHarga').each(function(){
				harga += parseInt($(this).val());
			});
			$('#hHarga').val(harga);
			$('#t_harga').val("Rp. "+harga.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."))
		}
    
    	function totalHarga(e){
    			
    		
    			var $parent = $(e).parent();
				var jml = e.value;
				var $harga = $(e).prev().val();
				var $total = $(e).next();
				var $tTampil = $parent.next().children();
				
				$total.val($harga*jml);
				$tTampil.val('Rp. '+$total.val().toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
				
				hitungItem();
				hitungHarga();
    		}
    	function validateLogin(){
			if($("#f_user").val() == ""){
				alert('Mohon isi Username anda !');
				$("#f_user").focus();
				return false;
			}else if($("#f_pass").val() == ""){
				alert('Mohon isi Password anda !');
				$("#f_pass").focus();	
				return false;
			}else{
				return true;
			}
		}
		
		function validatePemesanan(){
			var nama = $('#r_nama');
			var tanggal = $('#r_tanggal');
			var waktu = $('#r_waktu');
			var hp = $('#r_hp');
			var item = $('#hMenu');
			var acara = $('#r_acara');
			var interval = Date.daysBetween(new Date(),new Date(tanggal.val()));
			var number = /^[+62]{3}[0-9]{11}/g;
			
			if(nama.val() == ""){
				alert('Isi data terlebih dahulu !');
				nama.focus();
				return false;
			}else if(tanggal.val() == ""){
				alert('Isi data terlebih dahulu !');
				tanggal.focus();
				return false;
			}else if(parseInt(interval)<7){
				alert('Batas pemesanan adalah satu minggu sebelumnya');
				tanggal.focus();
			}else if(waktu.val() == ""){
				alert('Isi data terlebih dahulu !');
				waktu.focus();
				return false;
			}else if(item.val() == '0'){
				alert('Pilih Menu Makanan anda minimal 1');
				$('#bPilih').focus();
				return false;
			}else if(hp.val() == ""){
				alert('Isi data terlebih dahulu !');
				hp.focus();
				return false;
			}else if(!hp.val().match(number)){
				alert('Pastikan Nomor HP anda benar');
				hp.focus();
				return false;
			}else if(hp.val().length !=14){
				alert('Nomor HP haruslah 14 digit');
				hp.focus();
				return false;
			}else if(acara.val() == ""){
				alert('Isi data terlebih dahulu !');
				hp.focus();
				return false;
			}else{
				return true;
			}
		}
		
		Date.daysBetween = function( date1, date2 ) {
		  //Get 1 day in milliseconds
		  var one_day=1000*60*60*24;

		  // Convert both dates to milliseconds
		  var date1_ms = date1.getTime();
		  var date2_ms = date2.getTime();

		  // Calculate the difference in milliseconds
		  var difference_ms = date2_ms - date1_ms;
		    
		  // Convert back to days and return
		  return Math.round(difference_ms/one_day); 
		}
    </script>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('#reservasiForm').on('submit', function(e) {
		        e.preventDefault();
		        var cek = validatePemesanan();
		        
		        if(cek){
				$.ajax({
		            url : $(this).attr('action'),
		            type: "POST",
		            data: $(this).serialize(),
		            success: function (data) {
		            	if(data=="2"){
							alert('Pemesanan Berhasil');
							$('#reservationModal').modal('toggle');
							clearInput();
						}else if(data == "0"){
							alert('Maaf. Kursi Sedang Penuh');
						}else if(data== '1'){
							alert('Maaf, Pemesanan Gagal');
						}else{
							console.log(data);
						}
		            },
		            error: function (jXHR, textStatus, errorThrown) {
		                alert(errorThrown);
		            }
		        });	
				}else{
				} 
		    });
		});
		
		function clearInput(){
			$('#r_nama').val('');
			$('#r_email').val('');
			$('#r_jumlah').val('');
			$('#r_tanggal').val('');
			$('#r_waktu').val('');
			$('#r_hp').val('');
			$('#menuKonten').empty();
			$('#t_menu').val('');
			$('#hMenu').val('');
			$('#t_harga').val('');
			$('#hHarga').val('');
			$('#r_acara').val('');
			$('#r_keterangan').val('');
			$('.cMenu').prop('checked',false);
		}

    </script>
	<script type="text/javascript">
	$(document).on('hidden.bs.modal', function (event) {
  if ($('.modal:visible').length) {
    $('body').addClass('modal-open');
  }
});
	function tampilEvent(event){
		$.ajax({
			type:"GET",
			url: '<?php echo site_url('Awal/tampilEvent'); ?>/'+event,
			success : function(text){
				var isi = JSON.parse(text)
				$('#eventJudul').html(isi.judul);
				$('#eventTanggal').html(isi.tanggal);
				$('#eventImg').css('background-image', "url('<?php echo base_url('assets/images/event');?>/"+isi.nama_gambar+"')");
				$('#eventText').html(isi.isi);
			}
		})
	};
	
	function tabTampil(event){
		$('.tab-content').children('.active').removeClass('.active');
	}
		
	</script>
    
  </body>
</html>