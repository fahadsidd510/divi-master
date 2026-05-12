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
        <a class="ep-button" href="#">See all 265 episodes</a>
      </div>

      <div class="ep-listening-wrapper">
        <div class="ep-book-icon">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ep-book-black.svg" alt="Learn About Adoption">
        </div>
        <div class="ep-listen-content">
          <h3>Prefer reading instead of listening?</h3>
          <p>Explore full podcast transcripts for detailed guidance and support.</p>
          <a href="#">Read All Transcripts</a>
        </div>
        <!-- <a href="#" class="ep-transcript-btn">Read All Transcripts</a> -->
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
          <h2>Join Our Podcast <br>Community</h2>
          <h3>Birth Mother Matters in Adoption Radio</h3>
          <p>Learn adoption from every perspective.<br> Real stories . Real insights . Real adoption journeys</p>
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
      <!-- <div class="lp-header">
        <div class="lp-heading-row">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphones-icon.svg" alt="Headphones">
          <h2>Listen on your Favourite Platform</h2>
        </div>
        <p>Choose your preferred app and start listening today!</p>
      </div> -->
      <div class="lp-inner">
        <div class="lp-header">
          <div class="lp-heading-row">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphones-icon.svg" alt="Headphones">
            <h2>Listen on your Favourite Platform</h2>
          </div>
          <p>Choose your preferred app and start listening today!</p>
        </div>

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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphone-orange.svg" alt="Headphones">
          <span>We're Here For You</span>
        </div>
        <h2>We're Here for You -<br>Every Step of Your<br><span>Adoption Journey</span></h2>
        <p class="hfy-tagline">Real Stories. Real Support. Real Choices.</p>
      </div>
      <div class="hfy-schedule">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/calendar-icon.svg" alt="Calendar">
        <div>
          <p>New Podcast Episodes</p>
          <p>Every <span>Tuesday &amp; Friday</span> at <span>4:30 PM</span></p>
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
          <p>AZ Pregnancy Help supports birth mothers across Arizona <br>with <span>safe, confidential, and free adoption support services.</span></p>
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
      <!-- <div class="hfy-alone">
        <div class="hfy-alone-text">
          <h3>You're Not Alone</h3>
          <p><strong>Facing an unplanned pregnancy?</strong></p>
          <p class="hfy-alone-highlight">We're here to support, guide, and walk with you through every step.</p>
        </div>
      </div> -->

      <!-- You're Not Alone Bar -->
      <div class="hfy-alone">
        <div class="hfy-alone-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/mother-child.png" alt="Mother and child">
        </div>
        <div class="hfy-alone-text">
          <h3>You're Not Alone</h3>
          <p>Facing an unplanned pregnancy?</p>
          <p class="alone-orange-text">We're here to support, guide, and walk with you through every step.</p>
        </div>
        <div class="hfy-alone-leaf">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/leaf-image.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- ── Want to Learn More Section ── -->
  <!-- <section class="want-learn" style="background-image: url('<?php //echo get_stylesheet_directory_uri(); ?>/src/images/what-learn-background.png');"> -->
  <section class="want-learn">
    <div class="az-container">
      <div class="wl-wrapper">
        <div class="wl-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/blog-laptop.png" alt="Blog on laptop">
        </div>
        <div class="wl-content">
          <!-- <div class="wl-badge">
            <span>Keep Learning</span>
          </div> -->
          <div class="pc-badge pc-badge-transparent">
            <img src="http://az-pregnancy.local/wp-content/themes/divi-master/src/images/book-orange.svg" alt="Orange book icon">
            <span>KEEP LEARNING</span>
          </div>
          <h2>Want to Learn More?</h2>
          <p>Once you're done with the adoption Radio, <span>visit our Blog</span> for more information about birth mothers and the adoption process!</p>
          <div class="pc-badge pc-badge-orange">
            <img src="http://az-pregnancy.local/wp-content/themes/divi-master/src/images/book-white.svg" alt="White book icon">
            <span>Go to Blog</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ── Latest Episodes Section ── -->
  <section class="latest-episodes">
    <div class="az-container">
      <div class="le-inner">

        <!-- Top Header: Title + Explore the Podcast Card -->
        <div class="le-header">
          <div class="le-header-left">
            <div class="pc-badge pc-badge-blog">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podcast-comunity-heading-mic.svg" alt="Mic icon">
              <span>LATEST EPISODES</span>
            </div>
            <h2>Real Stories. Real Voices.<br><span>Real Adoption Journeys.</span></h2>
            <p>Listen, Learn, and feel, supported. New episodes added regularly!</p>
          </div>

          <div class="le-header-right">
            <div class="le-explore-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/headphone-orange.svg" alt="Headphones">
            </div>
            <div class="le-explore-text">
              <h3>Explore the Podcast</h3>
              <p>Every episode brings you closer to understanding adoption.</p>
            </div>
          </div>
        </div>

        <!-- Episode Cards Grid -->
        <div class="le-grid">

          <!-- Card 1 -->
          <article class="le-card">
            <div class="le-thumb">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Growing-Up-Adopted-s3-220-980x703.png" alt="Growing Up Adopted">
              <div class="le-thumb-badge">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/mike.svg" alt="">
                <span>EPISODE 220</span>
              </div>
            </div>
            <h3>Birth Mother Matters in Adoption<br>S3, Ep 220: Growing Up Adopted</h3>
            <div class="le-meta">
              <span class="le-author">by Cairs Content Team</span>
              <span class="le-date">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/le-date.svg" alt="">
                Jun 23, 2025
              </span>
            </div>
            <div class="le-tags">
              <p>Adoption, Adoption Agency, Adoption Choices of Arizona, Adoption Radio, AZ Pregnancy Help, Building Arizona Families, Uncategorized</p>
            </div>
            <div class="le-excerpt">
              <p>Kelly: Welcome and thank you for joining us on Birth Mother Matters in Adoption with Kelly Rourke-Scarry, where we delve into the issues of adoption from every angle of the adoption triad. Kelly is the executive director, president, and co-founder of Building Arizona...</p>
            </div>
            <div class="le-actions">
              <a href="#" class="le-listen-btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/microphone-white.svg" alt="">
                Listen Now
              </a>
              <a href="#" class="le-read-more">
                Read More
                <span>&#8250;</span>
              </a>
            </div>
            <div class="le-waveform">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/waveform.svg" alt="Audio waveform">
            </div>
          </article>

          <!-- Card 2 -->
          <article class="le-card">
            <div class="le-thumb">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Growing-Up-Adopted-s3-220-980x703.png" alt="ICPC with Lisa Simpson">
            </div>
            <h3>Birth Mother Matters in Adoption<br>Podcast - ICPC with Lisa Simpson</h3>
            <div class="le-meta">
              <span class="le-author">by Cairs Content Team</span>
              <span class="le-date">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="">
                Jun 23, 2025
              </span>
            </div>
            <div class="le-tags">
              <p>Adoption, Adoption Agency, Adoption Choices of Arizona, Adoption Radio, AZ Pregnancy Help, Building Arizona Families, Uncategorized</p>
            </div>
            <div class="le-excerpt">
              <p>Ron Raines: Welcome and thank you for joining us on Birth Mother Matters in Adoption with Kelly Rourke-Scarry and me, Ron Raines, where we delve into the issues of adoption from every angle of the adoption triad. Kelly Rourke-Scarry: Do what's best for your kid and...</p>
            </div>
            <div class="le-actions">
              <a href="#" class="le-listen-btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/microphone-white.svg" alt="">
                Listen Now
              </a>
              <a href="#" class="le-read-more">
                Read More
                <span>&#8250;</span>
              </a>
            </div>
            <div class="le-waveform">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/waveform.svg" alt="Audio waveform">
            </div>
          </article>

          <!-- Card 3 -->
          <article class="le-card">
            <div class="le-thumb">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Growing-Up-Adopted-s3-220-980x703.png" alt="Adoption All Around Us">
            </div>
            <h3>Birth Mother Matters in Adoption<br>S4, Episode 233: Adoption All Around Us</h3>
            <div class="le-meta">
              <span class="le-author">by Cairs Content Team</span>
              <span class="le-date">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="">
                Jun 18, 2025
              </span>
            </div>
            <div class="le-tags">
              <p>Adoption, Adoption Agency, Adoption Choices of Arizona, Adoption Radio, AZ Pregnancy Help, Building Arizona Families, Uncategorized</p>
            </div>
            <div class="le-excerpt">
              <p>Narrator/Host: Thanks for watching! Welcome and thank you for joining us on the Birth Mother Matters in Adoption podcast with Kelly Rourke, where we delve into the issues of adoption from every angle of the adoption triad. Narrator: Kelly is the Executive Director,...</p>
            </div>
            <div class="le-actions">
              <a href="#" class="le-listen-btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/microphone-white.svg" alt="">
                Listen Now
              </a>
              <a href="#" class="le-read-more">
                Read More
                <span>&#8250;</span>
              </a>
            </div>
            <div class="le-waveform">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/waveform.svg" alt="Audio waveform">
            </div>
          </article>

        </div>

        <!-- Pagination -->
        <div class="le-pagination">
          <a href="#" class="le-page-btn le-page-prev">
            <span>&#8592;</span>
            Older Entries
          </a>
          <span class="le-page-count">1 of 12</span>
          <a href="#" class="le-page-btn le-page-next">
            Next Entries
            <span>&#8594;</span>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- ── Our Partners & Sponsors Section ── -->
  <section class="partners-sponsors">
    <div class="az-container">
      <div class="ps-header">
        <h2>Our Partners &amp; Sponsors</h2>
        <span class="ps-divider"></span>
      </div>
      <div class="ps-logos">
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/realwave.png" alt="Real Wave">
        </a>
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/loudnick.png" alt="LoudNick">
        </a>
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/jobline.png" alt="Job Line">
        </a>
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/itch.png" alt="Pitch">
        </a>
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/crosswill.png" alt="Crosswill">
        </a>
        <a href="#" class="ps-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/gabo.png" alt="GABO">
        </a>
      </div>
    </div>
  </section>
  <!-- ── Communities Across Arizona Section ── -->
  <section class="communities">
    <div class="az-container">

      <!-- Top: Heading + Arizona Image -->
      <div class="comm-top">
        <div class="comm-top-content">
          <div class="comm-badge">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location-pin-white.svg" alt="Pin">
            <span>Arizona Communities We Serve</span>
          </div>
          <h2>Proudly Supporting<br><span>Communities Across Arizona</span></h2>
          <p>Find support near you, We're here for birth mothers throughout Arizona.</p>
        </div>
        <div class="comm-top-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/heart-leave.png" alt="Arizona with heart">
        </div>
      </div>

      <!-- Bottom: We Serve Cities Card -->
      <div class="comm-serve">
        <div class="comm-serve-header">
          <div class="comm-serve-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location.svg" alt="Pin">
          </div>
          <div class="comm-serve-heading">
            <h3>WE SERVE: <span>25+ Arizona Cities</span></h3>
            <p>Select your city to learn more or get local support.</p>
          </div>
        </div>

        <ul class="comm-cities">
          <li><a href="#">Phoenix</a></li>
          <li><a href="#">Peoria</a></li>
          <li><a href="#">Avondale</a></li>
          <li><a href="#">Yavapai</a></li>
          <li><a href="#">Gila</a></li>
          <li><a href="#">Tucson</a></li>
          <li><a href="#">Tempe</a></li>
          <li><a href="#">Flagstaff</a></li>
          <li><a href="#">Mohave</a></li>
          <li><a href="#">Santa Cruz</a></li>
          <li><a href="#">Mesa</a></li>
          <li><a href="#">Surprise</a></li>
          <li><a href="#">Casa Adobes</a></li>
          <li><a href="#">Yuma</a></li>
          <li><a href="#">Graham</a></li>
          <li><a href="#">Chandler</a></li>
          <li><a href="#">San Tan Valley</a></li>
          <li><a href="#">Queen Creek</a></li>
          <li><a href="#">Coconino</a></li>
          <li><a href="#">La Paz</a></li>
          <li><a href="#">Gilbert</a></li>
          <li><a href="#">Yuma</a></li>
          <li><a href="#">Maricopa</a></li>
          <li><a href="#">Cochise</a></li>
          <li><a href="#">Greeniee</a></li>
          <li><a href="#">Glendale</a></li>
          <li><a href="#">Goodyear</a></li>
          <li><a href="#">Pima</a></li>
          <li><a href="#">Navajo</a></li>
          <li><a href="#">Scottsdale</a></li>
          <li><a href="#">Buckeye</a></li>
          <li><a href="#">Pinal</a></li>
          <li><a href="#">Apache</a></li>
        </ul>
      </div>

    </div>
  </section>

  <!-- ── Footer Section: Get In Touch & Explore ── -->
  <section class="footer-explore">
    <div class="az-container">

      <!-- Top: Heading -->
      <div class="fe-top">
        <div class="fe-badge">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location-pin-white.svg" alt="Pin">
          <span>Get In Touch &amp; Explore</span>
        </div>
        <h2>We're Here to Help<br><span>&amp; Walk With You</span></h2>
        <p>Reach out, explore helpful resources, or learn more about adoption.</p>
      </div>

      <!-- 3-Column Grid -->
      <div class="fe-grid">

        <!-- Column 1: Map + Address + Adoptive Parent CTA -->
        <div class="fe-col fe-col-left">

          <!-- Map Card -->
          <div class="fe-card fe-map-card">
            <div class="fe-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.5!2d-112.1!3d33.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDMwJzAwLjAiTiAxMTLCsDA2JzAwLjAiVw!5e0!3m2!1sen!2sus!4v1234567890"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address>
              <p>8433 N Black Canyon Hwy</p>
              <p>Building 6, Suite 152</p>
              <p>Phoenix, AZ 85021</p>
            </address>
          </div>

          <!-- Adoptive Parent CTA Card -->
          <div class="fe-card fe-parent-card">
            <div class="fe-parent-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/heart-home.png" alt="Heart with home">
            </div>
            <h3>Interested in becoming<br>an adoptive parent?</h3>
            <a href="#" class="fe-learn-btn">
              Learn More
              <span>&#8250;</span>
            </a>
            <div class="fe-baf-logo">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/building-arizona-families-logo.png" alt="Building Arizona Families">
            </div>
          </div>

        </div>

        <!-- Column 2: Useful Links -->
        <div class="fe-col">
          <div class="fe-card fe-links-card">
            <div class="fe-card-header">
              <div class="fe-card-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/link-chain-svgrepo-com.svg" alt="Link">
              </div>
              <h3>Useful Links</h3>
            </div>
            <ul class="fe-links">
              <li><a href="#"><span class="fe-dot"></span>Placing Your Baby for Adoption<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Adoption Process<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Arizona Crisis Pregnancy<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Domestic Violence &amp; Adoption<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Drug Use &amp; Adoption<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Pregnant &amp; Incarcerated<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Homeless &amp; Adoption<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Teenage Pregnancies &amp; Adoption<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Financial Assistance<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Adoption in 10 Steps<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Opt-out preferences<span class="fe-arrow">&#8250;</span></a></li>
              <li><a href="#"><span class="fe-dot"></span>Privacy Policy<span class="fe-arrow">&#8250;</span></a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: Contact Us -->
        <div class="fe-col">
          <div class="fe-card fe-contact-card">
            <h3 class="fe-contact-title">Contact Us</h3>

            <!-- Phone numbers -->
            <div class="fe-phones">
              <div class="fe-phone-item">
                <span class="fe-phone-label">Telephone</span>
                <a href="tel:6236954112" class="fe-phone-num">623.695.4112</a>
              </div>
              <div class="fe-phone-item">
                <span class="fe-phone-label">Tool Free</span>
                <a href="tel:8003409665" class="fe-phone-num">800.340.9665</a>
              </div>
              <div class="fe-phone-item">
                <span class="fe-phone-label">Fax</span>
                <a href="tel:6232186104" class="fe-phone-num">623.218.6104</a>
              </div>
            </div>

            <!-- Text -->
            <div class="fe-contact-section">
              <div class="fe-section-heading">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Chat.svg" alt="Chat">
                <h4>Text</h4>
              </div>
              <div class="fe-text-row">
                <span class="fe-text-label">Birth Mothers:</span>
                <a href="sms:6239654112" class="fe-text-num">623.965.4112</a>
              </div>
              <div class="fe-text-row">
                <span class="fe-text-label">Espanol:</span>
                <a href="sms:6236969538" class="fe-text-num">623.696.9538</a>
              </div>
            </div>

            <!-- Email -->
            <div class="fe-contact-section">
              <div class="fe-section-heading">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/envolope.svg" alt="Email">
                <h4>Email</h4>
              </div>
              <a href="#" class="fe-message-btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/plane.svg" alt="Send">
                Send a Message
              </a>
            </div>

            <!-- Social icons -->
            <div class="fe-socials">
              <a href="#" class="fe-social">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/facebook-svgrepo-com.svg" alt="Facebook">
              </a>
              <a href="#" class="fe-social">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/instagram-svgrepo-com.svg" alt="Instagram">
              </a>
              <a href="#" class="fe-social">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/twitter-svgrepo-com.svg" alt="Twitter">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Footer Bottom CTA ── -->
  <section class="footer-cta">
    <div class="az-container">
      <h2>Need someone to talk to right now?</h2>
      <a href="tel:6239654112">Call Us</a>
      <a href="#">Chat With Us</a>
    </div>
  </section>
</main>
<?php
get_footer( 'arizona' );
