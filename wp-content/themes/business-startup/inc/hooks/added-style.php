<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package Business Startup
 */

if (!function_exists('business_startup_trigger_custom_css_action')):

    /**
     * Do action theme custom CSS.
     *
     * @since 1.0.0
     */
    function business_startup_trigger_custom_css_action()
    {
        global $business_startup_google_fonts;
        $business_startup_primary_color = business_startup_get_option('primary_color');
        $business_startup_secondary_color = business_startup_get_option('secondary_color');
        $business_startup_tertiary_color = business_startup_get_option('tertiary_color');

        $business_startup_primary_font = $business_startup_google_fonts[business_startup_get_option('primary_font')];
        $business_startup_secondary_font = $business_startup_google_fonts[business_startup_get_option('secondary_font')];

        $business_startup_font_title_font_small = business_startup_get_option('text_size_title_font_small');
        $business_startup_font_title_font_big = business_startup_get_option('text_size_title_font_big');
        $business_startup_font_size_p = business_startup_get_option('text_size_p');

        ?>
        <style type="text/css">

            <?php if (!empty($business_startup_primary_color) ){ ?>
            body .site button,
            body .site input[type="button"],
            body .site input[type="reset"],
            body .site input[type="submit"],
            body .site .btn-primary,
            body .site .wpforms-form button[type=submit].wpforms-submit,
            body .site .wpforms-form button[type=submit].wpforms-submit:hover,
            body .site .wpforms-form button[type=submit].wpforms-submit:focus,
            body .site .alt-bg,
            body .site .owl-dots .owl-dot:after,
            body .site .mc4wp-form-fields input[type="submit"],
            body .site .scroll-up:hover,
            body .site .scroll-up:focus,
            body .site .img-hover:before{
                background-color: <?php echo esc_html($business_startup_primary_color); ?>;
            }

            body .site button,
            body .site input[type="button"],
            body .site input[type="reset"],
            body .site input[type="submit"],
            body .site .btn-primary,
            body .site .wpforms-form button[type=submit].wpforms-submit,
            body .site .wpforms-form button[type=submit].wpforms-submit:hover,
            body .site .wpforms-form button[type=submit].wpforms-submit:focus,
            body .site .site-footer .author-info .profile-image,
            body .site .owl-dots .owl-dot{
                border-color: <?php echo esc_html($business_startup_primary_color); ?>;
            }

            body .sticky header:before,
            body .entry-meta .post-category a {
                color: <?php echo esc_html($business_startup_primary_color); ?>;
            }

            @media only screen and (min-width: 992px) {
                body .main-navigation .menu > ul > li:hover > a,
                body .main-navigation .menu > ul > li:focus > a,
                body .main-navigation .menu > ul > li.current-menu-item > a {
                    background: <?php echo esc_html($business_startup_primary_color); ?>;
                }
            }

            <?php } ?>

            <?php if (!empty($business_startup_secondary_color) ){ ?>
            body .primary-bgcolor,
            body button:hover,
            body button:focus,
            body input[type="button"]:hover,
            body input[type="button"]:focus,
            body input[type="reset"]:hover,
            body input[type="reset"]:focus,
            body input[type="submit"]:hover,
            body input[type="submit"]:focus {
                background: <?php echo esc_html($business_startup_secondary_color); ?>;
            }

            body .primary-textcolor {
                color: <?php echo esc_html($business_startup_secondary_color); ?>;
            }

            body button:hover,
            body button:focus,
            body input[type="button"]:hover,
            body input[type="button"]:focus,
            body input[type="reset"]:hover,
            body input[type="reset"]:focus,
            body input[type="submit"]:hover,
            body input[type="submit"]:focus {
                border-color: <?php echo esc_html($business_startup_secondary_color); ?>;
            }

            <?php } ?>

            <?php if (!empty($business_startup_tertiary_color) ){ ?>

            .site ::-moz-selection {
                background: <?php echo esc_html($business_startup_tertiary_color); ?>;
            }

            .site ::selection {
                background: <?php echo esc_html($business_startup_tertiary_color); ?>;
            }

            body .site .secondary-bgcolor,
            body .site .main-navigation .menu-description,
            body .site .widget-cta:before,
            body .site .widget .widget-portfolio .portfolio-masonry .filter-group li :before{
                background: <?php echo esc_html($business_startup_tertiary_color); ?>;
            }

            body .loader-text-2:before,
            body .site a:hover,
            body .site a:focus,
            body .site a:active,
            body .site .img-hover .hover-caption .entry-meta,
            body .site .wp-custom-header .wp-custom-header-video-button:hover,
            body .site .wp-custom-header .wp-custom-header-video-button:focus{
                color: <?php echo esc_html($business_startup_tertiary_color); ?>;
            }

            body .site .wp-custom-header .wp-custom-header-video-button:hover,
            body .site .wp-custom-header .wp-custom-header-video-button:focus {
                border-color: <?php echo esc_html($business_startup_tertiary_color); ?>;
            }

            <?php } ?>

            <?php if (!empty($business_startup_primary_font) ){ ?>

            body .primary-font,
            body .site .marquee,
            h1, h2, h3, h4, h5, h6,
            .main-navigation .menu {
                font-family: <?php echo esc_html($business_startup_primary_font); ?> !important;
            }

            <?php } ?>

            <?php if (!empty($business_startup_secondary_font) ){ ?>
            body,
            button,
            input,
            select,
            textarea {
                font-family: <?php echo esc_html($business_startup_secondary_font); ?> !important;
            }

            <?php } ?>

            <?php if (!empty($business_startup_font_title_font_small) ){ ?>
            body .featured-details .entry-title,
            body .site .entry-title-small {
                font-size: <?php echo esc_html($business_startup_font_title_font_small); ?>px !important;
            }

            <?php } ?>

            <?php if (!empty($business_startup_font_title_font_big) ){ ?>
            .site .entry-title-large {
                font-size: <?php echo esc_html($business_startup_font_title_font_big); ?>px;
            }

            <?php } ?>

            <?php if (!empty($business_startup_font_size_p) ){ ?>
            body,
            body .site button,
            body .site input,
            body .site select,
            body .site textarea,
            body .site p,
            body .site .main-navigation .toggle-menu {
                font-size: <?php echo esc_html($business_startup_font_size_p); ?>px !important;
            }

            <?php } ?>

        </style>

    <?php }

endif;