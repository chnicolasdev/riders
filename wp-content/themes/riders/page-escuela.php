<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>



<main id="main">

    <section id="" class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-md-6 ">
                    <div class="row align-items-center">
                        <div class="col-6 p-4 text-center">
                            <h4>Lorem, ipsum dolor.</h4>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi tempora asperiores aperiam quas velit in sed magnam alias corrupti quidem.</p>
                          
                        </div>
                        <div class="col-6 p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid  ">
                        </div>

                        <div class="col-6 p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid  ">
                        </div>
                        <div class="col-6  p-4 text-center">
                            <h4>Lorem, ipsum.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque architecto amet dignissimos earum perspiciatis natus, qui ipsum illum accusamus recusandae, sequi molestias enim, magni minus dolorum reiciendis similique nisi numquam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid shadow">
                    <!-- <img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen de Quiénes Somos"> -->
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


        </div>
    </section>

</main><!-- End #main -->

<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php get_footer(); ?>