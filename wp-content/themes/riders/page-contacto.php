<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>

<section class="pt-5 bg-contacto contacto pb-0 mb-0">

    <div class="text-center">
        <div class="col-md-7 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Contacto</h1>
        </div>
    </div>


    <div class="container pb-4">
        <div class="row">
            <!-- <div class="col-md-4">
                <img class="img img-fluid img-thumbnail" src="/riders/wp-content/themes/riders/img/bg1.jpg"
                    alt="card image" />
            </div> -->

            <div class="col-md-6 px-4">
                <h1>No te lo pierdas</h1>
                <p>¿Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error incidunt porro veritatis excepturi mollitia? Eos?</p>
                <div id="widget-info">
                    <!-- <img src="https://www.surftotoralillo.cl/wp-content/uploads/2016/10/logo-3.png" class="logotipo img-responsive">                     -->

                    <div id="ubicacion-contacto" class="py-2 ">
                        <h5 class=""><i class="icofont-street-view"></i> Dirección: </h5>
                        <p> 4 Esquinas con Avenida del Mar,
                            La Serena, IV Región, Chile.</p>
                    </div>

                    <div id="telefono-contacto" class="py-0">
                        <h5 class=""><i class="icofont-phone"></i> Teléfonos:</h5>
                        <ul>
                            <li><a href="tel:+56992597372">+56 9 92597372</a></li>
                            <li><a href="tel:+56997416149">+56 9 97416149</a></li>
                        </ul>
                    </div>

                    <div id="email-contacto" class="py-2">
                        <h5 class=""><i class="icofont-email"></i> Email:</h5>
                        <a href="mailto:escueladesurfriders@gmail.com">escueladesurfriders@gmail.com</a>
                    </div>

                    <div id="horario" class="py-2">
                        <h5 class=""><i class="icofont-calendar"></i> Horarios:</h5>
                        <p>Lunes a Domingo desde 09:00-20:00 hrs.</p>
                        <!-- <p>escueladesurfriders@gmail.com</p> -->
                    </div>


                    <div id="redes-sociales" class="">
                        <h5 class=""></i> También síguenos en:</h5>
                        <a href="https://www.instagram.com/escueladesurfriders/" class="ig social-media-icon "><i
                                class="icofont-instagram"></i></a>
                        <a href="https://www.facebook.com/escueladesurfriders" class="fb social-media-icon "><i
                                class="icofont-facebook"></i></a>
                    </div>

                </div>
            </div>

            <div class="col-md-6 p-4 mt-4 bg-dark">
                <div id="widget-contacto">
                    <h2 class="title pb-2 text-center text-light">Escríbenos</h2>
                    <!-- <p class=" text-justify">Puedes escribirnos también, solo rellena el siguiente formulario y envianos
                        tus
                        dudas y te respondemos a la brevedad</p> -->
                    <!-- <div role="form" class="wpcf7" id="wpcf7-f3979-o1" lang="es-ES" dir="ltr"></div> -->
                    <div class="formulario">
                        <?php
                            $argsFormularioContacto = array(
                                    'cat' => 4,
                                    'type' => 'post',
                                    'posts_per_page' => 1,
                            );

                            query_posts($argsFormularioContacto);

                            $ultimaFormularioContacto = new WP_Query($argsFormularioContacto);
                            if ( $ultimaFormularioContacto->have_posts() ):

                                while($ultimaFormularioContacto->have_posts() ): $ultimaFormularioContacto->the_post(); ?>

                        <?php the_content();?>

                        <?php endwhile; ?>
                        <?php endif;
                            wp_reset_postdata();
                            ?>
                    </div>
                </div>
            </div>
        </div>

	</div>
	
    <div class="maps">
		<div class="col-12 text-center px-0">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.7991470991583!2d-71.28135498439815!3d-29.927684032817012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca24660cc3df%3A0xa95eae2d21f7e89f!2sEscuela%20de%20Surf%20y%20Cafeteria%20Riders!5e0!3m2!1ses!2scl!4v1587096272961!5m2!1ses!2scl"
				width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
				tabindex="0"></iframe>
		</div>
	</div>
</section>

<div class="pt-0 mt-0 text-light">
    <div class="col-12 bg-primary text-center d-flex justify-content-center">
        <div class="footer-copyright py-2">
            <p> &copy Copyright <?php echo date('Y');?> | <?php bloginfo( 'name' ); ?> | Todos los
                derechos Reservados</p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>

</html>
<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php /*get_footer(); ?>

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