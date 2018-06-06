<?php

function ecosesa_blog_vc() {

	vc_map(array(
		'name' => 'Blog',
		'base' => 'ecosesa_blog',
		'category' => 'Ecosesa',
		'params' => array(
            array(
				"type" => "textfield",
				"heading" => "Titulo",
				"param_name" => "blog_title",
				"value" => "Blog"
            ),
            array(
				"type" => "textfield",
				"heading" => "Enlace a las entradas",
				"param_name" => "blog_url",
				"value" => ""
            ),
            array(
				"type" => "textfield",
				"heading" => "Titulo del enlace",
				"param_name" => "blog_link_title",
				"value" => "VER TODAS LAS NOTICIAS"
			)
		)
	));
}

add_action('vc_before_init', 'ecosesa_blog_vc');