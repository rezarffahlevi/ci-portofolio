<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Portfolio</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="portfolio-categ filter">
							<li class="all active"><a href="#">All</a></li>
							<li class="Web"><a href="#" title="">Web</a></li>
							<li class="Dekstop"><a href="#" title="">Dekstop</a></li>
							<li class="Graphic"><a href="#" title="">Graphic design</a></li>
						</ul>
						<div class="clearfix">
						</div>
						<div class="row">
							<section id="projects">
								<ul id="thumbs" class="portfolio">
									<!-- Item Project and Filter Name -->
									<?php
									foreach ($porto as $key) { ?>
									<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="<?=$key->Category?>" style="max-height: 175px;">
										<!-- Fancybox - Gallery Enabled - Title - Full Image -->
										<!-- Thumb Image and Description -->
											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<a href='<?=$key->Link?>'><?=$key->Title?></a>" href="<?=base_url('assets/'.$key->Folder.$key->FileName)?>">
											<span class="overlay-img"></span>
											<span class="overlay-img-thumb font-icon-plus"></span>
											</a>
										<img src="<?=base_url('assets/'.$key->Folder.$key->FileName)?>" alt="<?=$key->Description?>">
									</li>
									<?php } ?>
									<!-- End Item Project -->
								</ul>
							</section>
						</div>
						<?=$halaman?>
					</div>
				</div>
			</div>
		</section>
