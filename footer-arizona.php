<?php
/**
 * Footer: Arizona Landing Page
 *
 * Called via get_footer( 'arizona' ) in template-arizona.php
 * Outputs: closing </main> + footer markup + wp_footer() + </body></html>
 *
 * Location: /wp-content/themes/YOUR-CHILD-THEME/footer-arizona.php
 */
$get_in_touch_heading_icon = get_field('get_in_touch_heading_icon', $page_id);
$get_in_touch_heading = get_field('get_in_touch_heading', $page_id);
$get_in_touch_content = get_field('get_in_touch_content', $page_id);
$get_in_touch_image = get_field('get_in_touch_image', $page_id);

$footer_map = get_field('footer_map', $page_id);
$footer_map_address = get_field('footer_map_address', $page_id);
$footer_heart_image = get_field('footer_heart_image', $page_id);
$footer_heart_heading = get_field('footer_heart_heading', $page_id);
$footer_heart_learn_more = get_field('footer_heart_learn_more', $page_id);
$footer_baf_image = get_field('footer_baf_image', $page_id);
$footer_useful_link_heading = get_field('footer_useful_link_heading', $page_id);
$footer_contact_us_heading = get_field('footer_contact_us_heading', $page_id);
$footer_telephone_number = get_field('footer_telephone_number', $page_id);
$footer_toll_free_number = get_field('footer_toll_free_number', $page_id);
$footer_fax_number = get_field('footer_fax_number', $page_id);
$footer_text_heading = get_field('footer_text_heading', $page_id);
$footer_birth_mother_content = get_field('footer_birth_mother_content', $page_id);
$footer_espanol_content = get_field('footer_espanol_content', $page_id);
$footer_email_text = get_field('footer_email_text', $page_id);
$footer_message_button = get_field('footer_message_button', $page_id);
$footer_social_media_repeater = get_field('footer_social_media', $page_id);
$talk_content = get_field('talk_content', $page_id);
?>

<!-- ============================================================
	 FOOTER
	 ============================================================ -->
  <!-- ── Footer Section: Get In Touch & Explore ── -->
  <section class="footer-explore">
    <div class="az-container">

      <!-- Top: Heading -->
      <div class="fe-top">
        <?php if ($get_in_touch_heading) : ?>
        <div class="fe-badge">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location-pin-white.svg" alt="Pin">
          <span><?php echo esc_html($get_in_touch_heading); ?></span>
        </div>
        <?php endif; ?>
        <?php if ($get_in_touch_content) : 
          echo wp_kses_post($get_in_touch_content);
        endif;
        ?>
      </div>

      <!-- 3-Column Grid -->
      <div class="fe-grid">

        <!-- Column 1: Map + Address + Adoptive Parent CTA -->
        <div class="fe-col fe-col-left">

          <!-- Map Card -->
          <div class="fe-card fe-map-card">
            <?php if ($footer_map) : ?>
            <div class="fe-map">
              <?php echo $footer_map; ?>
            </div>
            <?php endif; ?>
            <?php if ($footer_map_address) : ?>
            <address>
              <?php echo wp_kses_post($footer_map_address); ?>
            </address>
            <?php endif; ?>
          </div>

          <!-- Adoptive Parent CTA Card -->
          <div class="fe-card fe-parent-card">
            <?php if ($footer_heart_image) : ?>
            <div class="fe-parent-icon">
              <img src="<?php echo $footer_heart_image['url']; ?>" alt="<?php echo esc_attr($footer_heart_image['alt']); ?>">
            </div>
            <?php endif; ?>
            <?php if ($footer_heart_heading) : ?>
            <h3><?php echo $footer_heart_heading; ?></h3>
            <?php if ($footer_heart_learn_more) : ?>
            <a href="<?php echo $footer_heart_learn_more['url']; ?>" class="fe-learn-btn">
              <?php echo esc_html($footer_heart_learn_more['title']); ?>
              <span>&#8250;</span>
            </a>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($footer_baf_image) : ?>
            <div class="fe-baf-logo">
              <img src="<?php echo $footer_baf_image['url']; ?>" alt="<?php echo esc_attr($footer_baf_image['alt']); ?>">
            </div>
            <?php endif; ?>
          </div>
        </div>

        <!-- Column 2: Useful Links -->
        <div class="fe-col">
          <div class="fe-card fe-links-card">
            <?php if ($footer_useful_link_heading) : ?>
            <div class="fe-card-header">
              <div class="fe-card-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/link-chain-svgrepo-com.svg" alt="Link">
              </div>
              <h3><?php echo $footer_useful_link_heading; ?></h3>
            </div>
            <?php endif; ?>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'az-footer-landing-menu',
				'menu_class'     => 'fe-links',
				'container'      => false,
				'fallback_cb'    => false,
				'depth'          => 1,
			) );
			?>
          </div>
        </div>

        <!-- Column 3: Contact Us -->
        <div class="fe-col">
          <div class="fe-card fe-contact-card">
            <?php if ($footer_contact_us_heading) : ?>
            <h3 class="fe-contact-title"><?php echo $footer_contact_us_heading; ?></h3>
            <?php endif; ?>
            <!-- Phone numbers -->
            <div class="fe-phones">
              <?php if ($footer_telephone_number) : ?>
              <div class="fe-phone-item">
                <?php echo $footer_telephone_number; ?>
              </div>
              <?php endif; ?>
              <?php if ($footer_toll_free_number) : ?>
              <div class="fe-phone-item">
                <?php echo $footer_toll_free_number; ?>
              </div>
              <?php endif; ?>
              <?php if ($footer_fax_number) : ?>
              <div class="fe-phone-item">
                <?php echo $footer_fax_number; ?>
              </div>
              <?php endif; ?>
            </div>

            <!-- Text -->
            <div class="fe-contact-section">
              <?php if ($footer_text_heading) : ?>
              <div class="fe-section-heading">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/Chat.svg" alt="Chat">
                <h4><?php echo $footer_text_heading; ?></h4>
              </div>
              <?php endif; ?>
              <?php if ($footer_birth_mother_content) : ?>
              <div class="fe-text-row">
                <?php echo wp_kses_post($footer_birth_mother_content); ?>
              </div>
              <?php endif; ?>
              <?php if ($footer_espanol_content) : ?>
              <div class="fe-text-row">
                <?php echo wp_kses_post($footer_espanol_content); ?>
              </div>
              <?php endif; ?>
            </div>

            <!-- Email -->
            <div class="fe-contact-section">
              <?php if ($footer_email_text) : ?>
              <div class="fe-section-heading">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/envolope.svg" alt="Email">
                <h4><?php echo $footer_email_text; ?></h4>
              </div>
              <?php endif; ?>
              <?php if ($footer_message_button) : ?>
              <a href="mailto:<?php echo $footer_message_button['url']; ?>" class="fe-message-btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/plane.svg" alt="Send">
                <?php echo esc_html($footer_message_button['title']); ?>
              </a>
              <?php endif; ?>
            </div>

            <!-- Social icons -->
            <?php 
            if ($footer_social_media_repeater): ?>
              <div class="fe-socials">
                <?php foreach ($footer_social_media_repeater as $social): 
                  $icon = $social['footer_social_media_icon'];
                  $link = $social['footer_social_media_link'];
                  // Image
                  $icon_url = is_array($icon) ? $icon['url'] : $icon;
                  $alt      = is_array($icon) ? $icon['alt'] : '';
                  // Link
                  $url    = $link['url'] ?? '#';
                  $target = $link['target'] ?? '_self';
                  $title  = $link['title'] ?? '';
                ?>
                  <a href="<?php echo esc_url($url); ?>" 
                    target="<?php echo esc_attr($target); ?>" 
                    class="fe-social">
                    <?php if ($icon_url): ?>
                      <img src="<?php echo esc_url($icon_url); ?>" 
                          alt="<?php echo esc_attr($alt ?: $title); ?>">
                    <?php endif; ?>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Footer Bottom CTA ── -->
  <?php if ($talk_content) : ?>
  <section class="footer-cta">
    <div class="az-container">
      <?php echo wp_kses_post($talk_content); ?>
    </div>
  </section>
  <?php endif; ?>
</main>
<?php wp_footer(); ?>
</body>
</html>