<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fun-zavod
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fun-zavod' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding" id="w-header">
            <div id="headerLine"></div>
            <div id = "logo">
			<?php
			the_custom_logo();
			?>
            </div>
            <div id="titles">
            <?php
			if ( is_front_page() && is_home() ) : ?>
				    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <?php else : ?>
				    <p class="site-title"><?php bloginfo( 'name' ); ?></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
            </div>
            <div id="h-contact"> <img src="/wp-content/themes/fun-zavod/img/viber_icon.png" alt="viber icon"/> <br/><span>+38 050 907 70 49</span></div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fun-zavod' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
