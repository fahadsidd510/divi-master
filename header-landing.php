<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/css/landing-css.css" type="text/css" media="all" />

	<?php wp_head();
	$page_id = get_the_ID();
	$landing_logo = get_field('landing_logo', $page_id);
	$header_text = get_field('add_header_text', $page_id);
	?>
</head>
<body <?php body_class(); ?>>
<div id="page-top-section">
<header>
	<div class="lp-container">
		<div class="header-wrapper">
				<?php if($landing_logo) : ?>
				<div class="landing-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img width="185" height="185" src="<?php echo $landing_logo['url']?>" alt="<?php echo $landing_logo['alt']?>" />
					</a>
				</div>
				<?php endif; ?>
				<div class="hamburger" id="menuToggle">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="landing-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'landing-menu',
						'container'      => false,
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => false,
					) );
					?>

				</div>
				<div class="header-cta-text">
					<?php
					if($header_text):
						echo $header_text;
					endif;
					?>
				</div>
		</div><!-- header-wrapper -->
	</div>
</header>

