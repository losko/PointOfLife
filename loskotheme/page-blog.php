<?php get_header(); ?>

    <div class="container-fluid">
    <div class="row">
        <header class="blog-my col-sx-10 col-sm-10 col-md-10 col-lg-10">
            <h1 class="blog-my-h1">Блог</h1>
        </header>
        <div class="col-xs-10">
            <!--PRINT ONLY LAST POST-->
            <?php

                $lastBLog = new WP_Query('type=post&posts_per_page=1');

                if ( $lastBLog->have_posts() ):

                    while ( $lastBLog->have_posts()): $lastBLog->the_post(); ?>

                        <?php get_template_part('post-content', get_post_format()); ?>

                    <?php endwhile;

                endif;

                wp_reset_postdata();

            ?>
            <!--PRINT ALL POST NOT FIRT ONE-->
            <?php

                $args = array(
                    'type' => 'post',
                    'offset' => 1,
                );

                $lastBLog = new WP_Query($args);

                if ( $lastBLog->have_posts() ):

                    while ( $lastBLog->have_posts()): $lastBLog->the_post(); ?>

                        <?php get_template_part('post-content', get_post_format()); ?>

                    <?php endwhile;

                endif;

                wp_reset_postdata();

            ?>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sidebar-my">

            <?php get_sidebar(); ?>

        </div>

        <!--PRINT THE OTHER 2 POSTS NOT THE FIRST ONE-->
       <!-- <div class="col-xs-10">

            <?php
/*
                $args = array(
                    'type' => 'post',
                    'posts_per_page' => 2,
                    'offset' => 1,
                );

                $lastBLog = new WP_Query($args);

                if ( $lastBLog->have_posts() ):

                    while ( $lastBLog->have_posts()): $lastBLog->the_post(); */?>

                        <?php /*get_template_part('post-content', get_post_format()); */?>

                    <?php /*endwhile;

                endif;

                wp_reset_postdata();

            */?>

        </div>-->

        <!--PRINT SIDE BAR-->

        <!--PRINT ONLY TUTORIALS-->
        <!--<div class="col-xs-10">

            <?php
/*
            $lastBLog = new WP_Query('type=post&posts_per_page=-1&category=tutorials');

            if ( $lastBLog->have_posts() ):

                while ( $lastBLog->have_posts()): $lastBLog->the_post(); */?>

                    <?php /*get_template_part('post-content', get_post_format()); */?>

                <?php /*endwhile;

            endif;

            wp_reset_postdata();

            */?>

        </div>-->


    </div>

<?php get_footer(); ?>