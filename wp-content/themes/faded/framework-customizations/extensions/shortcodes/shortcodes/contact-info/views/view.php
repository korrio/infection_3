<?php
if (!defined('FW')) {
    die('Forbidden');
}
/* view process */

$sec_title = '';
if ($atts['sec_title'] != '') {
    $sec_title = $atts['sec_title'];
}
$sec_desc = '';
if ($atts['sec_desc'] != '') {
    $sec_desc = $atts['sec_desc'];
}
$info_widget = array();
if ($atts['info_widget'] != '') {
    $info_widget = $atts['info_widget'];
}

$is_social = 1;
if ($atts['is_social'] != '') {
    $is_social = $atts['is_social'];
}

$contact_social=array();
if($atts['contact_social'] != ''){
    $contact_social=$atts['contact_social'];
}
$tag_allowed=array(
    'a'=>array(
        'href'=>array(),
        'title'=>array(),
    ),
    'br'=>array(),
    'span'=>array(),
);

?>
<div class="contact">
    <h3><?php echo esc_html($sec_title); ?></h3>
    <p><?php echo substr(wp_kses($sec_desc, $tag_allowed),0,86); ?></p>
    <?php
    if (is_array($info_widget) && count($info_widget) > 0) 
    {
        foreach ($info_widget as $rslt_widget)
        {
            $info_icon = '';
            if ($rslt_widget['info_icon'] != '') {
                $info_icon = $rslt_widget['info_icon'];
            }
            $title = '';
            if ($rslt_widget['title'] != '') {
                $title = $rslt_widget['title'];
            }
            $content = '';
            if ($rslt_widget['content'] != '') {
                $content = $rslt_widget['content'];
            }
            $tag_allow=array(
                'a'=>array(
                    'href'=>array(),
                    'title'=>array(),
                ),
                'br'=>array(),
                'span'=>array(),
                'p'=>array(),
            );
            ?>
            <div class="contact-info">
                <h5><i class="<?php echo esc_attr($info_icon); ?>"></i> <?php echo esc_attr($title); ?></h5>
                <h6><?php echo wp_kses($content,$tag_allow); ?></h6>
            </div>
            <?php
        }
    }
    ?>
    <?php if($is_social == 1): ?>
    <div class="social">
        <?php
        if(is_array($contact_social) && isset($contact_social) && count($contact_social) > 0)
        { 
            foreach($contact_social as $con_sos):
                $con_social_icon='';
                if(isset($con_sos['con_social_icon']) && $con_sos['con_social_icon'] != '')
                {
                    $con_social_icon = $con_sos['con_social_icon'];
                }
                $con_social_link='';
                if(isset($con_sos['con_social_link']) && $con_sos['con_social_link'] != '')
                {
                    $con_social_link = $con_sos['con_social_link'];
                } 
                $con_social_icon_color='';
                if(isset($con_sos['con_social_icon_color']) && $con_sos['con_social_icon_color'] != '')
                {
                    $con_social_icon_color = 'background-color:'.$con_sos['con_social_icon_color'].';';
                } 
        ?>
            <a target="_blank" href="<?php echo esc_url($con_social_link); ?>"><i style="<?php echo esc_attr($con_social_icon_color); ?>" class="<?php echo esc_attr($con_social_icon); ?>" aria-hidden="true"></i></a>
        <?php        
            endforeach;
        }
        ?>
    </div>
    <?php endif; ?>
</div>
