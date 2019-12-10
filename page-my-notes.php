<?php 

/**
 * Template Name: My Notes
 */
if(!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;
}
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php 
                $myNotes = new WP_Query(array(
                    'post_type' => 'notes',
                    'posts_per_page' => -1,
                    'author' => get_current_user_id()
                )); ?>
                
                <ul class="min-list link-list" id="my-notes">
                    <?php while($myNotes->have_posts()) {
                        $myNotes->the_post(); ?>
                            <li>
                                <input class="note-title-field" value="<?php echo esc_attr(get_the_title()); ?>">
                                <span class="edit-note btn-warning btn-sm text-white"><i class="far fa-edit" aria-hidden="true"></i> Edit</span>
                                <span class="delete-note btn-danger btn-sm"><i class="far fa-trash-alt" aria-hidden="true"></i> Delete</span>
                                <textarea class="note-body-field"><?php echo esc_attr(get_the_excerpt()); ?></textarea>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>







<?php get_footer(); ?>