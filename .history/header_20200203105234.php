
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
			<img src=" <?php get_template_directory_uri() . '/multimedia/' ?>" alt="">
		</div>
		<div id="nav-container">
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="dashicons dashicons-menu-alt3"></span>
			</div>
			
			<nav id="nav-content" tabindex="0">
				<p>Menú</p>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-principal',
					'container'         => ''
				));
				?>
				<span>
					<a href="fb.com">facebook</a>
				</span>
			</div>
		</div>
	</header>

	<main id="content" class="site-content">
