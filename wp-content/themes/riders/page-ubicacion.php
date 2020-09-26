
<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>



<main id="main">

	<section id="" class="">
		<div class="container">


			<div class="row">
				<div class="col-12 col-md-6">
					<div class="col-12 bg-info">
						<div class="col-lg-6 pt-4 pt-lg-0 text-center">
							<h1>Ubicacion</h1>
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
