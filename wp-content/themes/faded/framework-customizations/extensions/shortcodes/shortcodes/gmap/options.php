<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/*options process*/

$options = array(
    'latitude'   => array(
        'label'   => esc_html__('Location Latitude', 'faded'),
        'desc'    => esc_html__('Insert your location latifude.', 'faded'),
        'type'    => 'text'
    ), 
    'longitude'   => array(
        'label'   => esc_html__('Location Longitude', 'faded'),
        'desc'    => esc_html__('Insert your location longitude', 'faded'),
        'type'    => 'text'
    ),
    'markers'   => array(
        'label'   => esc_html__('Map Marker', 'faded'),
        'desc'    => esc_html__('Upload your map marker. Map marker shold be smallar image.', 'faded'),
        'type'  => 'upload',
    ),
    'height' => array(
            'label' => esc_html__('Map Height', 'faded'),
            'desc'  => esc_html__('Insert your map height. Default height is 450px. Don\'t need to insert "px".', 'faded'),
            'type'  => 'text',
            'value' => ''
    ),
    
    
);