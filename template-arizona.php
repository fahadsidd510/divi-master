<?php
/**
 * Template Name: Arizona Landing Page
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header( 'arizona' );
?>

<!-- Hero Banner Section -->
<section class="hero-banner" style="background-image: url('http://az-pregnancy.local/wp-content/uploads/2026/05/az-banner.webp');">
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
        <!-- <div class="banner-ctas">
          <a href="#" class="btn-podcast btn-podcast-blue">
            <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/Path-8695.svg" alt="">
            Listen to Podcasts
          </a>
          <a href="#" class="btn-podcast btn-podcast-orange">
            <img src="http://az-pregnancy.local/wp-content/uploads/2026/05/Group-9399-1.svg" alt="">
            Read Transcripts
          </a>
        </div> -->
        <div class="az-cta-btn-group">
          <button class="az-cta-btn az-cta-btn--podcast">
            <span class="az-cta-btn__icon icon-play"></span>
            Listen to Podcasts
          </button>
          <button class="az-cta-btn az-cta-btn--transcript">
            <span class="az-cta-btn__icon icon-book"></span>
            Read Transcripts
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PODCAST SECTION (Main Content Area)
     ============================================================ -->
<main class="podcast-section">

  <!-- ── Section 1: Birth Mother Intro ── -->
  <section class="birth-podcast">
    <div class="az-container">
      <div class="birth-podcast-inner az-content">
        <h2>Birth Mother Matters in Adoption is a free podcast created</h2>
          <p>to support, guide and empower women considering adoption.</p>
      </div>
    </div>
  </section>

  <!-- ── Section 2: Three Category Cards ── -->
  <section class="category-cards">
    <div class="az-container">
      <div class="category-cards-grid">
        <!-- Card 1 -->
        <div class="category-card">
          <div class="category-card-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/real-stories.png" alt="Real Stories" width="75" height="70">
          </div>
          <h3>Real Stories</h3>
          <p>Hear true stories from other birth mothers.</p>
        </div>
        <!-- Card 2 -->
        <div class="category-card">
          <div class="category-card-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/support-guidance.png" alt="Support & Guidance" width="75" height="70">
          </div>
          <h3>Support &amp; Guidance</h3>
          <p>Get advice from adoption experts.</p>
        </div>
        <!-- Card 3 -->
        <div class="category-card">
          <div class="category-card-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/learn-adoption.png" alt="Learn About Adoption" width="75" height="70">
          </div>
          <h3>Learn About Adoption</h3>
          <p>Understand the adoption process.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Section 3: Listen & Explore Episodes ── -->
  <section class="explore-episodes">
    <div class="az-container">
      <div class="explore-episodes-intro az-content">
        <h2 class="section-heading-script">Listen &amp; Explore More Episodes</h2>
        <p>Helpful conversations and real stories to guide you through your Adoption Journey.</p>
      </div>

      <div class="ep-cards-grid">
        <!-- ep-card 1 -->
        <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>
        
        
        <!-- ep-card 2 -->
         <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>

        <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>

        <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>

        <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>

        <div class="ep-card">
          <div class="ep-card-top">
            <div class="ep-card-thumb">
              <!-- Replace src with your actual image path -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep_cover1.png" alt="Birth Mother Matters in Adoption">
            </div>
            <div class="ep-card-info">
              <div class="ep-card-badge">S4 <span class="sep">|</span> E243</div>
              <div class="ep-card-title">Birth Mother Matters in Adoption</div>
              <div class="ep-card-subtitle">Support for Birth Mothers</div>
            </div>
          </div>
          <div class="ep-card-body">
            <p class="ep-card-description">Birth Mother Matters in Adoption<br>by <span class="author">Kelly Rourke &amp; Ron Reigns</span></p>
          </div>
          <div class="ep-card-meta">
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
              <span>13:02 Min</span>
            </div>
            <div class="meta-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
              <span>Jul 22, 2025</span>
            </div>
          </div>
          <div class="ep-card-actions">
            <button class="ep-btn ep-btn-listen">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
              Listen to Podcasts
            </button>
            <button class="ep-btn ep-btn-read">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
              Read Transcripts
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>
<?php
get_footer( 'arizona' );
