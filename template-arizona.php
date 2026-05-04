<?php
/**
 * Template Name: Arizona Landing Page
 *
 * Fully isolated page template:
 *   - Loads header-arizona.php  (custom header)
 *   - Loads footer-arizona.php  (custom footer)
 *   - Strips ALL theme & plugin CSS / JS (handled in functions.php)
 *   - Loads ONLY az-landing-css.css + az-landing-js.js
 *
 * Location: /wp-content/themes/YOUR-CHILD-THEME/template-arizona.php
 *
 * Usage:
 *   WP Admin → Pages → Edit page → Page Attributes → Template → "Arizona Landing Page"
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}

get_header( 'arizona' );
?>

<!-- ══════════════════════════════════════
     SECTION 2: HERO BANNER
     ══════════════════════════════════════ -->
<section class="hero-banner" style="background-image: url('http://az-pregnancy.local/wp-content/uploads/2026/05/az-banner.webp');">

  <!-- Background -->
  <!-- <div class="bg-image">
    <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/az-banner.webp"
         alt="Pregnant woman smiling"
         loading="eager">
  </div> -->
  <!-- <div class="bg-overlay"></div> -->

  <!-- Content -->
  <div class="az-container">
    <div class="banner-content">
      <div class="banner-inner">

        <div class="podcast-icon">
          <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/Group-9457.svg"
               alt="Podcast microphone icon">
        </div>

        <h1 class="banner-heading">You Are Not Alone</h1>

        <p class="banner-subtext">
          Real stories, guidance and support<br>
          for your adoption journey.
        </p>

        <div class="banner-ctas">
          <a href="#" class="btn-podcast btn-podcast-blue">
            <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/Path-8695.svg" alt="">
            Listen to Podcasts
          </a>

          <a href="#" class="btn-podcast btn-podcast-orange">
            <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/Group-9399-1.svg" alt="">
            Read Transcripts
          </a>
          
        </div>

      </div>
    </div>
  </div>

</section>

<?php
get_footer( 'arizona' );