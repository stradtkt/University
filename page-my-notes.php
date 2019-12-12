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

                <div class="create-note">
                    <h2 class="headline headline--medium">Create New Note</h2>
                    <input class="new-note-title" type="text" placeholder="Title">
                    <textarea class="new-note-body" placeholder="Your Note Here..."></textarea>
                    <span class="submit-note">Create Note</span>
                    <span class="note-limit-message">Note limit reached: delete an existing note to make room for a new one.</span>
                </div>
                
                <ul class="min-list link-list" id="my-notes">
                    <?php while($myNotes->have_posts()) {
                        $myNotes->the_post(); ?>
                            <li data-id="<?php the_ID(); ?>">
                                <input readonly class="note-title-field" value="<?php echo str_replace('Private: ', '', esc_attr(get_the_title())); ?>">
                                <span class="edit-note btn-warning btn-sm text-white"><i class="far fa-edit" aria-hidden="true"></i> Edit</span>
                                <span class="delete-note btn-danger btn-sm"><i class="far fa-trash-alt" aria-hidden="true"></i> Delete</span>
                                <textarea readonly class="note-body-field"><?php echo esc_textarea(get_the_excerpt()); ?></textarea>
                                <span class="update-note btn-primary btn-sm text-white"><i class="fas fa-arrow-right" aria-hidden="true"></i> Save</span>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>







<?php get_footer(); ?>