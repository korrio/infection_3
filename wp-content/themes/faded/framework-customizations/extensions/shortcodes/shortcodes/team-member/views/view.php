<?php

if (!defined('FW')) {
    die('Forbidden');
}
$members = array();
if ($atts['members'] != '') {
    $members = $atts['members'];
}
if (is_array($members) && count($members) > 0)
{
    echo ' <div class="row">';
    foreach ($members as $mem) 
    {
        $image_team = '';
        if (is_array($mem['image_team']) && isset($mem['image_team']['attachment_id']) && $mem['image_team']['attachment_id'] != '') {
            $imgs = wp_get_attachment_image_src($mem['image_team']['attachment_id'], 'faded_team');
            $img = $imgs[0];
        } else {
            $img = 'http://placehold.it/270x330';
        }
        $name='';
        if($mem['name'] != '')
        {
            $name=$mem['name'];
        }
        $name_font_size='';
        if($mem['name_font_size'] != '')
        {
            $name_font_size='font-size: '.$mem['name_font_size'].'px;';
        }
        $name_color='';
        if($mem['name_color'] != '')
        {
            $name_color='color: '.$mem['name_color'].';';
        }    
        $job='';
        if($mem['job'] != '')
        {
            $job=$mem['job'];
        }    
        $job_font_size='';
        if($mem['job_font_size'] != '')
        {
            $job_font_size='font-size: '.$mem['job_font_size'].';';
        }    
        $job_title_color='';
        if($mem['job_title_color'] != '')
        {
            $job_title_color='color: '.$mem['job_title_color'].';';
        }   
        $is_social='';
        if(isset($mem['is_social']) && $mem['is_social'] != '')
        {
            $is_social=$mem['is_social'];
        }    
        $team_social='';
        if(isset($mem['team_social']) && is_array($mem['team_social']) && $mem['team_social'] != '')
        {
            $team_social=$mem['team_social'];
        } 
        ?>
            <div class="col-sm-6 col-md-3">
                <div class="wrapper animate">
                    <div class="wrapper-img">
                        <img class="img-responsive" src="<?php echo esc_url($img); ?>" alt="team">
                    </div>
                    <h5 style="<?php echo esc_attr($name_font_size) . esc_attr($name_color); ?>"><?php echo esc_html($name); ?></h5>
                    <h6 style="<?php echo esc_attr($job_font_size) . esc_attr($job_title_color); ?>"><?php echo esc_html($job); ?></h6>
                    <hr>
                    <?php 
                    if($is_social == 'yes'):
                    ?>
                    <div class="social">
                        <?php
                        foreach((array)$team_social as $social):
                            $social_icon='';
                            if(isset($social['social_icon']) && $social['social_icon'] != '')
                            {
                                $social_icon=$social['social_icon'];
                            }
                            $social_link='';
                            if(isset($social['social_link']) && $social['social_link'] != '')
                            {
                                $social_link=$social['social_link'];
                            }
                        ?>
                        <a target="_blank" href="<?php echo esc_url($social_link); ?>"><i class="<?php echo esc_attr($social_icon); ?>" aria-hidden="true"></i></a>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php        
    }
    echo '</div>';
}
    