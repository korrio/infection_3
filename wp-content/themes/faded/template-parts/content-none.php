<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
?>

<div class="col-lg-12 col-sm-12 not-found">
    <div class="blog-post">
        <h3 class="blog-title"><?php _e('Nothing Found', 'faded'); ?></h3>
        <div class="blog-post-body">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>

                <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'faded'), esc_url(admin_url('post-new.php'))); ?></p>

            <?php elseif (is_search()) : ?>

                <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'faded'); ?></p>
                <?php get_search_form(); ?>

            <?php else : ?>

                <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'faded'); ?></p>
                <?php get_search_form(); ?>

            <?php endif; ?>
        </div>
    </div>
</div>

