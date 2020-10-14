    <!-- ======= Footer ======= -->


    <section class="pie text-white pb-0 pt-3" id="contacto">
        <footer id="footer-top" class="pt-2">
            <div class="container-fluid ">
                <div class="row mt-3 ">
                    <div class="col-md-3 px-4 py-3">
                        <h2 class="title pb-4 text-center">Contacto</h2>
                        <div id="widget-info">
                            <!-- <img src="https://www.surftotoralillo.cl/wp-content/uploads/2016/10/logo-3.png" class="logotipo img-responsive">                     -->

                            <div id="ubicacion-contacto" class="">
                                <h5 class=""> <i class="icofont-street-view"></i> Dirección: </h5>
                                <p> 4 Esquinas con Avenida del Mar,
                                    La Serena, IV Región, Chile.</p>
                            </div>
                            <hr>
                            <div id="telefono-contacto" class="">
                                <h5 class=""><i class="icofont-phone"></i> Teléfonos:</h5>
                                <ul>
                                    <li>+56 9 92597372</li>
                                    <li>+56 9 97416149</li>
                                </ul>
                            </div>
                            <hr>
                            <div id="email-contacto" class="pr-5">
                                <h5 class=""><i class="icofont-email"></i> Email:</h5>
                                <a href="mailto:" class=""> escueladesurfriders@gmail.com</a>
                                <!-- <p>escueladesurfriders@gmail.com</p> -->
                            </div>
                            <hr>
                            <div id="horario" class="pr-5">
                                <h5 class=""><i class="icofont-calendar"></i> Horario:</h5>
                                <p>Lunes a Domingo desde 09:00-20:00 hrs.</p>
                                <!-- <p>escueladesurfriders@gmail.com</p> -->
                            </div>
                            <hr>

                            <div id="redes-sociales" class="pr-5">
                                <h5 class=""></i> Síguenos en:</h5>
                                <a href="https://www.instagram.com/escueladesurfriders/" class="social-media-icon"><i
                                        class="icofont-instagram"></i></a>
                                <a href="https://www.facebook.com/escueladesurfriders" class="social-media-icon"><i
                                        class="icofont-facebook"></i></a>
                            </div>
                            <hr>
                        </div>
                        <!-- <div class="row text-center">
                            <div class="col align-self-end">
                                <img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg"
                                    class="img-fluid logotipo w-25">
                            </div>
                        </div> -->
                    </div>

                    <div class="col-md-5 px-2 text-center py-3">
                        <div id="widget-ubicacion">
                            <h2 class="title pb-4">Ubicación</h2>
                            <div id="mapa" class="text-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.7991470991583!2d-71.28135498439815!3d-29.927684032817012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca24660cc3df%3A0xa95eae2d21f7e89f!2sEscuela%20de%20Surf%20y%20Cafeteria%20Riders!5e0!3m2!1ses!2scl!4v1587096272961!5m2!1ses!2scl"
                                    width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-4 pt-3 pb-0">
                        <div id="widget-contacto">
                            <h2 class="title pb-2 text-center ">Escríbenos</h2>
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
                <div class="row">
                    <div class="col-12 bg-primary text-center d-flex justify-content-center">
                        <div class="footer-copyright py-2">
                            <p> &copy Copyright <?php echo date('Y');?> | <?php bloginfo( 'name' ); ?> | Todos los
                                derechos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- SUBIR -->
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    </section>

    <?php wp_footer(); ?>

    </body>

    </html>