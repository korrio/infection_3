<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 **/

/* * *******************************************
  pagination
 * ****************************************** */

if ( ! function_exists( 'faded_post_pageing_nav' ) ) :
    function faded_post_pageing_nav() 
    {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}
        $paged = 1;
        if(get_query_var( 'paged' )) {$paged = get_query_var( 'paged' );}
        if(get_query_var( 'page' )) {$paged = get_query_var( 'page' );}
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '<i class="fa fa-angle-double-left"></i>', 'faded' ),
		'next_text' => __( '<i class="fa fa-angle-double-right"></i>', 'faded' ),
	) );
        
        $twPaging = '';
	if ( $links ) :
            $twPaging .= $links;
	endif;
        
        return $twPaging;
    }
endif;


/* * *******************************************
  Prints HTML with meta information for the categories, tags.
 * ****************************************** */
if (!function_exists('faded_entry_meta')) :

    function faded_entry_meta() {
        if ('post' === get_post_type()) {
            $author_avatar_size = apply_filters('faded_author_avatar_size', 49);
            printf('<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>', get_avatar(get_the_author_meta('user_email'), $author_avatar_size), _x('Author', 'Used before post author name.', 'faded'), esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author()
            );
        }

        if (in_array(get_post_type(), array('post', 'attachment'))) {
            faded_entry_date();
        }

        $format = get_post_format();
        if (current_theme_supports('post-formats', $format)) {
            printf('<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>', sprintf('<span class="screen-reader-text">%s </span>', _x('Format', 'Used before post format.', 'faded')), esc_url(get_post_format_link($format)), get_post_format_string($format)
            );
        }

        if ('post' === get_post_type()) {
            faded_entry_taxonomies();
        }

        if (!is_singular() && !post_password_required() && ( comments_open() || get_comments_number() )) {
            echo '<span class="comments-link">';
            comments_popup_link(sprintf(__('Leave a comment<span class="screen-reader-text"> on %s</span>', 'faded'), get_the_title()));
            echo '</span>';
        }
    }

endif;
/* * *******************************************
  Prints HTML with date information for current post.
 * ****************************************** */
if (!function_exists('faded_entry_date')) :

    function faded_entry_date() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string, esc_attr(get_the_date('c')), get_the_date(), esc_attr(get_the_modified_date('c')), get_the_modified_date()
        );

        printf('<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>', _x('Posted on', 'Used before publish date.', 'faded'), esc_url(get_permalink()), $time_string
        );
    }

endif;
/* * *******************************************
  Prints HTML with category and tags for current post.
 * ****************************************** */
if (!function_exists('faded_entry_taxonomies')) :

    function faded_entry_taxonomies() {
        $categories_list = get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'faded'));
        if ($categories_list && faded_categorized_blog()) {
            printf('<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x('Categories', 'Used before category names.', 'faded'), $categories_list
            );
        }

        $tags_list = get_the_tag_list('', _x(', ', 'Used between list items, there is a space after the comma.', 'faded'));
        if ($tags_list) {
            printf('<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x('Tags', 'Used before tag names.', 'faded'), $tags_list
            );
        }
    }

endif;
/* * *******************************************
  Displays an optional post thumbnail.
 * ****************************************** */
if (!function_exists('faded_post_thumbnail')) :

    function faded_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
            </a>

        <?php
        endif; // End is_singular()
    }

endif;

/* * *******************************************
  Displays the optional excerpt.
 * ****************************************** */
if (!function_exists('faded_excerpt')) :

    function faded_excerpt($class = 'entry-summary') {
        $class = esc_attr($class);

        if (has_excerpt() || is_search()) :
            ?>
            <div class="<?php echo ($class); ?>">
                <?php the_excerpt(); ?>
            </div><!-- .<?php echo ($class); ?> -->
            <?php
        endif;
    }

endif;
/* * *******************************************
  Create your own faded_excerpt_more() function to override in a child theme.
 * ****************************************** */
if (!function_exists('faded_excerpt_more') && !is_admin()) :

    function faded_excerpt_more() {
        $link = sprintf('<a href="%1$s" class="more-link">%2$s</a>', esc_url(get_permalink(get_the_ID())), sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'faded'), get_the_title(get_the_ID()))
        );
        return ' &hellip; ' . $link;
    }

    add_filter('excerpt_more', 'faded_excerpt_more');
endif;

/* * *******************************************
  Determines whether blog/site has more than one category.
 * ****************************************** */
if (!function_exists('faded_categorized_blog')) :

    function faded_categorized_blog() {
        if (false === ( $all_the_cool_cats = get_transient('faded_categories') )) {
            // Create an array of all the categories that are attached to posts.
            $all_the_cool_cats = get_categories(array(
                'fields' => 'ids',
                // We only need to know if there is more than one category.
                'number' => 2,
            ));

            // Count the number of categories that are attached to the posts.
            $all_the_cool_cats = count($all_the_cool_cats);

            set_transient('faded_categories', $all_the_cool_cats);
        }

        if ($all_the_cool_cats > 1) {
            // This blog has more than 1 category so faded_categorized_blog should return true.
            return true;
        } else {
            // This blog has only 1 category so faded_categorized_blog should return false.
            return false;
        }
    }

endif;

/* * *******************************************
  Flushes out the transients used in faded_categorized_blog()
 * ****************************************** */

function faded_category_transient_flusher() {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Like, beat it. Dig?
    delete_transient('faded_categories');
}

add_action('edit_category', 'faded_category_transient_flusher');
add_action('save_post', 'faded_category_transient_flusher');

