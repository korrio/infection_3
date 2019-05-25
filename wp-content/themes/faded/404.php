<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
get_header();

$four_heading = '404';
$four_content = 'The page you were looking for could not be found';
$four_button_label = 'Go To the home page';
$four_button_link = '';

if (defined('FW')){
    $four_heading=fw_get_db_settings_option('four_heading','');
    $four_content=fw_get_db_settings_option('four_content','');
    $four_button_label=fw_get_db_settings_option('four_button_label','');
    $four_button_link=fw_get_db_settings_option('four_button_link','');
}
$allowed_html = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    'span' => array(),
);

?>
<section class="not-found">
    <div class="container">        
        <div class="row"> 
            <h1 class="error_title"><?php echo esc_html($four_heading); ?></h1>
            <p><?php echo wp_kses($four_content, $allowed_html) ?></p>
            <a class="btn btn-default error_btn" href="<?php echo esc_url($four_button_link); ?>"><?php echo esc_html($four_button_label); ?></a> 
        </div>
    </div>
</section>
<?php get_footer(); ?>
