<?php

function ra_image_hover_vc() {
	vc_map(array(
		'name' => 'Image hover',
		'base' => 'ra_image_hover',
		'category' => 'RA',
    'params' => array(
      array(
        'type' => 'attach_image',
        'heading' => 'Image base',
        'param_name' => 'image'
      ),
      array(
        'type' => 'attach_image',
        'heading' => 'Image overlay',
        'param_name' => 'image_overlay'
      ),
			array(
        'type' => 'textfield',
        'heading' => 'url',
        'param_name' => 'url'
      ),
      array(
        'type' => 'colorpicker',
        'heading' => 'background',
        'param_name' => 'bg_color'
      )
    )
	));
}

add_action('vc_before_init', 'ra_image_hover_vc');
