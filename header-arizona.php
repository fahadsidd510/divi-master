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

<?php wp_body_open(); ?>

<header class="site-header">
  <div class="az-container">
    <div class="header-wrapper">

      <!-- Top row: logo + contact info side-by-side -->
      <div class="header-top-row">

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

      </div>

      <!-- Nav Bar -->
      <nav class="bottom-header">
        <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
        </button>
        <ul class="nav-menu">
          <li class="has-dropdown">
            <a href="https://azpregnancyhelp.com/">
              I'm Pregnant
              <span class="arrow" aria-hidden="true">
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </a>
            <ul class="sub-menu">
              <li><a href="https://azpregnancyhelp.com/">I'm Pregnant</a></li>
              <li><a href="https://azpregnancyhelp.com/placing-your-baby-for-adoption-arizona/">Placing Your Baby for Adoption</a></li>
              <li><a href="https://azpregnancyhelp.com/arizona-adoption-plan/">Adoption Process</a></li>
              <li class="has-dropdown">
                <a href="https://azpregnancyhelp.com/arizona-crisis-pregnancy/">
                  Unplanned &amp; Crisis Pregnancies
                  <span class="arrow arrow-side" aria-hidden="true">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                      <path d="M1 1L6 6L1 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </a>
                <ul class="sub-menu sub-menu-deep">
                  <li><a href="https://azpregnancyhelp.com/pregnant-womens-shelter-domestic-violence/">Domestic Violence &amp; Adoption</a></li>
                  <li><a href="https://azpregnancyhelp.com/unwanted-pregnancy-options-in-arizona-substance-use-and-azadoption/">Drug Use &amp; Adoption</a></li>
                  <li><a href="https://azpregnancyhelp.com/pregnant-arizona-adoption-when-in-jail-or-prison/">Pregnant &amp; Incarcerated</a></li>
                  <li><a href="https://azpregnancyhelp.com/homeless-pregnant-adoption-help-arizona/">Homeless &amp; Adoption</a></li>
                  <li><a href="https://azpregnancyhelp.com/teenage-pregnancies-and-adoption/">Teenage Pregnancies &amp; Adoption</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="has-dropdown">
            <a href="https://azpregnancyhelp.com/baby-is-here/">
              Baby is Here
              <span class="arrow" aria-hidden="true">
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </a>
            <ul class="sub-menu">
              <li><a href="https://azpregnancyhelp.com/baby-is-here/">Baby is Here</a></li>
              <li><a href="https://azpregnancyhelp.com/adoption-plan-placing-baby-for-adoption/">DCS/CPS Involvement</a></li>
            </ul>
          </li>

          <li><a href="https://azpregnancyhelp.com/find-a-family-for-my-baby/">Waiting Families</a></li>

          <li class="has-dropdown">
            <a href="https://azpregnancyhelp.com/arizona-adoption-agency-give-my-baby-up-for-adoption/">
              About Us
              <span class="arrow" aria-hidden="true">
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </a>
            <ul class="sub-menu">
              <li><a href="https://azpregnancyhelp.com/adoption-agency-give-baby-up-for-adoption-arizona/#staff">Staff</a></li>
              <li><a href="https://azpregnancyhelp.com/adoption-agency-commitment/">Adoption Agency Commitment</a></li>
              <li><a href="https://azpregnancyhelp.com/who-do-we-work-with/">WHO do we work with</a></li>
            </ul>
          </li>

          <li class="has-dropdown">
            <a href="https://azpregnancyhelp.com/arizona-resources-for-pregnant-women-adopting-a-baby/">
              Resources
              <span class="arrow" aria-hidden="true">
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                  <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </a>
            <ul class="sub-menu">
              <li><a href="https://azpregnancyhelp.com/arizona-adoption-agency-give-my-baby-up-for-adoption/dealing-with-unplanned-pregnancy-arizona-testimonials/">Testimonials</a></li>
              <li><a target="_blank" href="https://birthmothermatterspodcast.com">Birth Mother Matters</a></li>
              <li><a href="https://azpregnancyhelp.com/crisis-pregnancies-arizona-unplanned-pregnancy-blog/">Adoption Blog</a></li>
              <li><a href="https://azpregnancyhelp.com/pregnant-placing-baby-for-adoption-in-arizona-podcasts/">Adoption Podcast</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var toggle = document.querySelector('.nav-toggle');
  var menu = document.querySelector('.nav-menu');

  if (toggle && menu) {
    toggle.addEventListener('click', function(e) {
      e.stopPropagation();
      var open = menu.classList.toggle('is-open');
      toggle.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  var dropdownItems = document.querySelectorAll('.has-dropdown > a');
  dropdownItems.forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (window.matchMedia('(max-width: 1024px)').matches) {
        e.preventDefault();
        e.stopPropagation();
        var parent = link.parentElement;
        parent.classList.toggle('is-expanded');
      }
    });
  });

  document.addEventListener('click', function(e) {
    if (!e.target.closest('.bottom-header') && menu && menu.classList.contains('is-open')) {
      menu.classList.remove('is-open');
      toggle.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
});
</script>