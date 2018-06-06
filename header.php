<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#6031ba">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title() ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/aktiv.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/gotham_rounded.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/client/dist/index.css?v=<?php echo filemtime(get_template_directory() . '/client/dist/index.css') ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=<?php echo filemtime(get_template_directory() . '/style.css') ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/page.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--wordpress files-->
	<?php wp_head(); ?>
	<!-- /wordpress files-->
		<script>
      function onLoad(cb) {
        if (window.addEventListener)
          window.addEventListener("load", cb, false);
        else if (window.attachEvent) {
          window.attachEvent("onload", cb);
        } else {
          window.onload = cb;
        }
      }
  </script>

</head>
<body>

<header class="app-header">
	<div class="container">
		<a href="/" class="">
			<?php  require('templates/logo.php') ?>
		</a>
		<?php if ( is_active_sidebar( 'header_widget' ) ) : ?>
			<div class="header__widget">
				<?php dynamic_sidebar( 'header_widget' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>

			<?php
				$nav = wp_nav_menu(array(
						'theme_location' => 'header',
						'menu_class' => 'app-header__menu',
						'menu_id' => '',
						'container' => false,
						'echo' => false
					));

				echo clean_menu($nav);
   	 ?>

		 <?php
		 	$menuProps = array(
				'links' => getMenuArr('header')
			);
		 ?>

		 <div class="ra-menu-mobile" data-props='<?php echo json_encode($menuProps) ?>'></div>
	</div>
</header>

