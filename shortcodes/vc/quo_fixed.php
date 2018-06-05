<?php

function ra_quo_fixed_vc() {
	$_products = getProducts();
	if( is_array($_products) ){	
		$products = array_merge(array('product'), $_products);
	}
 	
	vc_map(array(
		'name' => 'quotation fixed',
		'base' => 'ra_quo_fixed',
		'category' => 'RA',
		'params' => array(
			array(
				"type" => "dropdown",
				"heading" => "pre selected product",
				"param_name" => "product",
				"value" => $products
			),
			array(
				"type" => "textfield",
				"heading" => "success message",
				"param_name" => "message",
				"value" => "Gracias, pronto un asesor se pondrá en contacto con usted."
			)
		)
	));
}

add_action('vc_before_init', 'ra_quo_fixed_vc');
