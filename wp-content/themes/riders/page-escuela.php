<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>
<?php /*?>
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

</section>End Hero
<?php */ ?>
<section class="bg-header mb-0">
    <div class=" p-2 p-md-3 m-md-3 text-center">
        <div class="col-md-7 mx-auto my-5">
            <h1 class="display-3 font-weight-normal">Escuela de Surf</h1>
            <p class="lead font-weight-normal">Ven a vivir una de las mejores experiencias en el mar junto a nosotros,
                escuela de surf Riders</p>
            <!-- <a class="btn btn-outline-primary" href="#">Quiero saber más</a> -->
        </div>
    </div>
</section>
<main id="main">
    <!-- sección misión visión o similares -->
    <section id="" class="nosotros py-0 my-0">
        <div class="container-fluid">
            <div class="row text-center">
                <div class=" col-sm-12 col-lg-6 ">
                    <div class="row align-items-center  ">
                        <div class="col-sm-12 col-md-6 p-4 ">
                            <h4 class="text-center">MISIÓN</h4>
                            <p>Generar una instancia segura para niños y jóvenes en la práctica y desarrollo de
                                actividades deportivas náuticas, acercando de esta forma el deporte, diversión y cultura
                                a las personas de la cuarta región.</p>
                        </div>
                        <div class="col-sm-12 col-md-6 d-sm-none d-md-block  p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid fondo-cuadro  ">
                        </div>

                        <div class="col-sm-12 col-md-6 d-none d-sm-block p-0">
                            <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="fondo-cuadro img-fluid  ">
                        </div>
                        <div class="col-sm-12 col-md-6 p-4 ">
                            <h4 class="text-center">VISIÓN</h4>
                            <p>Masificación del surf y otros deportes, posicionando a la región como atractivo
                                turístico en deportes náuticos.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-12 col-lg-6 d-none d-lg-block p-0 ">
                    <div class="container p-0 m-0">

                        <img src="/riders/wp-content/themes/riders/img/bg1.jpg" class="img-fluid image">
                        <div class="overlay">
                            <div class="text">
                                <h4>Nosotros</h4>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi assumenda quos,
                                    similique provident id corrupti omnis impedit maxime officia quaerat, rem, cum
                                    dolores reprehenderit quis dolorum ut. Vel optio odio, ut alias esse amet. Quas
                                    libero similique dicta illo doloremque, rerum, reprehenderit velit maxime assumenda
                                    ipsam repellat sapiente consectetur odio.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="<?php print_r(get_the_post_thumbnail_url()); ?>" class="img-fluid w-75" alt="Imagen de Quiénes Somos"> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <h2 class="text-uppercase text-center">historia o nosotros</h2>
            <div class="row d-flex  justify-content-center">
                <div class="col-8 align-content-center">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="100%" src="https://www.youtube.com/embed/O8dTFcbs7kM" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>
    <!-- sección características o similares -->
    <!-- <section class="caracteristicas bg-light m-0 pb-3">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-12">
                    <h2 class="text-uppercase">servicios o por el estilo</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class=" col-md-4 mb-4 ">
                    <div class="box p-4 rounded ">
                        <i class="icofont-wind-waves"></i>
                        <h4 class="">Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod. Lorem ipsum dolor sit
                            amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class=" col-md-4 mb-4">
                    <div class="box p-4 rounded">
                        <i class="icofont-wave"></i>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                    </div>
                </div>
                <div class=" col-md-4 mb-4 ">
                    <div class="box p-4 rounded">
                        <i class="icofont-swimmer"></i>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod. Lorem ipsum dolor sit
                            amet.</p>
                    </div>
                </div>
                <div class=" col-md-4 mb-4 ">
                    <div class="box p-4 rounded">
                        <i class="icofont-wind-waves"></i>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                    </div>
                </div>
                <div class=" col-md-4 mb-4">
                    <div class="box p-4 rounded">
                        <i class="icofont-swimmer"></i>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod. Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Laboriosam, sapiente.</p>
                    </div>
                </div>
                <div class=" col-md-4 mb-4">
                    <div class="box p-4 rounded">
                        <i class="icofont-wave"></i>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quod.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--============= SECCION NUESTRO EQUIPO =======================-->
    <section id="team" class="bg-primary">
        <div class="container">
            <h2 class="text-uppercase text-center">nuestro equipo</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="/riders/wp-content/themes/riders/img/bg1.jpg"
                                                alt="card image" />
                                        </p>
                                        <h4 class="card-title">Juan Perez</h4>
                                        <p class="card-text">
                                            instructor de surf categoria niños de 7 a 10 años
                                        </p>
                                        <a href="#" class="btn btn-dark btn-sm"><i class="icofont-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Juan Perez</h4>
                                        <p class="card-text">
                                            Cuenta con mas de 8 años de experiencia en aprendizaje cerficado en... Lorem
                                            ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eveniet porro
                                            voluptates! Accusamus amet, quasi veniam laboriosam recusandae minus ad.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="/riders/wp-content/themes/riders/img/bg1.jpg"
                                                alt="card image" />
                                        </p>
                                        <h4 class="card-title">Roberto Fenandez</h4>
                                        <p class="card-text">
                                            instructor de surf categoria adolecentes 12 a 16 años
                                        </p>
                                        <a href="#" class="btn btn-dark btn-sm"><i class="icofont-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Roberto Fernandez</h4>
                                        <p class="card-text">
                                            Cuenta con mas de 8 años de experiencia en aprendizaje cerficado en... Lorem
                                            ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eveniet porro
                                            voluptates! Accusamus amet, quasi veniam laboriosam recusandae minus ad.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="icofont-instagram text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icofont-facebook text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icofont-facebook-messenger text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="/riders/wp-content/themes/riders/img/bg1.jpg"
                                                alt="card image" />
                                        </p>
                                        <h4 class="card-title">Luis Gonzales</h4>
                                        <p class="card-text">
                                            instructor de surf categoria niños de 7 a 10 años
                                        </p>
                                        <a href="#" class="btn btn-dark btn-sm"><i class="icofont-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Luis Gonzales</h4>
                                        <p class="card-text">
                                            Cuenta con mas de 8 años de experiencia en aprendizaje cerficado en... Lorem
                                            ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eveniet porro
                                            voluptates! Accusamus amet, quasi veniam laboriosam recusandae minus ad.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= FIN SECCION NUESTRO EQUIPO =======================-->
    <!----------------- SECCION PRECIOS ------------------------->
    <section class="precios py-4 mt-0 bg-info-precios" id="precios">
        <div class="container py-4 ">
            <h2 class=" text-center py-4 text-uppercase">precios</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center">
                        <div class="card-header " style="height:80px">
                            <h4 class="font-weight-normal text-uppercase">clase particular</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15.000<small class="text-muted">/Clase</small>
                            </h1>
                            <ul class="mt-3 mb-4 list-unstyled">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>incluye traje y tabla</li>
                                <li>orientación por profesionales</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <!-- Consta de 1 1/2 hrs. donde te pasamos traje,  tabla e Instructor. Ven a vivir una de las mejores experiencias en el mar junto a nosotros, escuela de surf Riders.  -->
                            </ul>
                            <a href="#" class="btn btn-primary btn-lg">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 ">
                    <div class="card shadow text-center">
                        <div class="card-header" style="height:80px">
                            <h4 class="font-weight-normal text-uppercase">clase grupal</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$12.000<small class="text-muted">/Clase</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>clase grupal hasta 30 personas</li>
                                <li>Lorem, ipsum.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                            <button class="btn btn-primary btn-lg">Comprar</button>
                            <!-- <a href="#" class="btn btn-primary btn-lg">Más Información</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center ">
                        <div class="card-header" style="height:80px">
                            <h4 class="font-weight-normal text-uppercase">6 clases + 3 clases prácticas</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$90.000</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>clase grupal hasta 30 personas</li>
                                <li>Lorem, ipsum.</li>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-lg">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------- galeria ------------------>
    <section class="py-4 m-0">
        <div class="container py-4">
            <h2 class="text-center py-4 text-uppercase">videos</h2>
            <div class="row">
                <div class="col-md-4 p-2">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe width="365" height="365" src="https://www.youtube.com/embed/O8dTFcbs7kM" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe width="365" height="365" src="https://www.youtube.com/embed/5KdYCeRoVTA" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe width="365" height="365" src="https://www.youtube.com/embed/5KdYCeRoVTA" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
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

    <div class=" section-title pb-lg-0" data-aos="zoom-out">
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