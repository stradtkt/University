<?php

/**
 * Template Name: FAQ
 */
get_header();
?>

<section id="events-header">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-box__privacy">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <p class="lead text-center"><?php bloginfo('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<section id="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                while(have_posts()) {
                    the_post(); ?>
                    <?php the_content(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>