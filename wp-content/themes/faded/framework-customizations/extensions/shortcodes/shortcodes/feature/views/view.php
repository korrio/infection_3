<?php
if (!defined('FW')) {
    die('Forbidden');
}
/*
 * Feature Shortcode view
*/
$feature_img='';
if($atts['feature_img'] != '')
{
    $feature_img = $atts['feature_img'];
}
$feature=array();
if($atts['feature'] !='')
{
    $feature=$atts['feature'];
}   
?>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-12 container-acting">
        <div class="row">
            <?php
            if (is_array($feature) && count($feature) > 0)
            {
                $lop=0;
                foreach($feature as $fts):
                    
                    $icon='';
                    if($fts['icon'] !='')
                    {
                        $icon=$fts['icon'];
                    }
                    $icon_gradient='';
                    if($fts['icon_gradient'] !='')
                    {
                        $icon_gradient='background: -moz-linear-gradient('.'0deg'.','.$fts['icon_gradient']['primary'].' 0%,'.$fts['icon_gradient']['secondary'].' 100%);';
                        $icon_gradient.='background: -webkit-linear-gradient('.'0deg'.','.$fts['icon_gradient']['primary'].' 0%,'.$fts['icon_gradient']['secondary'].' 100%);';
                        $icon_gradient.='background: -ms-linear-gradient('.'0deg'.','.$fts['icon_gradient']['primary'].' 0%,'.$fts['icon_gradient']['secondary'].' 100%);';
                    }
                    //title
                    $title='';
                    if($fts['title'] !='')
                    {
                        $title=$fts['title'];
                    }
                    $title_color='';
                    if($fts['title_color'] != '')
                    {
                        $title_color='color: '.$fts['title_color'].';';
                    }    
                    $title_font_size='';
                    if($fts['title_font_size'] != '')
                    {
                        $title_font_size='font-size: '.$fts['title_font_size'].'px;';
                    }  
                    $title_font_weight='';
                    if($fts['title_font_weight'] != '')
                    {
                        $title_font_weight='font-weight: '.$fts['title_font_weight'].';';
                    }  
                    //content
                    $content='';
                    if($fts['content'] !='')
                    {
                        $content=$fts['content'];
                    }                    
                    $cnt_color='';
                    if($fts['cnt_color'] != '')
                    {
                        $cnt_color='color: '.$fts['cnt_color'].';';
                    }                    
                    $cnt_font_size='';
                    if($fts['cnt_font_size'] != '')
                    {
                        $cnt_font_size='font-size: '.$fts['cnt_font_size'].'px;';
                    } 
                    $text_align='';
                    if($fts['text_align'] != '')
                    {
                        $text_align='text-align: '.$fts['text_align'].';';
                    }
                    $margin_top = '';
                    if ($fts['margin_top'] != '') {
                        $margin_top = 'margin-top: ' . $fts['margin_top'] . 'px; ';
                    }
                    $margin_bottom = '';
                    if ($fts['margin_bottom'] != '') {
                        $margin_bottom = 'margin-bottom: ' . $fts['margin_bottom'] . 'px; ';
                    }
                    //tag allowed
                    $allowTag=array(
                        'a'=>array(
                            'href'=>array(),
                            'title'=>array()
                        ),
                        'br'=>array(),
                        'span'=>array()
                    );
                    //feat-top-left feat-top-right feat-bottom-left feat-bottom-right
                    if($lop == 0){
                        $feat_position='feat-top-left';
                    }elseif($lop ==1){
                        $feat_position='feat-top-right';
                    }elseif($lop ==2){
                        $feat_position='feat-bottom-left';
                    }else{
                        $feat_position='feat-bottom-right';
                    }
                    
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 <?php echo esc_attr($feat_position); ?> animate delay-a" style="<?php echo esc_attr($margin_bottom) . esc_attr($margin_top) . esc_attr($text_align); ?>">
                    <span style="<?php echo esc_attr($icon_gradient); ?>" class="ficons <?php echo esc_attr($icon); ?>"></span>
                    <h5 style="<?php echo esc_attr($title_color) . esc_attr($title_font_size). esc_attr($title_font_weight); ?>"><?php echo esc_html($title); ?></h5>
                    <p style="<?php echo esc_attr($cnt_color) . esc_attr($cnt_font_size); ?>"><?php echo wp_kses($content,$allowTag); ?></p>
                </div>
                <?php
                $lop++;
                endforeach;
            }
            ?>
        </div>
        <?php if(is_array($feature_img) && $feature_img['attachment_id'] != ''): ?>
            <img class='img-responsive' src="<?php echo esc_url($feature_img['url']); ?>" alt=''>
        <?php endif; ?>
    </div>
</div>