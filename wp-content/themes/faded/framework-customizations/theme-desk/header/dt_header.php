<?php
/* * *******************************************
  faded header
 * ****************************************** */

function faded_header_generator()
{
    $header_menu = array();
    $header_types = '';
    if (defined('FW'))
    {
        $header_menu = fw_get_db_settings_option('header_menu', array());
        if (isset($header_menu['header_types']) && $header_menu['header_types'] != '')
        {
            $header_types = $header_menu['header_types'];
        }
    }
    if ($header_types == 2):
        ?>
        <!--multi-page-nav-->
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <?php
                    $falogo_options = array();
                    $is_getnow_btn = array();
                    if (defined('FW'))
                    {
                        $falogo_options = fw_get_db_settings_option('falogo_options', array());
                        $is_getnow_btn = fw_get_db_settings_option('is_getnow_btn', array());
                        $is_getnow_item = '';
                        if (is_array($is_getnow_btn) && $is_getnow_btn != '')
                        {
                            $is_getnow_item = $is_getnow_btn['is_getnow_item'];
                        }
                        $getnow_btntext = '';
                        if (isset($is_getnow_btn[1]['getnow_btntext']) && $is_getnow_btn[1]['getnow_btntext'] != '')
                        {
                            $getnow_btntext = $is_getnow_btn[1]['getnow_btntext'];
                        }
                        $getnow_btnlink_url = '';
                        if (isset($is_getnow_btn[1]['getnow_btnlink_url']) && $is_getnow_btn[1]['getnow_btnlink_url'] != '')
                        {
                            $getnow_btnlink_url = $is_getnow_btn[1]['getnow_btnlink_url'];
                        }
                    }
                    $falogo = (isset($falogo_options['falogo'])) ? $falogo_options['falogo'] : '';
                    $falogo_text = (isset($falogo_options[1]) && isset($falogo_options[1]['falogo_text'])) ? $falogo_options[1]['falogo_text'] : '';
                    $falogo_color = (isset($falogo_options[1]) && isset($falogo_options[1]['falogo_color']) && $falogo_options[1]['falogo_color'] != '') ? 'color: ' . $falogo_options[1]['falogo_color'] . '; ' : '';
                    $fa_outer_logo_img = (isset($falogo_options[2]) && isset($falogo_options[2]['fa_outer_logo_img'])) ? $falogo_options[2]['fa_outer_logo_img'] : '';
                    $fa_inner_logo_img = (isset($falogo_options[2]) && isset($falogo_options[2]['fa_inner_logo_img'])) ? $falogo_options[2]['fa_inner_logo_img'] : '';
                    $falogo_height = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_height']) && $falogo_options[2]['falogo_height'] != '') ? 'height: ' . $falogo_options[2]['falogo_height'] . 'px; ' : '';
                    $falogo_padding = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_padding']) && $falogo_options[2]['falogo_padding'] != '') ? 'padding-top: ' . $falogo_options[2]['falogo_padding'] . 'px; ' : '';
                    $outer_logo = '';
                    if (is_array($fa_outer_logo_img) && isset($fa_outer_logo_img['attachment_id']) && $fa_outer_logo_img['attachment_id'] != '')
                    {
                        $outer_thumb = wp_get_attachment_image_src($fa_outer_logo_img['attachment_id'], 'full');
                        if (isset($outer_thumb[0]) && $outer_thumb[0] != '')
                        {
                            $outer_logo = $outer_thumb[0];
                        }
                    }
                    $inner_Logo = '';
                    if (is_array($fa_inner_logo_img) && isset($fa_inner_logo_img['attachment_id']) && $fa_inner_logo_img['attachment_id'] != '')
                    {
                        $inner_thumb = wp_get_attachment_image_src($fa_inner_logo_img['attachment_id'], 'full');
                        if (isset($inner_thumb[0]) && $inner_thumb[0] != '')
                        {
                            $inner_Logo = $inner_thumb[0];
                        }
                    }
                    ?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                        if ($falogo == 2)
                        {
                            ?>
                            <a class="navbar-brand ex" href="<?php echo esc_url(home_url('/')); ?>">                            
                                <img class="main-logo" style="<?php echo esc_attr($falogo_height) . esc_attr($falogo_padding); ?>" src="<?php echo esc_attr($outer_logo); ?>" alt="<?php the_title_attribute(); ?>">
                                <img class="logo-blue" src="<?php echo esc_attr($inner_Logo); ?>" alt="<?php the_title_attribute(); ?>">                               
                            </a>
                            <?php
                        } elseif ($falogo == 1)
                        {
                            ?> 
                            <a class="navbar-brand" style="<?php echo esc_attr($falogo_color); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($falogo_text); ?></a>
                            <?php
                        } else
                        {
                            ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__("Faded", "faded"); ?></a>
                            <?php
                        }
                        ?>    
                        <!--Get-Now-Button-->
                        <?php
                        if (isset($is_getnow_item) && $is_getnow_item != 2)
                        {
                            ?>    
                            <a class="btn-getnow" href="<?php echo esc_url($getnow_btnlink_url); ?>">
                                <?php
                                if (isset($getnow_btntext) && $getnow_btntext != '')
                                {
                                    echo esc_html($getnow_btntext);
                                } else
                                {
                                    echo esc_html('GET NOW');
                                }
                                ?>
                            </a>
                            <?php
                        }
                        ?>    
                    </div>
                    <div class="collapse navbar-collapse multi_page_menu_item" id="myNavbar">
                        <?php
                        if (has_nav_menu('primary-menu'))
                        {
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => FALSE,
                                'menu_class' => 'nav navbar-nav navbar-right multi',
                                'menu_id' => '',
                                'echo' => true,
                                'walker' => new faded_multipage_navwalker()
                            ));
                        } else
                        {
                            echo '<ul class="nav navbar-nav navbar-right">';
                            echo '<li><span>' . esc_html__('No Menu', 'faded') . '</span></li>';
                            echo '</ul>';
                        }
                        ?>                       
                    </div>
                </div>
            </div>
        </nav>
        <?php
    else:
        ?> 
        <!--single-page-nav-->
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <?php
                    $falogo_options = array();
                    $is_getnow_btn = array();
                    if (defined('FW'))
                    {
                        $falogo_options = fw_get_db_settings_option('falogo_options', array());
                        $is_getnow_btn = fw_get_db_settings_option('is_getnow_btn', array());
                        $is_getnow_item = '';
                        if (is_array($is_getnow_btn) && $is_getnow_btn != '')
                        {
                            $is_getnow_item = $is_getnow_btn['is_getnow_item'];
                        }
                        $getnow_btntext = '';
                        if (isset($is_getnow_btn[1]['getnow_btntext']) && $is_getnow_btn[1]['getnow_btntext'] != '')
                        {
                            $getnow_btntext = $is_getnow_btn[1]['getnow_btntext'];
                        }
                        $getnow_btnlink_url = '';
                        if (isset($is_getnow_btn[1]['getnow_btnlink_url']) && $is_getnow_btn[1]['getnow_btnlink_url'] != '')
                        {
                            $getnow_btnlink_url = $is_getnow_btn[1]['getnow_btnlink_url'];
                        }
                    }
                    $falogo = (isset($falogo_options['falogo'])) ? $falogo_options['falogo'] : '';
                    $falogo_text = (isset($falogo_options[1]) && isset($falogo_options[1]['falogo_text'])) ? $falogo_options[1]['falogo_text'] : '';
                    $falogo_color = (isset($falogo_options[1]) && isset($falogo_options[1]['falogo_color']) && $falogo_options[1]['falogo_color'] != '') ? 'color: ' . $falogo_options[1]['falogo_color'] . '; ' : '';
                    $fa_outer_logo_img = (isset($falogo_options[2]) && isset($falogo_options[2]['fa_outer_logo_img'])) ? $falogo_options[2]['fa_outer_logo_img'] : '';
                    $fa_inner_logo_img = (isset($falogo_options[2]) && isset($falogo_options[2]['fa_inner_logo_img'])) ? $falogo_options[2]['fa_inner_logo_img'] : '';
                    $falogo_height = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_height']) && $falogo_options[2]['falogo_height'] != '') ? 'height: ' . $falogo_options[2]['falogo_height'] . 'px; ' : '';
                    $falogo_width = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_width']) && $falogo_options[2]['falogo_width'] != '') ? 'width: ' . $falogo_options[2]['falogo_width'] . 'px; ' : '';
                    $falogo_padding = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_padding']) && $falogo_options[2]['falogo_padding'] != '') ? 'padding-top: ' . $falogo_options[2]['falogo_padding'] . 'px; ' : '';
                    $falogo_paddi_bottom    = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_padding_bottom']) && $falogo_options[2]['falogo_padding_bottom'] != '' ) ? 'padding-bottom: ' . $falogo_options[2]['falogo_padding_bottom'] . 'px; ' : '';
                    $fologo_paddi_left      = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_padding_left']) && $falogo_options[2]['falogo_padding_left'] != '') ? 'padding-left: ' . $falogo_options[2]['falogo_padding_left'] . 'px;' : '';
                    $fologo_paddi_right     = (isset($falogo_options[2]) && isset($falogo_options[2]['falogo_padding_right']) && $falogo_options[2]['falogo_padding_right'] != '') ? 'padding-right: ' . $falogo_options[2]['falogo_padding_right'] . 'px;' : '';
                    $outer_logo = '';
                    if (is_array($fa_outer_logo_img) && isset($fa_outer_logo_img['attachment_id']) && $fa_outer_logo_img['attachment_id'] != '')
                    {
                        $outer_thumb = wp_get_attachment_image_src($fa_outer_logo_img['attachment_id'], 'full');
                        if (isset($outer_thumb[0]) && $outer_thumb[0] != '')
                        {
                            $outer_logo = $outer_thumb[0];
                        }
                    }
                    $inner_Logo = '';
                    if (is_array($fa_inner_logo_img) && isset($fa_inner_logo_img['attachment_id']) && $fa_inner_logo_img['attachment_id'] != '')
                    {
                        $inner_thumb = wp_get_attachment_image_src($fa_inner_logo_img['attachment_id'], 'full');
                        if (isset($inner_thumb[0]) && $inner_thumb[0] != '')
                        {
                            $inner_Logo = $inner_thumb[0];
                        }
                    }
                    ?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                        if ($falogo == 2)
                        {
                            ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="main-logo" style="<?php echo esc_attr($falogo_height) . esc_attr($falogo_width) . esc_attr($falogo_padding) . esc_attr($falogo_paddi_bottom) . esc_attr($fologo_paddi_left) . esc_attr($fologo_paddi_right); ?>" src="<?php echo esc_attr($outer_logo); ?>" alt="<?php the_title_attribute(); ?>">
                                <img class="logo-blue" style="<?php echo esc_attr($falogo_height) . esc_attr($falogo_width) . esc_attr($falogo_padding) . esc_attr($falogo_paddi_bottom) . esc_attr($fologo_paddi_left) . esc_attr($fologo_paddi_right); ?>" src="<?php echo esc_attr($inner_Logo); ?>" alt="<?php the_title_attribute(); ?>">
                            </a>
                            <?php
                        } elseif ($falogo == 1)
                        {
                            ?> 
                            <a class="navbar-brand" style="<?php echo esc_attr($falogo_color); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($falogo_text); ?></a>
                            <?php
                        } else
                        {
                            ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__("Faded", "faded"); ?></a>
                            <?php
                        }
                        ?>
                        <!--Get Now Btn-->
                        <?php
                        if (isset($is_getnow_item) && $is_getnow_item != 2)
                        {
                            ?>    
                            <a class="btn-getnow" href="<?php echo esc_url($getnow_btnlink_url); ?>">
                                <?php
                                if (isset($getnow_btntext) && $getnow_btntext != '')
                                {
                                    echo esc_html($getnow_btntext);
                                } else
                                {
                                    echo esc_html('GET NOW');
                                }
                                ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <?php
                        if (has_nav_menu('primary-menu'))
                        {
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => FALSE,
                                'menu_class' => 'nav navbar-nav navbar-right smoothscroll',
                                'menu_id' => '',
                                'echo' => true,
                                'walker' => new faded_multipage_navwalker()
                            ));
                        } 
                        ?>                       
                    </div>
                </div>
            </div>
        </nav>
    <?php
    endif;
}

/* * *******************************
 * Faded Preloader
 * ******************************* */

function faded_preloader()
{

    $loader_status = 1;
    $loaders = 1;
    if (defined('FW'))
    {
        $loader_status = fw_get_db_settings_option('loader_status', 1);
        $loaders = fw_get_db_settings_option('loaders', 1);
    }

    if ($loader_status == 1):
        switch ($loaders)
        {
            case 1:
                ?>
                <div class="loading">
                    <div class="loading-center">
                        <div class="loading-center-absolute">
                            <div class="object object_one"></div>
                            <div class="object object_two"></div>
                            <div class="object object_three"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
                ?>
            <?php
            case 2:
                ?>
                <div class="loading">
                    <div class="loader-container ball-chasing">
                        <div class="loader">
                            <div class="ball-1"></div>
                            <div class="ball-2"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 3:
                ?>
                <div class="loading">
                    <div class="loader-container ball-pulse">
                        <div class="loader">
                            <div class="ball"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 4:
                ?>
                <div class="loading">
                    <div class="loader-container ball-pulse-double">
                        <div class="loader">
                            <div class="ball-1"></div>
                            <div class="ball-2"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 5:
                ?>
                <div class="loading">
                    <div class="loader-container wave">
                        <div class="loader">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                            <div class="line-4"></div>
                            <div class="line-5"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 6:
                ?>
                <div class="loading">
                    <div class="loader-container wave-spread">
                        <div class="loader">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                            <div class="line-4"></div>
                            <div class="line-5"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 7:
                ?>
                <div class="loading">
                    <div class="loader-container circle-pulse">
                        <div class="loader">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 8:
                ?>
                <div class="loading">
                    <div class="loader-container circle-pulse-multiple">
                        <div class="loader">
                            <div class="circle-1"></div>
                            <div class="circle-2"></div>
                            <div class="circle-3"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 9:
                ?>
                <div class="loading">
                    <div class="loader-container arc-rotate-double">
                        <div class="loader">
                            <div class="arc-1"></div>
                            <div class="arc-2"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 10:
                ?>
                <div class="loading">
                    <div class="loader-container square-split">
                        <div class="loader">
                            <div class="square-1"></div>
                            <div class="square-2"></div>
                            <div class="square-3"></div>
                            <div class="square-4"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 11:
                ?>
                <div class="loading">
                    <div class="loader-container arc-rotate">
                        <div class="loader">
                            <div class="arc"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 12:
                ?>
                <div class="loading">
                    <div class="loader-container arc-rotate2">
                        <div class="loader">
                            <div class="arc"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 13:
                ?>
                <div class="loading">
                    <div class="loader-container arc-scale">
                        <div class="loader">
                            <div class="arc"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 14:
                ?>
                <div class="loading">
                    <div class="loader-container clock">
                        <div class="loader">
                            <div class="arc"></div>
                        </div>
                    </div>          
                </div>          
                <?php
                break;
            case 15:
                ?>
                <div class="loading">
                    <div class="loader-container square-rotate-3d">
                        <div class="loader">
                            <div class="square"></div>
                        </div>
                    </div>
                </div>
                <?php
                break;
        }
    endif;
}
