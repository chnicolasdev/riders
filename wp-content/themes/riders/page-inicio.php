
<!--=====================================
		SE LLAMA AL HEADER.PHP
=======================================-->
<?php get_header(); ?>



<!-- SECCION SLIDER RENDERS -->
<section id="inicio-riders" style="height:80vh;">
    <div class="col-12 px-0">
        <div id="slider-riders">
            <?php
            $argsSliderInicio = array(
                    'cat' => 2,
                    'type' => 'post',
                    'posts_per_page' => 3,
            );

            query_posts($argsSliderInicio);

            $ultimaSliderInicio = new WP_Query($argsSliderInicio);
            if ( $ultimaSliderInicio->have_posts() ):

                while($ultimaSliderInicio->have_posts() ): $ultimaSliderInicio->the_post(); ?>
                    <div class="img-fluid img-cover h-100 w-100" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>

                    <!-- <h1 class="text-center text-white font-weight-bold"><?php the_title(); ?></h1>
                    <p class="text-center text-white font-weight-bold"><?php the_content(); ?></p> -->

                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- FIN SECCION SLIDER RENDERS -->


<!-- SECCION VIDEOS -->
<section id="inicio_videos" class="bg-primary d-block" style="height:60vh;">
    <div class="row mx-0">
        <div class="col">
            <div class="bg-dark">
                <h2>video 1</h2>
            </div>
        </div>
        <div class="col">
            <div class="bg-dark">
                <h2>video 2</h2>
            </div>
        </div>
        <div class="col">
            <div class="bg-dark">
                <h2>video 3</h2>
            </div>
        </div>
        <div class="col">
            <div class="bg-dark">
                <h2>video 4</h2>
            </div>
        </div>
    </div>
        <?php
        /*
        $argsInicioVideos = array(
                'cat' => 7,
                'type' => 'post',
                'posts_per_page' => 6,
        );

        query_posts($argsInicioVideos);

        $ultimaInicioVideos = new WP_Query($argsInicioVideos);
        if ( $ultimaInicioVideos->have_posts() ):

            while($ultimaInicioVideos->have_posts() ): $ultimaInicioVideos->the_post(); ?>
                <div class="col-md-2">
                    <div class="img-fluid img-contain h-50" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                    <h4 class="text-center grey font-weight-bold"><?php the_content(); ?></h4>

                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        */
        ?>
</section>
<!-- FIN SECCION VIDEOS -->

<?php
/* ?>
<!-- SECCION PRIMERA VISTA -->
<section id="inicio_descubre" style="height:100vh;">
    <div class="row h-100">
        <div class="col-12 my-auto d-flex">



            <div class="col-md-6 my-auto">
                <div class="offset-3 text-left">
                    <h1 class="font-weight-bold text-white display-2">DESCUBRE</h1>
                    <h1 class="font-weight-bold text-white display-2">EL LAGO</h1>
                </div>
                <a href="departamentos" id="btn-ver-departamentos" class="offset-3 btn btn-lg btn-celeste px-5 py-3 col-4">Ver Departamentos</a>
            </div>

            <div class="col-md-6 text-center">
                <img src="<?php bloginfo('template_url') ?>/img/cuadro-inicio.png" class="img-fluid w-75">
            </div>

            <div class="position-absolute offset-md-7 col-md-4 mt-5 pt-5">
                <?php
                $argsTituloInicio = array(
                        'cat' => 1,
                        'type' => 'post',
                        'posts_per_page' => 3,
                );

                query_posts($argsTituloInicio);

                $ultimaTituloInicio = new WP_Query($argsTituloInicio);
                if ( $ultimaTituloInicio->have_posts() ):

                    while($ultimaTituloInicio->have_posts() ): $ultimaTituloInicio->the_post(); ?>
                        <h2 class="pr-5 pt-2 text-center text-white display-4">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="font-weight-bold pr-5 text-center celeste">
                            <?php the_content(); ?>
                        </h3>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- FIN D-FLEX -->

        <div class="offset-md-4 col-md-4 text-center">
            <img src="<?php bloginfo('template_url') ?>/img/bajar.png" class="img-fluid w-25">
        </div>

    </div>
</section>
<!-- FIN SECCION PRIMERA VISTA -->


<!-- SECCION EL PROYECTO -->
<section id="inicio_proyecto" style="height:100vh;">
    <div class="row h-100">
        <div class="col-12 d-flex">

            <div class="col-md-6 my-auto">

                <div class="offset-3 text-left">
                    <?php
                    $argsProyecto = array(
                            'cat' => 3,
                            'type' => 'post',
                            'posts_per_page' => 1,
                    );

                    query_posts($argsProyecto);

                    $ultimaProyecto = new WP_Query($argsProyecto);
                    if ( $ultimaProyecto->have_posts() ):

                        while($ultimaProyecto->have_posts() ): $ultimaProyecto->the_post(); ?>
                            <h1 class="display-4 font-weight-bold grey"><?php the_title(); ?></h1>
                            <p class="pt-3"><?php the_content(); ?></p>
                            <div class="imgblog" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>

            </div>

            <div class="col-md-6 text-center">
                <?php
                        $argsProyecto = array(
                                'cat' => 13,
                                'type' => 'post',
                                'posts_per_page' => 1,
                        );

                        query_posts($argsProyecto);

                        $ultimaProyecto = new WP_Query($argsProyecto);
                        if ( $ultimaProyecto->have_posts() ):

                            while($ultimaProyecto->have_posts() ): $ultimaProyecto->the_post(); ?>
                                <div class="img-fluid h-100 img-contain w-75" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                ?>
            </div>

        </div>

        <div class="col-md-10 offset-md-2">
            <div class="row h-100">
                <?php
                $argsProyecto = array(
                        'cat' => 14,
                        'type' => 'post',
                        'posts_per_page' => 5,
                );

                query_posts($argsProyecto);

                $ultimaProyecto = new WP_Query($argsProyecto);
                if ( $ultimaProyecto->have_posts() ):

                    while($ultimaProyecto->have_posts() ): $ultimaProyecto->the_post(); ?>
                        <div class="col-md-2">
                            <div class="img-fluid img-contain h-50" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                            <h4 class="text-center grey font-weight-bold"><?php the_title(); ?></h4>

                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="offset-md-4 col-md-4 text-center">
            <img src="<?php bloginfo('template_url') ?>/img/bajar.png" class="img-fluid w-25">
        </div>

    </div>

</section>
<!-- FIN SECCION EL PROYECTO -->




<!-- SECCION DEPARTAMENTOS -->
<section id="inicio_departamentos" style="height:60vh;">
    <div class="row h-100">
        <div class="col-12 d-flex">

            <div class="col-md-6 my-auto">

                <div class="offset-3 text-left">
                    <?php
                    $argsDepartamentos = array(
                            'cat' => 5,
                            'type' => 'post',
                            'posts_per_page' => 1,
                    );

                    query_posts($argsDepartamentos);

                    $ultimaDepartamentos = new WP_Query($argsDepartamentos);
                    if ( $ultimaDepartamentos->have_posts() ):

                        while($ultimaDepartamentos->have_posts() ): $ultimaDepartamentos->the_post(); ?>
                            <h1 class="display-4 font-weight-bold grey"><?php the_title(); ?></h1>
                            <p class="pt-3"><?php the_content(); ?></p>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>

                <a href="departamentos" id="btn-ver-departamentos" class="offset-3 btn btn-lg btn-celeste px-5 py-3 col-4">Ver Departamentos</a>

            </div>

            <div class="col-md-6 text-center">
                <?php
                        $argsImgDepartamentos = array(
                                'cat' => 25,
                                'type' => 'post',
                                'posts_per_page' => 1,
                        );

                        query_posts($argsImgDepartamentos);

                        $ultimaImgDepartamentos = new WP_Query($argsImgDepartamentos);
                        if ( $ultimaImgDepartamentos->have_posts() ):

                            while($ultimaImgDepartamentos->have_posts() ): $ultimaImgDepartamentos->the_post(); ?>
                                <div class="img-fluid h-100 img-contain w-75" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                ?>
            </div>

        </div>

        <div class="offset-md-4 col-md-4 text-center">
            <img src="<?php bloginfo('template_url') ?>/img/bajar.png" class="img-fluid w-25">
        </div>

    </div>

</section>
<!-- FIN SECCION DEPARTAMENTOS -->


<!-- SECCION SLIDER INTERIOR -->
<section id="inicio_interior">
    <div class="row">
        <div class="col-12">
            <div id="slider-interior">
                <?php
                $argsInterior = array(
                        'cat' => 6,
                        'type' => 'post',
                        'posts_per_page' => 10,
                );

                query_posts($argsInterior);

                $ultimaInterior = new WP_Query($argsInterior);
                if ( $ultimaInterior->have_posts() ):

                    while($ultimaInterior->have_posts() ): $ultimaInterior->the_post(); ?>
                        <div class="img-fluid img-cover h-100 w-100" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<!-- FIN SECCION SLIDER INTERIOR -->


<!-- SECCION AREAS COMUNES -->
<section id="inicio_areascomunes" style="height:60vh;">
    <div class="row h-100">
        <div class="col-12">
            <h1 class="display-4 font-weight-bold celeste text-uppercase text-center">Áreas Comunes</h1>
        </div>

        <div class="col-md-10 offset-md-2">
            <div class="row h-100">
                <?php
                $argsAreasComunes = array(
                        'cat' => 7,
                        'type' => 'post',
                        'posts_per_page' => 6,
                );

                query_posts($argsAreasComunes);

                $ultimaAreasComunes = new WP_Query($argsAreasComunes);
                if ( $ultimaAreasComunes->have_posts() ):

                    while($ultimaAreasComunes->have_posts() ): $ultimaAreasComunes->the_post(); ?>
                        <div class="col-md-2">
                            <div class="img-fluid img-contain h-50" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                            <h4 class="text-center grey font-weight-bold"><?php the_content(); ?></h4>

                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="offset-md-4 col-md-4 text-center">
            <img src="<?php bloginfo('template_url') ?>/img/bajar.png" class="img-fluid w-25">
        </div>

    </div>

</section>
<!-- FIN SECCION AREAS COMUNES -->
*/ ?>


<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->
<?php get_footer(); ?>
