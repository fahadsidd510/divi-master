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

      <div class="ep-button-wrapper">
        <a class="ep-button" href="#">View All Episodes</a>
      </div>

      <div class="ep-listening-wrapper">
        <div class="ep-book-icon">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep-book-black.svg" alt="Learn About Adoption">
        </div>
        <div class="ep-listen-content">
          <h3>Prefer reading instead of listening?</h3>
          <p>Explore full podcast transcripts for detailed guidance and support.</p>
        </div>
        <a href="#" class="ep-transcript-btn">Read All Transcripts</a>
      </div>

    </div>
  </section>

  <!-- ── Topic Cards Section ── -->
  <section class="topic-cards">
    <div class="az-container">
      <div class="topic-cards-grid">
        <!-- Card 1 -->
        <div class="topic-card">
          <div class="topic-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/topic-adoption.svg" alt="Learn About Adoption">
          </div>
          <div class="topic-card-text">
            <h3>Learn About Adoption</h3>
            <p>Understand your options and the adoption Process.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="topic-card">
          <div class="topic-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/topic-stories.svg" alt="Hear Real Stories">
          </div>
          <div class="topic-card-text">
            <h3>Hear Real Stories</h3>
            <p>Listen to personal stories from birth mothers</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="topic-card">
          <div class="topic-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/topic-rights.svg" alt="Understand your Rights">
          </div>
          <div class="topic-card-text">
            <h3>Understand your Rights</h3>
            <p>Know your legal rights and the support available</p>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="topic-card">
          <div class="topic-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/topic-support.svg" alt="Get Emotional Support">
          </div>
          <div class="topic-card-text">
            <h3>Get Emotional Support</h3>
            <p>Receive guidance and empathy on your journey</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ── Podcast Community Section ── -->
  <section class="podcast-community">
    <div class="az-container">
      <div class="pc-wrapper">
        <!-- Left Content -->
        <div class="pc-content">
          <div class="pc-badge">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podcast-comunity-heading-mic.svg" alt="Mic icon">
            <span>Podcast Community</span>
          </div>
          <h2 class="pc-heading">Join Our Podcast Community</h2>
          <h3 class="pc-subheading">Birth Mother Matters in Adoption Radio</h3>
          <p class="pc-description">
            Learn adoption from every perspective.<br>
            Real stories . Real insights . Real adoption journeys
          </p>
          <div class="pc-badges-row">
            <div class="pc-pill">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/gift.svg" alt="Free">
              <span>100% Free</span>
            </div>
            <div class="pc-pill">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/cost.svg" alt="No Cost">
              <span>No Cost</span>
            </div>
            <div class="pc-pill">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/no-fees.svg" alt="No Fees">
              <span>No Fees</span>
            </div>
          </div>
          <div class="pc-follow-bar">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/follow-us-bell.svg" alt="Bell icon">
            <div class="pc-follow-text">
              <strong>Follow Us to get Notified</strong>
              <span>We'll let you know when new episode are released!</span>
            </div>
          </div>
        </div>
        <!-- Right Phone Mockup -->
        <div class="pc-phone">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Mbl.png" alt="Podcast app on phone">
        </div>
      </div>
    </div>
  </section>
  <!-- ── Listen On Your Favourite Platform ── -->
  <section class="listen-platforms">
    <div class="az-container">
      <div class="lp-header">
        <div class="lp-heading-row">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphones-icon.svg" alt="Headphones">
          <h2>Listen on your Favourite Platform</h2>
        </div>
        <p>Choose your preferred app and start listening today!</p>
      </div>
      <div class="lp-inner">
        <div class="lp-grid">
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/itunes.png" alt="iTunes">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/spotify.png" alt="Spotify">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/castbox.png" alt="Castbox">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/stitcher.png" alt="Stitcher">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/radiopublic.png" alt="RadioPublic">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/pocketcasts.png" alt="Pocket Casts">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/googleplay.png" alt="Google Play">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/blubrry.png" alt="Blubrry">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podbean.png" alt="PodBean">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podchaser.png" alt="Podchaser">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ipodder.png" alt="iPodder">
          </a>
          <a href="#" class="lp-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/tunein.png" alt="TuneIn">
          </a>
        </div>
        <a href="#" class="lp-youtube">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/youtube.png" alt="YouTube">
          <span>YouTube Channel: AZ Pregnancy Help</span>
        </a>
      </div>
    </div>
  </section>
  <!-- ── We're Here For You Section ── -->
  <section class="here-for-you" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/here-for-you-bg.webp');">
    <div class="az-container">

      <!-- Top: Badge + Heading + Subtext + Schedule -->
      <div class="hfy-top">
        <div class="hfy-badge">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphones-icon.svg" alt="Headphones">
          <span>We're Here For You</span>
        </div>
        <h2>We're Here for You -<br>Every Step of Your<br><span>Adoption Journey</span></h2>
        <p class="hfy-tagline">Real Stories. Real Support. Real Choices.</p>
        <div class="hfy-schedule">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/calendar-icon.svg" alt="Calendar">
          <div>
            <strong>New Podcast Episodes</strong>
            <span>Every <em>Tuesday &amp; Friday</em> at <em>4:30 PM</em></span>
          </div>
        </div>
      </div>

      <!-- Support heading -->
      <div class="hfy-support-label">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/heart-peach.svg" alt="Heart">
        <h3>How we support you</h3>
      </div>

      <!-- 4 Support Cards -->
      <div class="hfy-cards">
        <div class="hfy-card">
          <div class="hfy-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/support-financial.svg" alt="Financial Assistance">
          </div>
          <h4>Financial Assistance</h4>
          <p>Help when you need it most.</p>
        </div>
        <div class="hfy-card">
          <div class="hfy-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/support-housing.svg" alt="Housing &amp; Food Support">
          </div>
          <h4>Housing &amp; Food Support</h4>
          <p>Safe housing and basic needs.</p>
        </div>
        <div class="hfy-card">
          <div class="hfy-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/support-pregnancy.svg" alt="Pregnancy Options Guidance">
          </div>
          <h4>Pregnancy Options Guidance</h4>
          <p>Explore your options with care.</p>
        </div>
        <div class="hfy-card">
          <div class="hfy-card-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/support-247.svg" alt="24/7 Call &amp; Text Support">
          </div>
          <h4>24/7 Call &amp; Text Support</h4>
          <p>We're always here to listen.</p>
        </div>
      </div>

      <!-- About Us Bar -->
      <div class="hfy-about">
        <div class="hfy-about-left">
          <div class="hfy-about-badge">About Us</div>
          <p>AZ Pregnancy Help supports birth mothers across Arizona with <span>safe, confidential, and free adoption support services.</span></p>
        </div>
        <a href="tel:6239654112" class="hfy-about-cta">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/phone-white.svg" alt="Phone">
          <div>
            <span>Call or Text Us Anytime</span>
            <strong>623-965-4112</strong>
          </div>
          <div class="hfy-about-247">24/7</div>
        </a>
      </div>

      <!-- You're Not Alone Bar -->
      <div class="hfy-alone">
        <div class="hfy-alone-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/not-alone-mother.png" alt="Mother and baby">
        </div>
        <div class="hfy-alone-text">
          <h3>You're Not Alone</h3>
          <p><strong>Facing an unplanned pregnancy?</strong></p>
          <p class="hfy-alone-highlight">We're here to support, guide, and walk with you through every step.</p>
        </div>
      </div>

    </div>
  </section>
</main>
<?php
get_footer( 'arizona' );
