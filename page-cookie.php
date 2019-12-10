<?php

/**
 * Template Name: Cookies
 */
get_header();
$theParent = wp_get_post_parent_id(get_the_ID());
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
            <div class="col-12 col-md-10 offset-md-1">
                <a href="<?php echo get_permalink($theParent); ?>" class="btn btn-primary btn-lg text-white privacy-btn">Back To <?php echo get_the_title($theParent); ?></a>
                <?php while(have_posts()) { 
                    the_post();?>
                    <h1 class="text-center mb-5 mt-5">University Cookie Policy</h1>
                   <?php the_content();?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>