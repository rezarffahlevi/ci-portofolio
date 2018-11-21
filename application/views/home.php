		<section id="featured">
		<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="flexslider">
							<ul class="slides">
							<?php
							foreach ($sliders as $key) { ?>
								<li>
									<img alt="" src="<?=base_url('assets/img/slides/'.$key->Slider)?>"/>
									<div class="flex-caption">
										<h3><?=$key->Title?></h3>
										<p><?=$key->Description?></p>
										<a href="#" class="btn btn-theme">Support Us</a>
									</div>
								</li>
							<?php } ?>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</section>

		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2><span>SMKI Utama</span> Portofolio</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
						<?php foreach ($more as $value) { ?>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">
										<h4><?=$value->Title?></h4>
										<div class="icon">
											<i class="fa fa-<?=$value->Icon?> fa-3x"></i>
										</div>
										<p>
											<?=$value->Description?>
										</p>

									</div>
									<div class="box-bottom">
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
				<!-- divider -->
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
				<!-- end divider -->
				<!-- Portfolio Projects -->
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent Works</h4>
						<div class="row">
							<section id="projects">
								<ul id="thumbs" class="portfolio">
								<?php foreach ($recent as $r) { ?>
									<!-- Item Project and Filter Name -->
									<li class="col-lg-3 design" data-id="id-0" data-type="web">
										<div class="item-thumbs">
											<!-- Fancybox - Gallery Enabled - Title - Full Image -->
											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?=$r->Title?>" href="<?=base_url('assets/'.$r->Folder.'/'.$r->FileName)?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
											<!-- Thumb Image and Description -->
											<img src="<?=base_url('assets/'.$r->Folder.'/'.$r->FileName)?>" alt="<?=$r->Description?>">
										</div>
									</li>
									<!-- End Item Project -->
								<?php } ?>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>