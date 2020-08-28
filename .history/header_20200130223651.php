
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
			<div class="site-branding">
				<?php
					the_custom_logo();
				?>
			</div><!-- .site-branding -->
			<div class="menu-bar">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-principal',
					'container'         => 'nav',
					'container_class'   => 'menu-principal',
				));
				?>
				<!-- <?php
					/* get_search_form() */
				?> -->
			</div>
		</div>
		<div id="nav-container">
    <div class="bg"></div>
    <div class="button" tabindex="0">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </div>
    <div id="nav-content" tabindex="0">
      <ul>
        <li><a href="#0">Home</a></li>
        <li><a href="#0">Services</a></li>
        <li><a href="#0">Blog</a></li>
        <li><a href="#0">About</a></li>
        <li><a href="#0">Contact</a></li>
        <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li>
      </ul>
    </div>
  </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
