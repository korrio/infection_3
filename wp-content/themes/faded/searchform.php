<?php
/**
 * Template for displaying search forms in Faded
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
?>

<form class="form-inline" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <div class="form-group">
        <input name="s" type="search" class="form-control" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'faded'); ?>">
    </div>
    <button type="submit"><?php echo _x('Search', 'submit button', 'faded'); ?></button>
</form>     