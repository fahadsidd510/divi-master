<?php
/**
 * Header: Arizona Landing Page
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/css/az-landing-css.css" type="text/css" media="all" />
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'az-landing-page' ); ?>>

<?php wp_body_open();
$page_id = get_the_ID(); 
$header_logo = get_field('az_header_logo', $page_id);
$az_header_pregnant_text = get_field('az_header_pregnant_text', $page_id);
$az_header_phone_1 = get_field('az_header_phone_1', $page_id); // This is link type
$az_header_phone_2 = get_field('az_header_phone_2', $page_id); // This is link type
$az_header_phone_3 = get_field('az_header_phone_3', $page_id); // This is link type
$header_bottom_text = get_field('header_bottom_text', $page_id);
?>

<header class="site-header">
  <div class="az-container">
    <div class="header-wrapper">

      <!-- Top row: logo + contact info side-by-side -->
      <div class="header-top-row">

        <!-- Logo -->
        <div class="logo-wrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( $header_logo['url'] ); ?>"
                 alt="<?php echo esc_attr( $header_logo['alt'] ); ?>">
          </a>
        </div>

        <!-- Top Bar -->
        <div class="top-header">
          <div class="top-header-content">
            <div class="phone-row">
              <div class="phone-left">
                <?php if ( $az_header_pregnant_text ) : ?>
                  <span class="label"><?php echo esc_html( $az_header_pregnant_text ); ?></span>
                <?php endif; ?>
                <?php if ( $az_header_phone_1 ) : ?>
                  <a href="<?php echo esc_url( $az_header_phone_1['url'] ); ?>" class="number">
                    <?php echo esc_html( $az_header_phone_1['title'] ); ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="phone-right">
                <?php if ( $az_header_phone_2 ) : ?>
                  <a href="<?php echo esc_url( $az_header_phone_2['url'] ); ?>" class="number">
                    <?php echo esc_html( $az_header_phone_2['title'] ); ?>
                  </a>
                <?php endif; ?>
                <span class="sep">|</span>
                <?php if ( $az_header_phone_3 ) : ?>
                  <a href="<?php echo esc_url( $az_header_phone_3['url'] ); ?>" class="number">
                    <?php echo esc_html( $az_header_phone_3['title'] ); ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
            <?php if ( $header_bottom_text ) : ?>
              <div class="location-row">
                <?php echo esc_html( $header_bottom_text ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>

      </div>

      <!-- Nav Bar -->
      <nav class="bottom-header">
        <input type="checkbox" id="nav-toggle-checkbox" class="nav-toggle-checkbox" hidden>
        <label for="nav-toggle-checkbox" class="nav-toggle" aria-label="Toggle menu">
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
        </label>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'az-landing-menu',
            'menu_class'     => 'nav-menu',
            'container'      => false,
            'fallback_cb'    => false,
        ) );
        ?>
      </nav>
    </div>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Only run dropdown toggle behavior on mobile/tablet
    var dropdownParents = document.querySelectorAll('.nav-menu .menu-item-has-children > a');

    dropdownParents.forEach(function(link) {
      link.addEventListener('click', function(e) {
        if (window.matchMedia('(max-width: 1023px)').matches) {
          e.preventDefault();
          e.stopPropagation();
          link.parentElement.classList.toggle('is-open-mobile');
        }
      });
    });

    // When hamburger is closed, collapse all open submenus
    var checkbox = document.getElementById('nav-toggle-checkbox');
    if (checkbox) {
      checkbox.addEventListener('change', function() {
        if (!checkbox.checked) {
          document.querySelectorAll('.menu-item-has-children.is-open-mobile').forEach(function(li) {
            li.classList.remove('is-open-mobile');
          });
        }
      });
    }
  });
</script>