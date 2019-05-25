<?php
if (!defined('FW')) {
    die('Forbidden');
}

$testimonials = array();
if ($atts['testimonials'] != '') {
    $testimonials = $atts['testimonials'];
}
?>

<div class="row">
    <div id="owl-testimonial" dir="ltr" class="owl-testimonial">
        <?php
        if (is_array($testimonials) && count($testimonials) > 0):
            foreach ($testimonials as $tes):
                if (is_array($tes['testi_img']) && isset($tes['testi_img']['attachment_id']) && $tes['testi_img']['attachment_id'] != '')
                {
                    $imgs = wp_get_attachment_image_src($tes['testi_img']['attachment_id'], 'faded_testimonial');
                    $img = $imgs[0];
                }
                else
                {
                    $img = 'http://placehold.it/188x240';
                }
                $testi_icon='';
                if($tes['testi_icon'] != '')
                {
                    $testi_icon=$tes['testi_icon'];
                }
                $testi_icon_color='';
                if($tes['testi_icon_color'] != '')
                {
                    $testi_icon_color='color: '.$tes['testi_icon_color'].';';
                }  
                $content='';
                if($tes['content'] != '')
                {
                    $content=$tes['content'];
                }    
                $cnt_font_color='';
                if($tes['cnt_font_color'] != '')
                {
                    $cnt_font_color='color: '.$tes['cnt_font_color'].';';
                }   
                $author_name='';
                if($tes['author_name'] != '')
                {
                    $author_name=$tes['author_name'];
                }    
                $author_font_size='';
                if($tes['author_font_size'] != '')
                {
                    $author_font_size='font-size: '.$tes['author_font_size'].'px;';
                }
                $aut_font_color='';
                if($tes['aut_font_color'] != '')
                {
                    $aut_font_color='color: '.$tes['aut_font_color'].';';
                }    
                $tag_allow=array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'br' => array(),
                    'span'=>array()
                );
                ?>
                <div class="wrapper-testimonial">
                    <div class="media">
                        <div class="media-left">
                            <img src="<?php echo esc_url($img); ?>" alt="testimonial">
                        </div>
                        <div class="media-body">
                            <i style="<?php echo esc_attr($testi_icon_color); ?>" class="<?php echo esc_attr($testi_icon); ?>" aria-hidden="true"></i>
                            <p style="<?php echo esc_attr($cnt_font_color); ?>"><?php echo substr(wp_kses($content, $tag_allow),0,68); ?></p>                            
                            <h6 style="<?php echo esc_attr($author_font_size) . esc_attr($aut_font_color); ?>"><?php echo esc_html($author_name); ?></h6>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        endif;
        ?>
    </div>
</div>
