
<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>


<!-- ======= Hero Section ======= -->
<?php /*
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
*/ ?>


<main id="main">

	<section id="" class="">
		<div class="container">


			<div class="row">
				<div class="col-12 col-md-6">
					<div class="col-12 bg-info">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
							<h1>Escuela de Surf</h1>
						</div>
					</div>
					<div class="col-12 bg-warning">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
							<h1>Surf-Camp</h1>
						</div>
					</div>
					<div class="col-12 bg-info">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
							<h1>Galeria</h1>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 bg-warning">
					<div class="col-12">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
							<h1>Reporte de Olas</h1>
							<script type="text/javascript" src="https://www.windfinder.com/wind-cgi/weather.pl?STATIONSNR=cl4&UNIT_WIND=kmh&UNIT_TEMPERATURE=c"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/la_serena?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for La Serena/La Florida</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
						</div>
					</div>
					<div class="col-12 bg-danger">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
							<h1>Agenda tu clase</h1>
						</div>
					</div>
					<div class="col-12 bg-dark">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid w-75" alt="">
						</div>
					</div>
				</div>
			</div>


			<?php
			/*
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
			*/
			?>
			
			
		</div>
	</section>
	 
</main><!-- End #main -->

<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php get_footer(); ?>
