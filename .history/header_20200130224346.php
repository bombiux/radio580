
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
		<div class="header-container">
			
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<nav id="nav-content" tabindex="0">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-principal',
					'container'         => 'nav',
					'container_class'   => 'menu-principal',
				));
				?>
			</div>
		</div>
		<div id="nav-container">
			
			
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
