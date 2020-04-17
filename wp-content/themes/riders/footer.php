    <!-- ======= Footer ======= -->
    <footer class="bg-dark text-white">
        <div id="footer-top" class="pt-2">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-3 my-auto">
                        <div id="widget-info">
                            <!-- <img src="https://www.surftotoralillo.cl/wp-content/uploads/2016/10/logo-3.png" class="logotipo img-responsive">                     -->
                            <img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" class="img-fluid logotipo w-50">
                            <div id="telefono-contacto">
                                <h2 class="h4">Teléfonos:</h2 class="h4">
                                <p>+56 9 92597372  /  +56 9 97416149</p>
                            </div>
                            <div id="email-contacto">
                                <h2 class="h4">Email:</h2 class="h4">
                                <p>escueladesurfriders@gmail.com</p>
                            </div>
                            <div id="ubicacion-contacto">
                                <h2 class="h4">Dirección: </h2 class="h4">
                                <p>
                                    4 Esquinas con Avenida del Mar,
                                    La Serena, IV Región, Chile.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 my-auto">
                        <div id="widget-ubicacion">
                            <h2 class="title">Ubicación</h2>
                            <div id="mapa">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.7991470991583!2d-71.28135498439815!3d-29.927684032817012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca24660cc3df%3A0xa95eae2d21f7e89f!2sEscuela%20de%20Surf%20y%20Cafeteria%20Riders!5e0!3m2!1ses!2scl!4v1587096272961!5m2!1ses!2scl" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="widget-contacto">
                            <h2 class="title">Escríbenos</h2>
                            <!-- <div role="form" class="wpcf7" id="wpcf7-f3979-o1" lang="es-ES" dir="ltr"></div> -->
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
        <div id="reportes-olas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" id="titulo-olas">
                        <h3>Reportes de Olas</h3>
                    </div>
                    <div class="col-lg-12 d-flex">
                        <div class="col text-center">
                            <a href="http://es.magicseaweed.com/Derecharcha-Surf-Report/3372/" target="_blank">
                                <img src="https://www.surftotoralillo.cl/wp-content/themes/surftotoralillo/assets/img/logo1.png" />
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="http://www.shoa.cl/nuestros-servicios/mareas#1" target="_blank">
                                <img src="https://www.surftotoralillo.cl/wp-content/themes/surftotoralillo/assets/img/logo2.png" />
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="http://www.windguru.cz/es/index.php?sc=194074&sty=m_spot" target="_blank">
                                <img src="https://www.surftotoralillo.cl/wp-content/themes/surftotoralillo/assets/img/logo3.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBIR -->
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    </footer>
        

    <?php wp_footer(); ?>

    </body>
</html>
