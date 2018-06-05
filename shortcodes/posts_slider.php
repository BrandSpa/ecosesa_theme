<?php

function ra_posts_slider_sc( $atts ) {
	$at = shortcode_atts(array(), $atts);

  $query = new Wp_Query(array(
    'post_type' => 'post',
		'posts_per_page' => 9,
		'post_status' => 'publish'
  ));

	$posts = array_map(function($item) {
		$attachment_id = get_post_thumbnail_id($item->ID);
		$image =  wp_get_attachment_image_src($attachment_id, 'thumbnail');
		$item->post_thumbnail = $image[0]?:"";
		$post = wp_get_attachment_image_src($attachment_id, 'full');
		$item->post_image = $post[0]?:"";
		$item->post_categories = get_the_category($item->ID);
		$item->post_content = "";
		return $item;
	}, $query->get_posts());

	$props = array('posts' => $posts);

	ob_start();
	?>
		<!--ra-posts-slider-->
		<div class="ra-posts-slider" data-props='<?php echo json_encode($props) ?>'></div>
		<!--/ra-posts-slider-->
	<?php
	return ob_get_clean();
}

add_shortcode( 'ra_posts_slider', 'ra_posts_slider_sc' );
