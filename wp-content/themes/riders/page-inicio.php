
<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
	<div id="heroCarousel" class="px-0 container-fluid carousel carousel-fade" data-ride="carousel">

	
		<?php
		$argsSliderInicio = array(
				'cat' => 2,
				'type' => 'post',
				'posts_per_page' => 4
		);

		query_posts($argsSliderInicio);

		$ultimaSliderInicio = new WP_Query($argsSliderInicio);
		if ( $ultimaSliderInicio->have_posts() ):
			$i=0;
			while($ultimaSliderInicio->have_posts() ): $ultimaSliderInicio->the_post(); 
			// echo $i;
			?>          
				<div class="carousel-item <?php if($i==0){echo "active";}?>" style="background-size:cover;background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');">
					<div class="carousel-container">
						<h2 class="animated fadeInDown">
							<?php the_title(); ?>
						</h2>
						<p class="animated fadeInUp"><?php the_content(); ?></p>
						<!-- <a href="#quienes_somos" class="btn-get-started animated fadeInUp scrollto">¿Quiénes Somos?</a> -->
					</div>
				</div>
			<?php $i++; endwhile; ?>
		<?php endif;
		wp_reset_postdata();
		?>
		
			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

		<svg class="bg-primary hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
			<defs>
				<path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
			</defs>
			<g class="wave1">
				<use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
			</g>
			<g class="wave2">
				<use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
			</g>
			<g class="wave3">
				<use xlink:href="#wave-path" x="50" y="9" fill="#fff">
			</g>
		</svg>

	</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Section ======= -->
	<section id="quienes_somos" class="about">
		<div class="container">

			<?php
			$argsQuienesSomosInicio = array(
					'cat' => 3,
					'type' => 'post',
					'posts_per_page' => 1
			);

			query_posts($argsQuienesSomosInicio);

			$ultimaQuienesSomosInicio = new WP_Query($argsQuienesSomosInicio);
			if ( $ultimaQuienesSomosInicio->have_posts() ):

				while($ultimaQuienesSomosInicio->have_posts() ): $ultimaQuienesSomosInicio->the_post(); ?>   
					
					<div class="section-title pb-lg-0" data-aos="zoom-out">
						<h2>Acerca de Nosotros</h2>
						<p><?php the_title();?></p>
					</div>     
					
					<div class="row content" data-aos="fade-up">
						<div class="col-lg-6 my-auto">
							<p><?php the_content();?></p>
						</div>
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen de Quiénes Somos">
							<!-- <a href="#" class="btn-learn-more">Learn More</a> -->
						</div>
					</div>
					
				   
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata();
			?>
			

			
		</div>
	</section><!-- End About Section -->


	<!-- ======= Cta Section ======= -->
	<section id="clases" class="cta pricing">
		<div class="container">

			<div class="row" data-aos="zoom-out">
				<div class="col-lg-9 text-center text-lg-left">
					<h3 class="clases">Clases</h3>
					<p> Elige la clase que mas te guste.</p>
				</div>
				<!-- <div class="col-lg-3 cta-btn-container text-center">
					<a class="cta-btn align-middle" href="#">Contáctanos</a>
				</div> -->

				<div class="col-lg-4 pt-3 offset-lg-2">
					<div class="box aos-init aos-animate" data-aos="zoom-in">
						<h3>Individual</h3>
						
						<ul>
							<li>Incluye equipo completo.</li>
							<li>Se desarrollan en la playa de La Serena durante todo el año. </li>
							<li>Requisitos: Presencia de alguno de tus padres si eres menor de edad.</li>
							<!-- <li class="na">Pharetra massa</li> -->
							<li class="na">Mínimo 4 personas.</li>
						</ul>

						<h4><sup>$</sup>30.000<span> / 1 Clase</span></h4>

						<div class="btn-wrap">
							<a href="#" class="btn-buy">Contáctanos</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 pt-3">
					<div class="box featured aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
						<h3>Grupal</h3>
							
						<ul>
							
							<li>Incluye equipo completo.</li>
							<li>Se desarrollan en la playa de La Serena durante todo el año. </li>
							<li>Requisitos: Presencia de alguno de tus padres si eres menor de edad.</li>
							<!-- <li class="na">Pharetra massa</li> -->
							<li>Mínimo 4 personas.</li>
						</ul>

						<h4><sup>$</sup>20.000<span> / 1 Persona</span></h4>

						<div class="btn-wrap">
							<a href="#" class="btn-buy">Contáctanos</a>
						</div>
					</div>
				</div>


			</div>

		</div>
	</section><!-- End Cta Section -->



	<!-- ======= Services Section ======= -->
	<section id="videos" class="services">
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Aprende y Comparte</h2>
		  <p>Videos</p>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 py-3">
				<div class="icon-box" data-aos="zoom-in-left">
					<div class="icon">
						<i class="las la-basketball-ball" style="color: #ff689b;"></i>
					</div>
					<h4 class="title"><a href="">Video 1</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
			</div>
		</div>

	  </div>
	</section><!-- End Services Section -->


   
	<!-- ======= Reporte de Olas Section ======= -->
	<section id="reporte" class="faq">
	  
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Condiciones</h2>
		  <p>Reporte de Olas</p>
		</div>

		<div class="row">
			<div class="col-lg-12 d-flex">
				<?php
				$argsReporteOlasFooter = array(
						'cat' => 5,
						'type' => 'post',
						'posts_per_page' => 3
				);

				query_posts($argsReporteOlasFooter);

				$ultimaReporteOlasFooter = new WP_Query($argsReporteOlasFooter);
				if ( $ultimaReporteOlasFooter->have_posts() ):

					while($ultimaReporteOlasFooter->have_posts() ): $ultimaReporteOlasFooter->the_post(); ?>   
					
						<?php

						$titulo = $post->post_title;
						switch ($titulo) 
						{
							case 'Magic Sea Weed':
								?>
								<div class="col text-center my-auto">
									<a href="https://es.magicseaweed.com/Derecharcha-Surf-Report/3372/" target="_blank">
										<img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen Link Externo <?=$titulo;?>" title="Link Externo <?=$titulo;?>">
									</a>
								</div>
								<?php
								break;

							case 'Wind Guru':
								?>
								<div class="col text-center my-auto">
									<a href="https://www.windguru.cz/185199" target="_blank">
										<img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen Link Externo <?=$titulo;?>" title="Link Externo <?=$titulo;?>">
									</a>
								</div>
								<?php
								break;

							case 'SHOA':
								?>
								<div class="col text-center my-auto">
									<a href="http://www.shoa.cl/php/mareas.php" target="_blank">
										<img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen Link Externo <?=$titulo;?>" title="Link Externo <?=$titulo;?>">
									</a>
								</div>
								<?php
								break;
								
						}
						?>
							
				<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata();
				?>
			</div>
		</div>

	  </div>
	</section><!-- End Reporte de Olas Section -->



	<?php /*
	<!-- ======= Features Section ======= -->
	<section id="features" class="features">
	  <div class="container">

		<ul class="nav nav-tabs row d-flex">
		  <li class="nav-item col-3" data-aos="zoom-in">
			<a class="nav-link active show" data-toggle="tab" href="#tab-1">
			  <i class="ri-gps-line"></i>
			  <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
			</a>
		  </li>
		  <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
			<a class="nav-link" data-toggle="tab" href="#tab-2">
			  <i class="ri-body-scan-line"></i>
			  <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
			</a>
		  </li>
		  <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
			<a class="nav-link" data-toggle="tab" href="#tab-3">
			  <i class="ri-sun-line"></i>
			  <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
			</a>
		  </li>
		  <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
			<a class="nav-link" data-toggle="tab" href="#tab-4">
			  <i class="ri-store-line"></i>
			  <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
			</a>
		  </li>
		</ul>

		<div class="tab-content" data-aos="fade-up">
		  <div class="tab-pane active show" id="tab-1">
			<div class="row">
			  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
				<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
				<p class="font-italic">
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				  magna aliqua.
				</p>
				<ul>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
				</ul>
				<p>
				  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
				  culpa qui officia deserunt mollit anim id est laborum
				</p>
			  </div>
			  <div class="col-lg-6 order-1 order-lg-2 text-center">
				<img src="assets/img/features-1.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-2">
			<div class="row">
			  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
				<h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
				<p>
				  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
				  culpa qui officia deserunt mollit anim id est laborum
				</p>
				<p class="font-italic">
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				  magna aliqua.
				</p>
				<ul>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
				</ul>
			  </div>
			  <div class="col-lg-6 order-1 order-lg-2 text-center">
				<img src="assets/img/features-2.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-3">
			<div class="row">
			  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
				<h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
				<p>
				  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
				  culpa qui officia deserunt mollit anim id est laborum
				</p>
				<ul>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
				</ul>
				<p class="font-italic">
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				  magna aliqua.
				</p>
			  </div>
			  <div class="col-lg-6 order-1 order-lg-2 text-center">
				<img src="assets/img/features-3.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-4">
			<div class="row">
			  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
				<h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
				<p>
				  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
				  culpa qui officia deserunt mollit anim id est laborum
				</p>
				<p class="font-italic">
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				  magna aliqua.
				</p>
				<ul>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
				</ul>
			  </div>
			  <div class="col-lg-6 order-1 order-lg-2 text-center">
				<img src="assets/img/features-4.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		</div>

	  </div>
	</section><!-- End Features Section -->


	<!-- ======= Portfolio Section ======= -->
	<section id="portfolio" class="portfolio">
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Portfolio</h2>
		  <p>What we've done</p>
		</div>

		<ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
		  <li data-filter="*" class="filter-active">All</li>
		  <li data-filter=".filter-app">App</li>
		  <li data-filter=".filter-card">Card</li>
		  <li data-filter=".filter-web">Web</li>
		</ul>

		<div class="row portfolio-container" data-aos="fade-up">

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>App 1</h4>
			  <p>App</p>
			  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Web 3</h4>
			  <p>Web</p>
			  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>App 2</h4>
			  <p>App</p>
			  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Card 2</h4>
			  <p>Card</p>
			  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Web 2</h4>
			  <p>Web</p>
			  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>App 3</h4>
			  <p>App</p>
			  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Card 1</h4>
			  <p>Card</p>
			  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Card 3</h4>
			  <p>Card</p>
			  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
			<div class="portfolio-info">
			  <h4>Web 3</h4>
			  <p>Web</p>
			  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
			  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials">
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Testimonials</h2>
		  <p>What they are saying about us</p>
		</div>

		<div class="owl-carousel testimonials-carousel" data-aos="fade-up">

		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
			<h3>Saul Goodman</h3>
			<h4>Ceo &amp; Founder</h4>
		  </div>

		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
			<h3>Sara Wilsson</h3>
			<h4>Designer</h4>
		  </div>

		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
			<h3>Jena Karlis</h3>
			<h4>Store Owner</h4>
		  </div>

		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
			<h3>Matt Brandon</h3>
			<h4>Freelancer</h4>
		  </div>

		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
			<h3>John Larson</h3>
			<h4>Entrepreneur</h4>
		  </div>

		</div>

	  </div>
	</section><!-- End Testimonials Section -->

	<!-- ======= Pricing Section ======= -->
	<section id="pricing" class="pricing">
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Pricing</h2>
		  <p>Our Competing Prices</p>
		</div>

		<div class="row">

		  <div class="col-lg-3 col-md-6">
			<div class="box" data-aos="zoom-in">
			  <h3>Free</h3>
			  <h4><sup>$</sup>0<span> / month</span></h4>
			  <ul>
				<li>Aida dere</li>
				<li>Nec feugiat nisl</li>
				<li>Nulla at volutpat dola</li>
				<li class="na">Pharetra massa</li>
				<li class="na">Massa ultricies mi</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Buy Now</a>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
			<div class="box featured" data-aos="zoom-in" data-aos-delay="100">
			  <h3>Business</h3>
			  <h4><sup>$</sup>19<span> / month</span></h4>
			  <ul>
				<li>Aida dere</li>
				<li>Nec feugiat nisl</li>
				<li>Nulla at volutpat dola</li>
				<li>Pharetra massa</li>
				<li class="na">Massa ultricies mi</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Buy Now</a>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
			<div class="box" data-aos="zoom-in" data-aos-delay="200">
			  <h3>Developer</h3>
			  <h4><sup>$</sup>29<span> / month</span></h4>
			  <ul>
				<li>Aida dere</li>
				<li>Nec feugiat nisl</li>
				<li>Nulla at volutpat dola</li>
				<li>Pharetra massa</li>
				<li>Massa ultricies mi</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Buy Now</a>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
			<div class="box" data-aos="zoom-in" data-aos-delay="300">
			  <span class="advanced">Advanced</span>
			  <h3>Ultimate</h3>
			  <h4><sup>$</sup>49<span> / month</span></h4>
			  <ul>
				<li>Aida dere</li>
				<li>Nec feugiat nisl</li>
				<li>Nulla at volutpat dola</li>
				<li>Pharetra massa</li>
				<li>Massa ultricies mi</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Buy Now</a>
			  </div>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Pricing Section -->


	<!-- ======= Team Section ======= -->
	<section id="team" class="team">
	  <div class="container">

		<div class="section-title" data-aos="zoom-out">
		  <h2>Team</h2>
		  <p>Our Hardworking Team</p>
		</div>

		<div class="row">

		  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
			<div class="member" data-aos="fade-up">
			  <div class="member-img">
				<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
				<div class="social">
				  <a href=""><i class="icofont-twitter"></i></a>
				  <a href=""><i class="icofont-facebook"></i></a>
				  <a href=""><i class="icofont-instagram"></i></a>
				  <a href=""><i class="icofont-linkedin"></i></a>
				</div>
			  </div>
			  <div class="member-info">
				<h4>Walter White</h4>
				<span>Chief Executive Officer</span>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
			<div class="member" data-aos="fade-up" data-aos-delay="100">
			  <div class="member-img">
				<img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
				<div class="social">
				  <a href=""><i class="icofont-twitter"></i></a>
				  <a href=""><i class="icofont-facebook"></i></a>
				  <a href=""><i class="icofont-instagram"></i></a>
				  <a href=""><i class="icofont-linkedin"></i></a>
				</div>
			  </div>
			  <div class="member-info">
				<h4>Sarah Jhonson</h4>
				<span>Product Manager</span>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
			<div class="member" data-aos="fade-up" data-aos-delay="200">
			  <div class="member-img">
				<img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
				<div class="social">
				  <a href=""><i class="icofont-twitter"></i></a>
				  <a href=""><i class="icofont-facebook"></i></a>
				  <a href=""><i class="icofont-instagram"></i></a>
				  <a href=""><i class="icofont-linkedin"></i></a>
				</div>
			  </div>
			  <div class="member-info">
				<h4>William Anderson</h4>
				<span>CTO</span>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
			<div class="member" data-aos="fade-up" data-aos-delay="300">
			  <div class="member-img">
				<img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
				<div class="social">
				  <a href=""><i class="icofont-twitter"></i></a>
				  <a href=""><i class="icofont-facebook"></i></a>
				  <a href=""><i class="icofont-instagram"></i></a>
				  <a href=""><i class="icofont-linkedin"></i></a>
				</div>
			  </div>
			  <div class="member-info">
				<h4>Amanda Jepson</h4>
				<span>Accountant</span>
			  </div>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Team Section -->
   


	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="section-title" data-aos="zoom-out">
				<h2>Contact</h2>
				<p>Contact Us</p>
			</div>

			<div class="row mt-5">
				<div class="col-lg-4" data-aos="fade-right">
					<div class="info">
						<div class="address">
							<i class="icofont-google-map"></i>
							<h4>Location:</h4>
							<p>A108 Adam Street, New York, NY 535022</p>
						</div>

						<div class="email">
							<i class="icofont-envelope"></i>
							<h4>Email:</h4>
							<p>info@example.com</p>
						</div>

						<div class="phone">
							<i class="icofont-phone"></i>
							<h4>Call:</h4>
							<p>+1 5589 55488 55s</p>
						</div>
					</div>
				</div>

				<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
						<div class="form-row">
							<div class="col-md-6 form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validate"></div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
							<div class="validate"></div>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							<div class="validate"></div>
						</div>
						<div class="mb-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<div class="text-center"><button type="submit">Send Message</button></div>
					</form>
				</div><!-- fin col-lg-8 -->
			</div><!-- fin row -->
		</div><!-- fin container -->
	</section><!-- End Contact Section -->
	 */ ?>
	 
</main><!-- End #main -->

<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php get_footer(); ?>
