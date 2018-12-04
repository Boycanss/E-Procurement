<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Eproc Damri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Business Apt a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->

<!-- //<link href="<?= base_url(); ?>css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">-->

<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" media="all" />
<link href="<?php echo base_url('css/style.css'); ?>" type="text/css" rel="stylesheet" media="all" />
<link href="<?php echo base_url('css/font-awesome.min.css'); ?>" type="text/css" rel="stylesheet" media="all" />
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<!--Start-slider-script-->
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
</head>

<?php 
 $uri = $this -> uri -> segment(1); 
 $cek = $this -> session -> userdata('isLogin');
 $lvl = $this -> session -> userdata('akses_level');
    if($uri == ''){ 
        redirect('halaman-utama'); 
    } 
    if($cek != TRUE){
        $this -> session -> set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Silahkan login terlebih dahulu. </h4>
                                                    </div>');
        redirect('menu-login');
    }
 ?>
<!-- Head -->
<body>
<!-- banner -->
	<div class="banner">
		<!-- <div class="container"> -->
			<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?= site_url('halaman-utama'); ?>"><h3 class="agileits-title">DAMRI</h3></a>
                </div>
                <?php $uri = $this -> uri -> segment(1); ?>
                <div id="navbar" class="navbar-collapse collapse">
                    <!--ADMIN USER-->
                    <?php if($lvl == 1){ ?>
                    <ul class="nav navbar-nav">
                        <li <?php if($uri == 'halaman-utama'){echo 'class="active"';} ?>><a href="<?= site_url('halaman-utama'); ?>">Home</a></li>
                        <li <?php if($uri == 'data-barang' || $uri == 'tambah-barang' || $uri == 'rubah-barang'){echo 'class="active"';} ?>><a href="<?= site_url('data-barang'); ?>">Barang</a></li>
                        <li <?php if($uri == 'data-gudang' || $uri == 'tambah-gudang' || $uri == 'rubah-gudang'){echo 'class="active"';} ?>><a href="<?= site_url('data-gudang'); ?>">Gudang</a></li>
                        <li <?php if($uri == 'data-supplier' || $uri == 'tambah-supplier' || $uri == 'rubah-supplier'){echo 'class="active"';} ?>><a href="<?= site_url('data-supplier'); ?>">Supplier</a></li>
                        <li <?php if($uri == 'data-user' || $uri == 'tambah-user' || $uri == 'rubah-user'){echo 'class="active"';} ?>><a href="<?= site_url('data-user'); ?>">User Akses</a></li>
                    </ul>
                    <?php } ?>
                    
                    <!--GUDANG USER-->
                    <?php if($lvl == 2){ ?>
                    <ul class="nav navbar-nav">
                        <li <?php if($uri == 'halaman-utama'){echo 'class="active"';} ?>><a href="<?= site_url('halaman-utama'); ?>">Home</a></li>
                        <li <?php if($uri == 'request-barang' || $uri == 'tambah-request-barang'){echo 'class="active"';} ?>><a href="<?= site_url('request-barang'); ?>">Request Barang</a></li>
                    </ul>
                    <?php } ?>
                    
                    <!--PURCHASING USER-->
                    <?php if($lvl == 3){ ?>
                    <ul class="nav navbar-nav">
                        <li <?php if($uri == 'halaman-utama'){echo 'class="active"';} ?>><a href="<?=site_url('halaman-utama'); ?>">Home</a></li>
                        <li <?php if($uri == 'data-barang' || $uri == 'tambah-barang' || $uri == 'rubah-barang'){echo 'class="active"';} ?>><a href="<?= site_url('data-barang'); ?>">Master Barang</a></li>
                        <li <?php if($uri == 'data-gudang' || $uri == 'tambah-gudang' || $uri == 'rubah-gudang'){echo 'class="active"';} ?>><a href="<?= site_url('data-gudang'); ?>">Gudang</a></li>
                        <li <?php if($uri == 'data-request-barang' || $uri == 'detail-request'){echo 'class="active"';} ?>><a href="<?= site_url('data-request-barang'); ?>">Daftar Request Barang</a></li>
                        <li <?php if($uri == 'data-laporan'){echo 'class="active"';} ?>><a href="<?= site_url('data-laporan'); ?>">Laporan</a></li>
                        <!--<li <?php if($uri == 'data-beli-barang'){echo 'class="active"';} ?>><a href="<?= site_url('data-beli-barang'); ?>">Daftar Harga Supplier</a></li>-->
                    </ul>
                    <?php } ?>
                    
                    <!--SPV USER-->
                    <?php if($lvl == 5){ ?>
                    <ul class="nav navbar-nav">
                        <li <?php if($uri == 'halaman-utama'){echo 'class="active"';} ?>><a href="<?= site_url('halaman-utama'); ?>">Home</a></li>
                        <li <?php if($uri == 'data-laporan'){echo 'class="active"';} ?>><a href="<?= site_url('data-laporan'); ?>">Laporan</a></li>
                    </ul>
                    <?php } ?>

                    <!--SUPPLIER USER-->
                    <?php if($lvl == 6){ ?>
                    <ul class="nav navbar-nav">
                        <li <?php if($uri == 'halaman-utama'){echo 'class="active"';} ?>><a href="<?= site_url('halaman-utama'); ?>">Home</a></li>
                        <li <?php if($uri == 'form-request'){echo 'class="active"';} ?>><a href="<?= site_url('form-request'); ?>">Data Request</a></li>
                    </ul>
                    <?php } ?>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= site_url('sign-out'); ?>">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
		<!-- </div> --></div>
<!-- about -->	<br><br><br>
 <div class="container">

            <?php
            if (!empty($isi)) {
                $this->load->view($isi);
            }
            ?>

        </div>
<!-- about -->

<!-- news -->
<section class="news" id="news">
		<div class="container">
			<div class="heading">
				<h3>News</h3>
			</div>
			<div class="news-grids">
				<div class="col-md-4 news-grid1">
					<img src="images/olu-eletu-13086.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  2/3/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">50</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">20</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3>Vesti id ipsum sit amet sem rutrum ut.</h3>
						<p>Phasellus fringilla faucibus ipsum, id pharetra massa consequat ac. Nullam at tempus urna. Praesent non dapibus.</p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="col-md-4 news-grid1">
					<img src="images/business-437020_960_720.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  1/3/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">70</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">35</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3>Quisque nisi elit, porttitor ut porta id.</h3>
						<p>Nullam sit amet ligula non ante dapibus facilisis. Donec nec sollicitudin lectus. Nam iaculis risus scelerisque lacus. </p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="col-md-4 news-grid1">
					<img src="images/office-photo-2071332_960_720.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  28/2/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">4</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">10</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3> Etiam iaculis metus vitae lectus imperdiet.</h3>
						<p>Ut pulvinar erat in eros sodales tristique. Pellentesque risus dui, tincidunt id tincidunt eget, venenatis id lorem. tincidunt </p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</section>
<!-- news -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title"> Business Apt </h4>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/3.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //modal -->
<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="w3l_head w3l_head1">gallery</h3>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/1.jpg" data-responsive-src="images/1.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/2.jpg" data-responsive-src="images/2.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/5.jpg" data-responsive-src="images/5.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/4.jpg" data-responsive-src="images/4.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/g3.jpg" data-responsive-src="images/g3.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/3.jpg" data-responsive-src="images/3.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/7.jpg" data-responsive-src="images/7.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/8.jpg" data-responsive-src="images/8.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/8.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Lorem ipsum" data-desc="Etiam blandit fermentum laoreet. Nulla purus." data-src="images/10.jpg" data-responsive-src="images/10.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/10.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Lorem ipsum </h4>
									<p class="tagline overtext"> Etiam blandit fermentum laoreet. Nulla purus. </p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->
<!-- Stats -->
	<div class="stats w3layouts agileits" id="stats">
		<div class="container">

			<h3>STATS</h3>

			<div class="stats-info w3layouts agileits">
				<div class="col-md-3 col-sm-3 w3layouts agileits stats-grid stats-grid-1">
					<div class="stats-img w3layouts agileits">
						<i class="fa fa-hand-paper-o" aria-hidden="true"></i>
					</div>
					<div class='numscroller w3layouts agileits numscroller-big-bottom' data-slno='1' data-min='0' data-max='1185' data-delay='5' data-increment="3">1185</div>
					<p>People support</p>
				</div>
				<div class="col-md-3 col-sm-3 w3layouts agileits stats-grid stats-grid-2">
					<div class="stats-img w3layouts agileits">
					<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
					</div>
					<div class='numscroller w3layouts agileits numscroller-big-bottom' data-slno='1' data-min='0' data-max='195' data-delay='5' data-increment="3">195</div>
					<p>Design Creativity</p>
				</div>
				<div class="col-md-3 col-sm-3 w3layouts agileits stats-grid stats-grid-3">
					<div class="stats-img w3layouts agileits">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<div class='numscroller w3layouts agileits numscroller-big-bottom' data-slno='1' data-min='0' data-max='295' data-delay='5' data-increment="3">295</div>
					<p>Satisfied Clients</p>
				</div>
				<div class="col-md-3 col-sm-3 w3layouts agileits stats-grid stats-grid-4">
					<div class="stats-img w3layouts agileits">
						<i class="fa fa-thumbs-up" aria-hidden="true"></i>
					</div>
					<div class='numscroller w3layouts agileits numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='5' data-increment="3">190</div>
					<p>Completed projects</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
	<!-- //Stats -->
	
	<!-- contact -->
	<div id="contact" class="contact jarallax">
		<div class="container">
			<h3 class="agileits-title">Contact Us</h3>
			<div class="clearfix"></div>
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-6 drop-pad sign-gd-two">
					<h3>Contact Info</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.Perspiciatis unde omnis iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem.</p>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><strong>Address</strong> : Park Avenue, Tin Gardens, <span>Paris.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><strong>Email</strong>  : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><strong>Phone </strong> : +027 654 321</li>
					</ul>
				</div>
				<div class="col-md-6 login-pad">
					<h3>Drop Us A Message</h3>
					<form action="#" method="get" name="sentMessage" id="contactForm" novalidate>
					<div class="control-group form-group">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
						<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i>Subscribe to our Newsletter</label>
						<div class="control-group form-group">
							<div class="controls">
								<textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary">Send Message</button>
					<div class="clearfix"></div>	
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	</div>
	<!-- //contact -->
<!-- Map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722640373!2d2.27751730651281!3d48.85883773940494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1488544982675"></iframe>
	</div>
<!-- //Map -->
<!-- Footer -->
<div class="footer w3layouts agileits">
	<div class="container">
		<div class="col-md-3 col-sm-3 w3layouts agileits footer-grid footer-grid-1">
			<ul>
				<li class="w3layouts agileits"><a class="scroll w3layouts agileits" href="#about">About</a></li>
				<li class="w3layouts agileits"><a class="scroll w3layouts agileits" href="#news">News</a></li>
				<li class="w3layouts agileits"><a class="scroll w3layouts agileits" href="#gallery">gallery</a></li>
				<li class="w3layouts agileits"><a class="scroll w3layouts agileits" href="#stats">stats</a></li>
				<li class="w3layouts agileits"><a class="scroll w3layouts agileits" href="#contact">contact</a></li>
			</ul>
		</div>
		
		<div class="col-md-3 col-sm-3 w3layouts agileits footer-grid footer-grid-2">
			<ul>
				<li class="w3layouts agileits">CREATIVE DESIGN</li>
				<li class="w3layouts agileits">BEST PROJECTS</li>
				<li class="w3layouts agileits">FULL SUPPORT</li>
				<li class="w3layouts agileits">BUSINESS GUARENTEED</li>
			</ul>
		</div>

		<div class="col-md-6 col-sm-6 footer-grid w3layouts agileits footer-grid-3">
			<p>Subscribe to our newsletter and we will inform you about our new promotions.</p>
			<form action="#" method="post">
				<input type="email" placeholder="Email" name="Email" required="">
				<input type="submit" value="Subscribe">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- //Footer -->
<!-- copyright -->
	<div class="copyright w3layouts agileits">
		<p>&copy; 2017 Business Apt. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
	</div>
<!-- copyright -->
	
<!-- Slider-JavaScript -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider, #slider1").responsiveSlides({
				auto: true,
				nav: true,
				speed: 1500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
<!-- //Slider-JavaScript -->

<!-- Slide-To-Top JavaScript -->
		<script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
					containerID: 'toTop',
					containerHoverID: 'toTopHover',
					scrollSpeed: 100,
					easingType: 'linear',
				};
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	<a href="#home" id="toTop" class="stuoyal3w scroll stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- //Slide-To-Top JavaScript -->

<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
										
				});
		</script>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
			});
		</script>
	<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->	

		
		
<!-- js files for contact from validation -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>
<!-- //js files for contact from validation -->
	

<!-- Skills-why-Scroller-Effect-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Skills-why-Scroller-Effect-JavaScript -->

</body>
</html>