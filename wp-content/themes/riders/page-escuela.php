<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>

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
        <div class="carousel-item <?php if($i==0){echo "active";}?>"
            style="background-size:cover;background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');">
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

    <svg class="bg-primary hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
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
    <!-- seccion mision vision o similares -->
    <section id="" class="">
        <div class="container-fluid">
            <div class="row ">
                <div class=" col-sm-12 col-lg-6 ">
                    <div class="row align-items-center ">
                        <div class="col-sm-12 col-md-6 p-4 ">
                            <h4 class="text-center">Lorem, ipsum dolor.</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi tempora asperiores
                                aperiam quas velit in sed magnam alias corrupti quidem.</p>
                        </div>
                        <div class="col-sm-12 col-md-6 d-sm-none d-md-block  p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg3.jpg" class="img-fluid  ">
                        </div>

                        <div class="col-sm-12 col-md-6 d-none d-sm-block p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg4.jpg" class="img-fluid  ">
                        </div>
                        <div class="col-sm-12 col-md-6 p-4 ">
                            <h4 class="text-center">Lorem, ipsum.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque architecto amet
                                dignissimos earum perspiciatis natus, qui ipsum illum accusamus recusandae, sequi
                                molestias enim, magni minus dolorum reiciendis similique nisi numquam.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-12 col-lg-6 d-none d-lg-block p-0 ">
                    <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid">
                    <!-- <img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen de Quiénes Somos"> -->
                </div>
            </div>
        </div>
    </section>
    <!-- seccion caracteristicas o similares -->
    <section class="container bg-light">
        <div class="row align-items-center clearfix">
            <div class="col-12 col-md-4 my-3 p-3 bg-warning ">
                <div class="box text-center">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h4 ">Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                </div>
			</div>
			<div class="col-12 col-md-4 my-3 p-3 bg-warning ">
                <div class="box text-center">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h4 ">Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                </div>
			</div>
			<div class="col-12 col-md-4 my-3 p-3 bg-warning ">
                <div class="box text-center">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h4 ">Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                </div>
			</div>
			<div class="col-12 col-md-4 my-3 p-3 bg-warning ">
                <div class="box text-center">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h4 ">Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                </div>
			</div>
			
			
          
        </div>
    </section>
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
            <img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75"
                alt="Imagen de Quiénes Somos">
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
        </div>
    </div>


    <?php endwhile; ?>
    <?php endif;
			wp_reset_postdata();
			*/
			?>



</main><!-- End #main -->

<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php get_footer(); ?>