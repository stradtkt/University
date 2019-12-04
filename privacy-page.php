<?php 

/**
 * Template Name: Privacy
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
<section id="privacy-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <?php while(have_posts()) { 
                    the_post();?>
                    <h1 class="text-center mb-5 mt-5">University Privacy Policy</h1>
                   <?php the_content();?>
                <?php } ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="sub-menu">
                    <div class="sub-menu__title">
                        <h3 class="text-center">Sub Pages</h3>
                    </div>
                    <ul>
                        <li><a href="">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>