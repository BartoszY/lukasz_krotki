<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php 
		if ( is_single() || is_page() ) {
			if (get_the_excerpt()) echo strip_tags(get_the_excerpt());
			else {
				bloginfo('description');
			}
		} else {
			bloginfo('description');
		}
	?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="custom-cursor"></div>

	 
	<header class="header">
		<div class="container">
			<a href="<?= home_url() ?>" class="text-logo">
				<?php bloginfo('name'); ?>
      </a>

			<nav class="header__nav">
				<?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'main-menu', 'menu_class' => 'header__menu', 'container' => '')); ?>
			</nav>

			<button class="burger" data-burger>
				<span></span>
				<span></span>
			</button>
		</nav>
	</header>
