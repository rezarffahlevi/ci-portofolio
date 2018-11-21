<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<title>SMKI Utama</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<!-- css -->

	<link type="image/x-icon" href="<?=base_url('assets/img/pbp.png')?>" rel="icon" />
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
	<link href="<?=base_url('assets/css/fancybox/jquery.fancybox.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/jcarousel.css" rel="stylesheet')?>" />
	<link href="<?=base_url('assets/css/flexslider.css" rel="stylesheet')?>" />
	<link href="<?=base_url('assets/css/style.css" rel="stylesheet')?>" />

	<!-- Theme skin -->
	<link href="<?=base_url('assets/skins/default.css')?>" rel="stylesheet" />


</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="#">SMKI <span>U</span>tama</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li<?=$active[0]?>><a href="<?=site_url('welcome/')?>">Home</a></li>
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
								<ul class="dropdown-menu">
									<li><a href="typography.html">Typography</a></li>
									<li><a href="components.html">Components</a></li>
									<li><a href="pricingbox.html">Pricing box</a></li>
								</ul>
							</li> -->
							<li<?=$active[1]?>><a href="<?=site_url('portofolio/')?>">Portfolio</a></li>
							<li<?=$active[2]?>><a href="<?=site_url('about/')?>">About</a></li>
							<!-- <li><a href="<?=site_url('contact/')?>">Contact</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<?php $this->load->view($content); ?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
					<strong>SMK Informatika Utama</strong><br>
					 Jl. JCC Komplek PLN P2B & TJBB No.61<br>
					 Krukut - Depok </address>
							<p>
								<i class="icon-phone"></i> (021) 753-721 - (743) 213-232 <br>
								<i class="icon-envelope-alt"></i> smki-utama@smki-gratis.sch.id
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Pages</h5>
							<ul class="link-list">
								<li><a href="<?=site_url('welcome/')?>">Home</a></li>
								<li><a href="<?=site_url('portofolio/')?>">Portfolio</a></li>
								<li><a href="<?=site_url('about/')?>">About</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Latest posts</h5>
							<ul class="link-list">
								<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Flickr photostream</h5>
							<div class="flickr_badge">
								<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; Utama <?php echo date('Y'); ?>. All right reserved.</p>
								<div class="credits">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?=base_url('assets/js/jquery.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.easing.1.3.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.fancybox.pack.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.fancybox-media.js')?>"></script>
	<script src="<?=base_url('assets/js/google-code-prettify/prettify.js')?>"></script>
	<script src="<?=base_url('assets/js/portfolio/jquery.quicksand.js')?>"></script>
	<script src="<?=base_url('assets/js/portfolio/setting.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.flexslider.js')?>"></script>
	<script src="<?=base_url('assets/js/animate.js')?>"></script>
	<script src="<?=base_url('assets/js/custom.js')?>"></script>

  <script>if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); } </script>
</body>

</html>
