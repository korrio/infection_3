<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business Startup
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="twp-article-wrapper">
            <?php if (!is_single()) { ?>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="post-media">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail('business-startup-normal-post'); ?>
                        </a>
                    </div>
                <?php } ?>
            <div class="entry-content">
                <header class="article-header">
                    <?php if (business_startup_get_option('enable_archive_category') == 1) { ?>
                        <div class="entry-meta">
                            <span class="post-category">
                                <?php business_startup_entry_category(); ?>
                            </span>
                        </div>
                    <?php } ?>

                    <h2 class="entry-title entry-title-big">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <div class="entry-meta">
                        <?php if (business_startup_get_option('enable_archive_post_date') == 1) { ?>
                            <?php business_startup_posted_date_only(); ?>
                        <?php } ?>
                        <?php if (business_startup_get_option('enable_archive_post_by') == 1) { ?>
                            <?php business_startup_posted_by(); ?>
                        <?php } ?>
                    </div><!-- .entry-meta -->
                </header>

                <div class="twp-content-details">
                    <div class="twp-content-wrapper">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="twp-content-footer">
                        <div class="twp-read-more">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html(business_startup_get_option('read_more_button_text')) ?><i class="ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="entry-meta">
                            <?php
                            if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
                                echo '<span class="comments-link"><i class="ion-chatbubbles"></i>';
                                comments_popup_link(esc_html__('comment', 'business-startup'), esc_html__('1 Comment', 'business-startup'), esc_html__('% Comments', 'business-startup'));
                                echo '</span>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-content -->
    <?php } else { ?>
        <div class="entry-content">
            <?php
            $image_values = get_post_meta($post->ID, 'business-startup-meta-image-layout', true);
            if (empty($image_values)) {
                $values = esc_attr(business_startup_get_option('single_post_image_layout'));
            } else {
                $values = esc_attr($image_values);
            }
            if ('no-image' != $values) {
            if ('left' == $values) {
            echo "<div class='image-left'>"; ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('full');
                } elseif ('right' == $values) {
                echo "<div class='image-right'>"; ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('full');
                    } else {
                    echo "<div class='image-full'>"; ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('full');
                        }
                        echo "</a></div>";
                        }
                        ?>
                        <div class="twp-text-align">
                            <?php the_content(); ?>
                        </div>
                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'business-startup'),
                            'after' => '</div>',
                        ));
                        ?>
             </div><!-- .entry-content -->
        <?php } ?>
    </div>
</article><!-- #post-## -->
