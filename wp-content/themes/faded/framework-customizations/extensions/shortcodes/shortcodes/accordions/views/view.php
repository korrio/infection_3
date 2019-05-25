<?php if (!defined('FW')){die('Forbidden');}

/*
view accordions
*/
$accordion=array();
if($atts['accordion'] != ''){
    $accordion=$atts['accordion'];
}
?>
<div class="panel-group" id="accordion">
    <?php 
    if(is_array($accordion) && $accordion != ''): 
    $i=1;    
    foreach($accordion as $key=>$accs):    
    $acc_title='';
    if($accs['acc_title'] != '')
    {
        $acc_title=$accs['acc_title'];
    } 
    $acc_title_color='';
    if($accs['acc_title_color'] != '')
    {
        $acc_title_color='color: '.$accs['acc_title_color'].';';
    }
    $acc_content='';
    if($accs['acc_content'] != '')
    {
        $acc_content=$accs['acc_content'];
    }  
    $acc_content_color='';
    if($accs['acc_content_color'] != '')
    {
        $acc_content_color='color: '.$accs['acc_content_color'].';';
    }
    if($i == 1)
    {
        $collapseIn='collapse in';
        $collapsed='';
    }
    else
    {
        $collapseIn='collapse';
        $collapsed='collapsed';
    }    
    $allowTag=array(
        'a' => array(
        'href' => array(),
        'title' => array()
        ),
        'br' => array(),
        'p' => array(),
    );
    ?>
    <div class="panel panel-default animate ">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a style="<?php echo esc_attr($acc_title_color); ?>"  data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($key); ?>" class="btn-accordion <?php echo esc_attr($collapsed); ?>"><?php echo esc_html($acc_title); ?></a>
            </h4>
        </div>
        <div id="collapse<?php echo ($key); ?>" class="panel-collapse <?php echo esc_attr($collapseIn); ?>">
            <div class="panel-body" style="<?php echo esc_attr($acc_content_color); ?>"><?php echo wp_kses($acc_content,$allowTag); ?></div>
        </div>
    </div>
    <?php $i++; endforeach; endif;  ?>
</div>