<?php 

/**
 * Template Name: Events
 */
get_header();
?>
<section id="events-header">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-box__events">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <p class="lead text-center"><?php bloginfo('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<section id="events-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                    $events = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'Events'
                    ));
                    while($events->have_posts()) {
                        $events->the_post(); ?>
                        <div class="event">
                            <div class="mr-auto">
                                <div class="date">
                                    <?php 
                                        $eventDate = new DateTime(get_field('event_date'));
                                        echo $eventDate->format('M');
                                    ?>
                                    <br>
                                    <?php 
                                        echo $eventDate->format('d');
                                    ?>
                                    <p><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></p>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="text">
                                    <h3 class="text-center"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>