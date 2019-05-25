<?php
/**
 * Implement theme metabox.
 *
 * @package Business Startup
 */

if (!function_exists('business_startup_add_theme_meta_box')) :

    /**
     * Add the Meta Box
     *
     * @since 1.0.0
     */
    function business_startup_add_theme_meta_box()
    {

        $apply_metabox_post_types = array('post', 'page');

        foreach ($apply_metabox_post_types as $key => $type) {
            add_meta_box(
                'business-startup-theme-settings',
                esc_html__('Single Page/Post Settings', 'business-startup'),
                'business_startup_render_theme_settings_metabox',
                $type
            );
        }

    }

endif;

add_action('add_meta_boxes', 'business_startup_add_theme_meta_box');

if (!function_exists('business_startup_render_theme_settings_metabox')) :

    /**
     * Render theme settings meta box.
     *
     * @since 1.0.0
     */
    function business_startup_render_theme_settings_metabox($post, $metabox)
    {

        $post_id = $post->ID;
        $business_startup_post_meta_value = get_post_meta($post_id);

        // Meta box nonce for verification.
        wp_nonce_field(basename(__FILE__), 'business_startup_meta_box_nonce');
        // Fetch Options list.
        $page_layout = get_post_meta($post_id, 'business-startup-meta-select-layout', true);
        $page_image_layout = get_post_meta($post_id, 'business-startup-meta-image-layout', true);
        ?>
        <div id="business-startup-settings-metabox-container" class="business-startup-settings-metabox-container">
            <div id="business-startup-settings-metabox-tab-layout">
                <h4><?php echo esc_html__('Layout Settings', 'business-startup'); ?></h4>
                <div class="business-startup-row-content">
                    <!-- Select Field-->
                    <p>
                        <label for="business-startup-meta-select-layout" class="business-startup-row-title">
                            <?php _e('Single Page/Post Layout', 'business-startup') ?>
                        </label>
                        <select name="business-startup-meta-select-layout" id="business-startup-meta-select-layout">
                            <option value="right-sidebar" <?php selected('right-sidebar', $page_layout); ?>>
                                <?php _e('Content - Primary Sidebar', 'business-startup') ?>
                            </option>
                            <option value="left-sidebar" <?php selected('left-sidebar', $page_layout); ?>>
                                <?php _e('Primary Sidebar - Content', 'business-startup') ?>
                            </option>

                            <option value="no-sidebar" <?php selected('no-sidebar', $page_layout); ?>>
                                <?php _e('No Sidebar', 'business-startup') ?>
                            </option>
                        </select>
                    </p>

                    <!-- Select Field-->
                    <p>
                        <label for="business-startup-meta-image-layout" class="business-startup-row-title">
                            <?php _e('Single Page/Post Image Layout', 'business-startup') ?>
                        </label>
                        <select name="business-startup-meta-image-layout" id="business-startup-meta-image-layout">
                            <option value="no-image" <?php selected('no-image', $page_image_layout); ?>>
                                <?php _e('No Image', 'business-startup') ?>
                            </option>
                            <option value="full" <?php selected('full', $page_image_layout); ?>>
                                <?php _e('Full', 'business-startup') ?>
                            </option>
                            <option value="left" <?php selected('left', $page_image_layout); ?>>
                                <?php _e('Left', 'business-startup') ?>
                            </option>
                            <option value="right" <?php selected('right', $page_image_layout); ?>>
                                <?php _e('Right', 'business-startup') ?>
                            </option>

                        </select>
                    </p>
                </div><!-- .business-startup-row-content -->
            </div><!-- #business-startup-settings-metabox-tab-layout -->
        </div><!-- #business-startup-settings-metabox-container -->

        <?php
    }

endif;


if (!function_exists('business_startup_save_theme_settings_meta')) :

    /**
     * Save theme settings meta box value.
     *
     * @since 1.0.0
     *
     * @param int $post_id Post ID.
     * @param WP_Post $post Post object.
     */
    function business_startup_save_theme_settings_meta($post_id, $post)
    {

        // Verify nonce.
        if (!isset($_POST['business_startup_meta_box_nonce']) || !wp_verify_nonce($_POST['business_startup_meta_box_nonce'], basename(__FILE__))) {
            return;
        }

        // Bail if auto save or revision.
        if (defined('DOING_AUTOSAVE') || is_int(wp_is_post_revision($post)) || is_int(wp_is_post_autosave($post))) {
            return;
        }

        // Check the post being saved == the $post_id to prevent triggering this call for other save_post events.
        if (empty($_POST['post_ID']) || $_POST['post_ID'] != $post_id) {
            return;
        }

        // Check permission.
        if ('page' === $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return;
            }
        } else if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        $business_startup_meta_select_layout = isset($_POST['business-startup-meta-select-layout']) ? esc_attr($_POST['business-startup-meta-select-layout']) : '';
        if (!empty($business_startup_meta_select_layout)) {
            update_post_meta($post_id, 'business-startup-meta-select-layout', sanitize_text_field($business_startup_meta_select_layout));
        }
        $business_startup_meta_image_layout = isset($_POST['business-startup-meta-image-layout']) ? esc_attr($_POST['business-startup-meta-image-layout']) : '';
        if (!empty($business_startup_meta_image_layout)) {
            update_post_meta($post_id, 'business-startup-meta-image-layout', sanitize_text_field($business_startup_meta_image_layout));
        }
    }

endif;

add_action('save_post', 'business_startup_save_theme_settings_meta', 10, 3);