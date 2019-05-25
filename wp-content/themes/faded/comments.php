<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<div id="comments" class="comments-area">
    <div class="title-comment">
        <?php if (have_comments()) : ?>
            <h4 class="commentTitle"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'faded' ), number_format_i18n( get_comments_number() ) ); ?></h4>
        </div>
        <?php
        wp_list_comments(array('callback' => 'faded_comment_listing','per_page' => 100));  
        paginate_comments_links(); 
        ?>
    <?php endif; // Check for have_comments(). ?>
    <?php
    $fields = array(
        'author' => '<div class="form-group col-sm-6">' .
        '<input id="blog-submit-name" name="author" type="text" placeholder="Name" class="form-inp" value="' . esc_attr($commenter['comment_author']) . '" size="30" /></div>',
        'email' => '<div class="form-group col-sm-6">' .
        '<input id="blog-submit-email" name="email" type="text" placeholder="Email" class="form-inp" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes" /></div>',
    );
    $defaults = array(
        'fields' => $fields,
        'comment_field' => '<div class="form-group col-sm-12"><textarea id="comment" class="form-message" name="comment" placeholder="comment" rows="8"  aria-required="true" required="required"></textarea></div>',
        /** This filter is documented in wp-includes/link-template.php */
        'must_log_in' => '',
        /** This filter is documented in wp-includes/link-template.php */
        'logged_in_as' => '',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'class_form' => 'contactformcPage2 commentForm',
        'class_submit' => 'faded_btn hover_black',
        'name_submit' => 'submit',
        'title_reply' => esc_html__('Leave a comment', 'faded'),
        'title_reply_to' => esc_html__('Leave a comment to %s', 'faded'),
        'title_reply_before' => '<h4 class="commentTitle">',
        'title_reply_after' => '</h4>',
        'cancel_reply_before' => ' <small>',
        'cancel_reply_after' => '</small>',
        'cancel_reply_link' => esc_html__('Cancel reply', 'faded'),
        'label_submit' => esc_html__('post comment', 'faded'),
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"><b>%4$s</b><span></span></button>',
        'submit_field' => '%1$s %2$s',
        'format' => 'xhtml',
    );
    ?>

    <div class="blog-submit">
        <?php comment_form($defaults); ?>
    </div>

</div><!-- .comments-area -->
