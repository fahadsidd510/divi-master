<?php
/**
 * Header: Arizona Landing Page
 * Called via get_header( 'arizona' ) in template-arizona.php
 * Outputs: <head> + opening <body> + header markup
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO -->
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/css/az-landing-css.css" type="text/css" media="all" />
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'az-landing-page' ); ?>>

<?php wp_body_open(); ?>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="site-header">
  <div class="az-container">
    <div class="header-wrapper">

      <!-- Logo -->
      <div class="logo-wrapper">
        <a href="/">
          <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/AZ-pregnancy-logo.png"
               alt="AZ Pregnancy Help — Adoption is a beautiful choice">
        </a>
      </div>

      <!-- Top Bar -->
      <div class="top-header">
        <div class="top-header-content">
          <div class="phone-row">
            <div class="phone-left">
              <span class="label">Pregnant?</span>
              <a href="tel:6236954112" class="number">623.695.4112 (Call/Text)</a>
            </div>
            <div class="phone-right">
              <a href="tel:6239364729">623.936.4729</a>
              <span class="sep">|</span>
              <a href="tel:8003409665">800.340.9665</a>
            </div>
          </div>
          <div class="location-row">Phoenix, Arizona | Serving Statewide</div>
        </div>
      </div>

      <!-- Nav Bar -->
      <nav class="bottom-header">
		<ul class="nav-menu">
          <li><a href="#">I'M PREGNANT <span class="arrow">▾</span></a></li>
          <li><a href="#">BABY IS HERE <span class="arrow">▾</span></a></li>
          <li><a href="#">WAITING FAMILIES </a></li>
          <li><a href="#">ABOUT US </a></li>
          <li><a href="#">RESOURCES </a></li>
        </ul>
      </nav>

    </div>
  </div>
</header>