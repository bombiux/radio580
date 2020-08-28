
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				the_custom_logo();
			?>
		</div>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'menu-principal',
			'container'         => '',
			'menu_class'		=> 'asideList'

		));
		?>
		<span>
			<a href="fb.com">facebook</a>
		</span>
	</header>

	<main id="content" class="site-content">
		<input type="checkbox" id="myInput">
		<label for="myInput">
			<span class="bar top"></span>
			<span class="bar middle"></span>
			<span class="bar bottom"></span>
		</label>

