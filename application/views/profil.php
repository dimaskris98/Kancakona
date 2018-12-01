﻿<!DOCTYPE html>
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
            <p style="color:#f6f6f6"><font size="8" ><b>حب القهو من الإيمان</b></font></br>Hubbul Qahwa Minal Iman</p>    
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
</div>
    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Event</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">
            
			<?php foreach($event as $ro){ ?>
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <div class="event-img-div" style="background-image: url('<?php if($ro->nama_gambar!=""){
                  			echo base_url('assets/images/event/'.str_replace(' ','_',$ro->nama_gambar));}?>')">
                  </div>
                  
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary"><?php echo $ro->tanggal; ?></h5>
                    <h5 class="mt-0 h4"><?php echo $ro->judul; ?></h5>
                    <p class="mb-4 event-deskripsi"><?php echo htmlentities($ro->isi); ?></p>
<<<<<<< HEAD
                    <p class="mb-0"><a href="" data-toggle="modal" onclick="tampilEvent(<?php echo $ro->no_post;  ?>)" data-target="#eventModal" class="btn btn-primary btn-sm">Baca Detail</a></p>
=======
                    <p class="mb-0"><a href="<?php echo site_url('href= target="_blank" class="btn btn-primary btn-sm" btn-lg site-animate" data-toggle="modal" data-target="#eventModal"') ?>" >Baca Detail</a></p>
>>>>>>> 9961a9b92a82145c0ac2a13e6451b0aa28fa357b
                  </div>
                </div>
              </div>
              <?php } ?>

              

            </div>
          </div>
          
        </div>
      </div>
    </section>
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
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Minuman</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Kopi</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Makanan</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  
                  <?php
                  	foreach($minuman as $row) { 
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    <?php } ?>

                    
                  </div>
                </div>
             
              
              
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <?php
                  	foreach($kopi as $row) { 
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
              
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <?php
                  	foreach($makanan as $row) {
                  	?>
                  		<div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="<?php echo base_url('assets/images/logokakon.png')?>" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $row->nama; ?></h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp. <?php echo number_format($row->harga) ?></h6>
                      </div>
                    </div>
                    </div>
                    <?php } ?>
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

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Galeri</h2>
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
            <p><img src="<?php echo base_url('assets/images/DSC00587.jpg')?>" alt="" class="img-fluid"></p>
            <p class="text-black">
              Alamat: <br> Jalan Basuki Rahmat No. 230 <br> Tegal Besar, Jember <br> <br>
              Telepon: <br> 081336641191 <br> <br>
              Email: <br> <a href="mailto:kancakonakopijember@gmail.com">kancakonakopijember@gmail.com</a>
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
    <div id="map"></div>
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
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
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
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Nama Depan</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Nama Belakang</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">Jumlah Orang</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 Orang</option>
                        <option value="2">2 Orang</option>
                        <option value="3">3 Orang</option>
                        <option value="4+">4+ Orang</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Nomor Hp</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Tanggal</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Waktu</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Keterangan Tambahan</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
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
                <form action="Awal/auth" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_fname">Username</label>
                      <input type="text" class="form-control" name="username">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="m_lname">Password</label>
                      <input type="password" class="form-control" name="password">
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
                <h3 id="eventJudul">JUDUL EVENT</h3>
                <h5 id="eventTanggal">TANGGAL</h5>
              
              </div>
              <div class="col-lg-12 p-5" style="padding-top: 0px!important">
              	<div id="eventImg" class="modalEventText">            	
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
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
	<script type="text/javascript">
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
		
	</script>
    
  </body>
</html>