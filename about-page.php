<?php 

/**
 * Template Name: About
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
<section id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mt-5" style="background-image: url(<?php echo get_theme_file_uri('/images/university-library.jpeg') ?>); width: 100%; height: 100%; background-size: cover;"></div>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="mt-5"><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mt-5"><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="mt-5 mb-3" style="background-image: url(<?php echo get_theme_file_uri('/images/university-teaching.jpeg') ?>); width: 100%; height: 100%; background-size: cover;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mt-3 mb-5" style="background-image: url(<?php echo get_theme_file_uri('/images/university-class.jpeg') ?>); width: 100%; height: 100%; background-size: cover;"></div>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="mt-5"><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
                <h3><strong>Lorem Ipsum</strong></h3>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, accusamus inventore reiciendis consectetur ullam ab.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>