<?php
/**
 * Template Name: Arizona Landing Page
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header( 'arizona' );
$page_id = get_the_ID();
$az_banner_image = get_field('az_banner_image', $page_id);
$az_banner_mic_image = get_field('az_banner_mic_image', $page_id);
$ez_banner_content = get_field('ez_banner_content', $page_id);
$ez_banner_button_1 = get_field('ez_banner_button_1', $page_id);
$ez_banner_button_2 = get_field('ez_banner_button_2', $page_id);

$birth_mother_content = get_field('birth_mother_content', $page_id);
$birth_mother_feature_repeater = get_field('birth_mother_feature', $page_id);
$episodes_content = get_field('episodes_content', $page_id);

$reading_book_icon = get_field('reading_book_icon', $page_id);
$reading_content = get_field('reading_content', $page_id);
$reading_feature_repeater = get_field('reading_feature', $page_id);

$podcast_top_button = get_field('podcast_top_button', $page_id);
$podcast_top_content = get_field('podcast_content', $page_id);
$podcast_image = get_field('podcast_image', $page_id);
$podcast_offers_repeater = get_field('podcast_offers', $page_id);
$podcast_follow_button_heading = get_field('podcast_follow_button_heading', $page_id);
$podcast_follow_button_text = get_field('podcast_follow_button_text', $page_id);
$podcast_follow_button_link = get_field('podcast_follow_button_link', $page_id);
$platform_icon = get_field('platform_icon', $page_id);
$platform_heading = get_field('platform_heading', $page_id);
$platform_sub_heading = get_field('platform_sub_heading', $page_id);
$platform_partners_repeater = get_field('platform_partners', $page_id);
$platform_youtube_icon = get_field('platform_youtube_icon', $page_id);
$platform_youtube_text_and_link = get_field('platform_youtube_text_and_link', $page_id);
$platform_journey_heading_icon = get_field('journey_heading_icon', $page_id);
$journey_heading = get_field('journey_heading', $page_id);
$journey_content = get_field('journey_content', $page_id);
$journey_background_image = get_field('journey_background_image', $page_id);
$journey_podcast_icon = get_field('journey_podcast_icon', $page_id);
$journey_podcast_text = get_field('journey_podcast_text', $page_id);
$support_heading_icon = get_field('support_heading_icon', $page_id);
$support_heading_text = get_field('support_heading_text', $page_id);
$support_features_repeater = get_field('support_features', $page_id);
$about_us_heading = get_field('about_us_heading', $page_id);
$about_us_content = get_field('about_us_content', $page_id);
$about_call_button_text = get_field('about_call_button_text', $page_id);
$about_us_button_icon = get_field('about_us_button_icon', $page_id);
$about_phone_number = get_field('about_phone_number', $page_id);
$about_button_number_text = get_field('about_button_number_text', $page_id);

$alone_image = get_field('alone_image', $page_id);
$alone_content = get_field('alone_content', $page_id);

$learning_image = get_field('learning_image', $page_id);
$learning_heading_button_icon = get_field('learning_heading_button_icon', $page_id);
$learning_heading_button_text = get_field('learning_heading_button_text', $page_id);
$learning_content = get_field('learning_content', $page_id);
$learning_blog_button = get_field('learning_blog_button', $page_id);

$stories_heading_icon = get_field('stories_heading_icon', $page_id);
$stories_heading_text = get_field('stories_heading_text', $page_id);
$stories_content = get_field('stories_content', $page_id);
$explore_content_image = get_field('explore_content_image', $page_id);
$explore_content = get_field('explore_content', $page_id);

$sponsors_heading = get_field('sponsors_heading', $page_id);
$sponsor_partners_repeater = get_field('sponsor_partners', $page_id);

$cities_top_heading = get_field('cities_top_heading', $page_id);
$cities_content = get_field('cities_content', $page_id);
$cities_image = get_field('cities_image', $page_id);
$cities_inner_heading_icon = get_field('cities_inner_heading_icon', $page_id);
$cities_inner_heading = get_field('cities_inner_heading', $page_id);
$cities_locations = get_field('cities_locations', $page_id);
?>

<!-- Hero Banner Section -->
<section class="hero-banner" style="background-image: url('<?php echo $az_banner_image['url']; ?>');">
  <div class="az-container">
    <div class="banner-content">
      <div class="banner-inner">
        <div class="podcast-icon">
          <?php if ( $az_banner_mic_image ) : ?>
            <img src="<?php echo esc_url( $az_banner_mic_image['url'] ); ?>"
                 alt="<?php echo esc_attr( $az_banner_mic_image['alt'] ); ?>">
          <?php endif; ?>
        </div>
        <?php if ($ez_banner_content) { echo $ez_banner_content;} ?>
        
        <div class="az-cta-btn-group">
          <?php if ($ez_banner_button_1) : ?>
          <a href="<?php echo $ez_banner_button_1['url']; ?>" target="<?php echo $ez_banner_button_1['target']; ?>">
            <button class="az-cta-btn az-cta-btn--podcast">
              <span class="az-cta-btn__icon icon-play"></span>
              <?php echo esc_html( $ez_banner_button_1['title'] ); ?>
            </button>
          </a>
          <?php endif; ?>
          <?php if ($ez_banner_button_2) : ?>
          <a href="<?php echo $ez_banner_button_2['url']; ?>" target="<?php echo $ez_banner_button_2['target']; ?>">
            <button class="az-cta-btn az-cta-btn--transcript">
              <span class="az-cta-btn__icon icon-book"></span>
              Read Transcripts
            </button>
          </a>
          <?php endif; ?>
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
   <?php if ($birth_mother_content) : ?>
  <section class="birth-podcast">
    <div class="az-container">
      <div class="birth-podcast-inner az-content">
        <?php echo $birth_mother_content; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ── Section 2: Three Category Cards ── -->
  <section class="category-cards">
    <div class="az-container">
    <?php if ( have_rows('birth_mother_feature', $page_id) ) : ?>
      <div class="category-cards-grid">
        <?php while ( have_rows('birth_mother_feature', $page_id) ) : the_row();
          $icon = get_sub_field('birth_mother_feature_icon');
          $content = get_sub_field('birth_mother_feature_content');
        ?>
          <div class="category-card">
            <?php if ( $icon ) : ?>
              <div class="category-card-img">
                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ?: $icon['title'] ); ?>" width="<?php echo esc_attr( $icon['width'] ); ?>" height="<?php echo esc_attr( $icon['height'] ); ?>">
              </div>
            <?php endif; ?>
            <?php if ( $content ) : ?>
              <?php echo $content; ?>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    </div>
  </section>

  <!-- ── Section 3: Listen & Explore Episodes ── -->
  <section class="explore-episodes">
    <div class="az-container">
      <?php if ($episodes_content) : ?>
       <div class="explore-episodes-intro az-content">
          <?php echo $episodes_content; ?>
        </div>
      <?php endif; ?>
      <?php echo do_shortcode('[rss_podcast_cards limit="6"]'); ?>
      <div class="ep-listening-wrapper">
        <?php if ($reading_book_icon) : ?>
        <div class="ep-book-icon">
          <img src="<?php echo esc_url( $reading_book_icon['url'] ); ?>" alt="<?php echo esc_attr( $reading_book_icon['alt'] ); ?>">
        </div>
        <?php 
        endif; 
        if ($reading_content) :
        ?>
        <div class="ep-listen-content">
          <?php echo $reading_content; ?>
        </div>
        <?php endif; ?>
        <!-- <a href="#" class="ep-transcript-btn">Read All Transcripts</a> -->
      </div>
    </div>
  </section>

  <!-- ── Topic Cards Section ── -->
  <section class="topic-cards">
    <div class="az-container">
      <?php 
      if ($reading_feature_repeater): ?>  
        <div class="topic-cards-grid">
          <?php foreach ($reading_feature_repeater as $item): 
            $icon    = $item['reading_feature_icon'];
            $content = $item['reading_feature_content'];
            $icon_url = is_array($icon) ? $icon['url'] : $icon;
            $alt      = is_array($icon) ? $icon['alt'] : '';
          ?>
            <div class="topic-card">
              <?php if ($icon_url): ?>
                <div class="topic-card-icon">
                  <img src="<?php echo esc_url($icon_url); ?>" 
                      alt="<?php echo esc_attr($alt ?: 'Feature Icon'); ?>">
                </div>
              <?php endif; ?>
              <div class="topic-card-text">
                <?php if ($content): ?>
                  <?php echo wp_kses_post($content); ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- ── Podcast Community Section ── -->
  <section class="podcast-community">
    <div class="az-container">
      <div class="pc-wrapper">
        <!-- Left Content -->
        <div class="pc-content">
          <?php if ($podcast_top_button) : ?>
          <div class="pc-badge">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podcast-comunity-heading-mic.svg" alt="Mic icon">
            <span><?php echo $podcast_top_button['title']; ?></span>
          </div>
          <?php endif; ?>
          <?php if ($podcast_top_content) : ?>
          <?php echo $podcast_top_content; ?>
          <?php endif; ?>
          <?php if ($podcast_offers_repeater): ?>
            <div class="pc-badges-row">
              <?php foreach ($podcast_offers_repeater as $offer): 
                $icon = $offer['podcast_offer_icon'];
                $text = $offer['podcast_offer_text'];
                // Get image URL safely
                $icon_url = is_array($icon) ? $icon['url'] : $icon;
              ?>                
                <div class="pc-pill">
                  <?php if ($icon_url): ?>
                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($text); ?>">
                  <?php endif; ?>

                  <?php if ($text): ?>
                    <span><?php echo esc_html($text); ?></span>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($podcast_follow_button_heading && $podcast_follow_button_text && $podcast_follow_button_link) : ?>
            <a href="<?php echo esc_url($podcast_follow_button_link['url']); ?>" target="<?php echo esc_attr($podcast_follow_button_link['target']); ?>">
              <div class="pc-follow-bar">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/follow-us-bell.svg" alt="Bell icon">
                <div class="pc-follow-text">
                  <strong><?php echo $podcast_follow_button_heading; ?></strong>
                  <span><?php echo $podcast_follow_button_text; ?></span>
                </div>
              </div>
            </a>
          <?php endif; ?>
        </div>
        <!-- Right Phone Mockup -->
        <?php if ($podcast_image) : ?>
          <div class="pc-phone">
            <img src="<?php echo esc_url($podcast_image['url']); ?>" alt="<?php echo esc_attr($podcast_image['alt']); ?>">
          </div>
        <?php endif; ?>
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
            <?php if ($platform_icon) : ?>
              <img src="<?php echo esc_url($platform_icon['url']); ?>" alt="<?php echo esc_attr($platform_icon['alt']); ?>">
            <?php endif; ?>
            <?php if ($platform_heading) : ?>
              <h2><?php echo $platform_heading; ?></h2>
            <?php endif; ?>
          </div>
          <?php if ($platform_sub_heading) : ?>
            <p><?php echo $platform_sub_heading; ?></p>
          <?php endif; ?>
        </div>

        <?php
        if ($platform_partners_repeater): ?>   
          <div class="lp-grid">
            <?php foreach ($platform_partners_repeater as $partner):               
              $image = $partner['partner_image'];
              $link  = $partner['partner_link'];
              // Handle image
              $image_url = is_array($image) ? $image['url'] : $image;
              // Handle link (ACF link field returns array)
              $url    = $link['url'] ?? '#';
              $target = $link['target'] ?? '_self';
              $title  = $link['title'] ?? '';
            ?>
              <a href="<?php echo esc_url($url); ?>" 
                target="<?php echo esc_attr($target); ?>" 
                class="lp-card">
                <?php if ($image_url): ?>
                  <img src="<?php echo esc_url($image_url); ?>" 
                      alt="<?php echo esc_attr($title); ?>">
                <?php endif; ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if ($platform_youtube_icon && $platform_youtube_text_and_link) : ?>
        <a href="<?php echo esc_url($platform_youtube_text_and_link['url']); ?>" target="<?php echo esc_attr($platform_youtube_text_and_link['target']); ?>" class="lp-youtube">
          <img src="<?php echo $platform_youtube_icon['url']; ?>" alt="<?php echo esc_attr($platform_youtube_icon['alt']); ?>">
          <span><?php echo esc_html($platform_youtube_text_and_link['title']); ?></span>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- ── We're Here For You Section ── -->
  <section class="here-for-you" style="background-image: url('<?php echo esc_url($journey_background_image['url']); ?>');">
    <div class="az-container">
      <!-- Top: Badge + Heading + Subtext + Schedule -->
      <div class="hfy-top">
        <div class="hfy-badge">
          <?php if ($platform_journey_heading_icon) : ?>
            <img src="<?php echo esc_url($platform_journey_heading_icon['url']); ?>" alt="<?php echo esc_attr($platform_journey_heading_icon['alt']); ?>">
          <?php endif; ?>
          <?php if ($journey_heading) : ?>
          <span><?php echo esc_html($journey_heading); ?></span>
          <?php endif; ?>
        </div>
        <?php if ($journey_content) : ?>
          <?php echo $journey_content; ?>
        <?php endif; ?>
      </div>
      <div class="hfy-schedule">
        <?php if ($journey_podcast_icon) : ?>
          <img src="<?php echo esc_url($journey_podcast_icon['url']); ?>" alt="<?php echo esc_attr($journey_podcast_icon['alt']); ?>">
        <?php endif; ?>
        <div>
        <?php if ($journey_podcast_text) : ?>
          <?php echo $journey_podcast_text; ?>
        <?php endif; ?>
        </div>
      </div>

      <!-- Support heading -->
      <?php if ($support_heading_icon && $support_heading_text) : ?>
      <div class="hfy-support-label">
        <img src="<?php echo esc_url($support_heading_icon['url']); ?>" alt="<?php echo esc_attr($support_heading_icon['alt']); ?>">
        <h3><?php echo esc_html($support_heading_text); ?></h3>
      </div>
      <?php endif; ?>
      <!-- 4 Support Cards -->
      <?php if ($support_features_repeater): ?>
        <div class="hfy-cards">
          <?php foreach ($support_features_repeater as $feature): 
            $icon    = $feature['support_feature_icon'];
            $content = $feature['support_feature_content'];
            $icon_url = is_array($icon) ? $icon['url'] : $icon;
          ?>
            <div class="hfy-card">
              <?php if ($icon_url): ?>
                <div class="hfy-card-icon">
                  <img src="<?php echo esc_url($icon_url); ?>" alt="">
                </div>
              <?php endif; ?>
              <?php if ($content): ?>
                <?php echo wp_kses_post($content); ?>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <!-- About Us Bar -->
      <div class="hfy-about">
        <div class="hfy-about-left">
          <?php if ($about_us_heading) : ?>
          <div class="hfy-about-badge"><?php echo esc_html($about_us_heading); ?></div>
          <?php endif; ?>
          <?php if ($about_us_content) : ?>
          <?php echo wp_kses_post($about_us_content); ?>
          <?php endif; ?>
        </div>
        <?php if ($about_phone_number) : ?>
        <a href="tel:<?php echo esc_attr($about_phone_number['url']); ?>" class="hfy-about-cta">
          <img src="<?php echo esc_url($about_us_button_icon['url']); ?>" alt="<?php echo esc_attr($about_us_button_icon['alt']); ?>">
          <div>
            <span><?php echo esc_html($about_call_button_text); ?></span>
            <strong><?php echo esc_html($about_phone_number['title']); ?></strong>
          </div>
          <?php if ($about_button_number_text) : ?>
          <div class="hfy-about-247"><?php echo esc_html($about_button_number_text); ?></div>
          <?php endif; ?>
        </a>
        <?php endif; ?>
      </div>

      <!-- You're Not Alone Bar -->
      <div class="hfy-alone">
        <?php if ($alone_image) : ?>
         <div class="hfy-alone-img">
          <img src="<?php echo esc_url($alone_image['url']); ?>" alt="<?php echo esc_attr($alone_image['alt']); ?>">
        </div>
        <?php endif; ?>
        <?php if ($alone_content) : ?>
        <div class="hfy-alone-text">
          <?php echo wp_kses_post($alone_content); ?>
        </div>
        <?php endif; ?>
        <div class="hfy-alone-leaf">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/leaf-image.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- ── Want to Learn More Section ── -->
  <section class="want-learn">
    <div class="az-container">
      <div class="wl-wrapper">
        <?php if ($learning_image) : ?>
        <div class="wl-image">
          <img src="<?php echo esc_url($learning_image['url']);?>" alt="<?php echo esc_url($learning_image['alt']);?>">
        </div>
        <?php endif; ?>
        <div class="wl-content">
          <?php if($learning_heading_button_icon) : ?>
          <div class="pc-badge pc-badge-transparent">
            <img src="<?php echo esc_url($learning_heading_button_icon['url']); ?>" alt="<?php echo esc_attr($learning_heading_button_icon['alt']); ?>">
            <span><?php echo esc_html($learning_heading_button_text); ?></span>
          </div>
          <?php endif; ?>
          <?php if ($learning_content) : 
            echo wp_kses_post($learning_content);
          endif;  
          ?>
          <?php if ($learning_blog_button) : ?>
          <a href="<?php echo esc_url($learning_blog_button['url']); ?>" target="<?php echo esc_attr($learning_blog_button['target']); ?>">
            <div class="pc-badge pc-badge-orange">
              <img src="http://az-pregnancy.local/wp-content/themes/divi-master/src/images/book-white.svg" alt="White book icon">
              <span><?php echo $learning_blog_button['title']; ?></span>
            </div>
          </a>
          <?php endif; ?>
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
            <?php if ($stories_heading_text) : ?>
            <div class="pc-badge pc-badge-blog">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/podcast-comunity-heading-mic.svg" alt="Mic icon">
              <span><?php echo esc_html($stories_heading_text); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($stories_content) : 
              echo wp_kses_post($stories_content);
            endif;
            ?>
          </div>

          <div class="le-header-right">
            <?php if ($explore_content_image) : ?>
            <div class="le-explore-icon">
              <img src="<?php echo $explore_content_image['url']; ?>" alt="<?php echo esc_attr($explore_content_image['alt']); ?>">
            </div>
            <?php endif;?>
            <?php if ($explore_content) : ?>
            <div class="le-explore-text">
              <?php echo $explore_content;?>
            </div>
            <?php endif; ?>
          </div>
        </div>

        <?php echo do_shortcode('[podcast_list posts_per_page="3"]'); ?>

      </div>
    </div>
  </section>
  <!-- ── Our Partners & Sponsors Section ── -->
  <section class="partners-sponsors">
    <div class="az-container">
      <?php if ($sponsors_heading) : ?>
        <div class="ps-header">
          <h2><?php echo esc_html($sponsors_heading); ?></h2>
          <span class="ps-divider"></span>
        </div>
      <?php endif; ?>
      <?php 
        if ($sponsor_partners_repeater): ?>
          <div class="ps-logos">
            <?php foreach ($sponsor_partners_repeater as $sponsor): 
              
              $image = $sponsor['add_sponsor'];
              $image_url = is_array($image) ? $image['url'] : $image;
              $alt = is_array($image) ? $image['alt'] : '';
            ?>
              <a href="#" class="ps-logo">
                <?php if ($image_url): ?>
                  <img src="<?php echo esc_url($image_url); ?>" 
                      alt="<?php echo esc_attr($alt ?: 'Sponsor Logo'); ?>">
                <?php endif; ?>
              </a>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- ── Communities Across Arizona Section ── -->
  <section class="communities">
    <div class="az-container">
      <!-- Top: Heading + Arizona Image -->
      <div class="comm-top">
        <div class="comm-top-content">
          <?php if ($cities_top_heading) : ?>
          <div class="comm-badge">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location-pin-white.svg" alt="Pin">
            <span><?php echo esc_html($cities_top_heading); ?></span>
          </div>
          <?php endif; ?>
          <?php if ($cities_content) : 
            echo wp_kses_post($cities_content);
          endif;  
          ?>
        </div>
        <?php if ($cities_image) : ?>
        <div class="comm-top-image">
          <img src="<?php echo $cities_image['url']; ?>" alt="<?php echo esc_attr($cities_image['alt']); ?>">
        </div>
        <?php endif; ?>
      </div>

      <!-- Bottom: We Serve Cities Card -->
      <div class="comm-serve">
        <div class="comm-serve-header">
          <?php if ($cities_inner_heading_icon) : ?>
          <div class="comm-serve-icon">
            <img src="<?php echo $cities_inner_heading_icon['url']; ?>" alt="<?php echo esc_attr($cities_inner_heading_icon['alt']); ?>">
          </div>
          <?php endif; ?>
          <?php if ($cities_inner_heading) : ?>
          <div class="comm-serve-heading">
            <?php echo $cities_inner_heading; ?>
          </div>
          <?php endif; ?>
        </div>
        <?php if($cities_locations) : 
          echo wp_kses_post($cities_locations);
        endif;
        ?>
      </div>
    </div>
  </section>

<?php
get_footer( 'arizona' );
