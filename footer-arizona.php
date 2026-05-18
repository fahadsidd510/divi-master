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
$footer_baf_image_content = get_field('footer_baf_image', $page_id);
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

<section class="git-section">
	<div class="az-container">

		<!-- Top Heading -->
		<?php if ($get_in_touch_heading) : ?>
		<div class="git-top">
			<div class="git-top-content">
				<div class="git-badge">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/location-pin-white.svg" alt="Pin">
				<span><?php echo esc_html($get_in_touch_heading); ?></span>
				</div>
				<?php if ($get_in_touch_content) : 
					echo wp_kses_post($get_in_touch_content);
				endif;
				?>
			</div>
			<?php if ($get_in_touch_image) : ?>
			<div class="git-top-decor">
				<img src="<?php echo $get_in_touch_image['url']; ?>" alt="<?php echo $get_in_touch_image['alt']; ?>">
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<!-- 3-Col Grid -->
		<div class="git-grid">
			<!-- Left Column -->
			<div class="git-col">
				<!-- Map Card -->
				<div class="git-card git-map-card">
					<?php if ($footer_map) : ?>
					<div class="git-map">
						<?php echo $footer_map; ?>
					</div>
					<?php endif; ?>
					<div class="git-office">
						<div class="git-office-icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/office-building.svg" alt="">
						</div>
						<h3>Main Office</h3>
					</div>
					<?php if ($footer_map_address) : ?>
					<address>
						<?php echo wp_kses_post($footer_map_address); ?>
					</address>
					<?php endif; ?>
				</div>

				<!-- Adoptive Parent CTA -->
				<div class="git-card git-parent-card">
					<?php if ($footer_heart_image) : ?>
					<div class="git-parent-icon">
						<img src="<?php echo $footer_heart_image['url']; ?>" alt="<?php echo esc_attr($footer_heart_image['alt']); ?>">
					</div>
					<?php endif; ?>
					<?php if ($footer_heart_heading) : ?>
          				<h3><?php echo $footer_heart_heading; ?></h3>
					<?php endif; ?>
					<?php if ($footer_heart_learn_more) : ?>
						<a href="<?php echo $footer_heart_learn_more['url']; ?>" class="git-learn-btn">
							<?php echo esc_html($footer_heart_learn_more['title']); ?>
							<span>&#8250;</span>
						</a>
					<?php endif; ?>
					<?php if ($footer_baf_image_content) : ?>
					<div class="git-baf-logo">
						<?php echo $footer_baf_image_content; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<!-- Middle Column: Useful Links -->
			<div class="git-col">
				<div class="git-card git-links-card">
					<?php if ($footer_useful_link_heading) : ?>
					<div class="git-card-header">
						<div class="git-card-icon usefull-link-icon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/link-chain.svg" alt="">
						</div>
						<h3><?php echo $footer_useful_link_heading; ?></h3>
					</div>
					<?php endif; ?>
					<!-- <ul class="git-links">
						<li class="git-link-heart"><a href="#">Placing Your Baby for Adoption</a></li>
						<li class="git-link-feet"><a href="#">Adoption Process</a></li>
						<li class="git-link-hand"><a href="#">Arizona Crisis Pregnancy</a></li>
						<li class="git-link-shield"><a href="#">Domestic Violence &amp; Adoption</a></li>
						<li class="git-link-pill"><a href="#">Drug Use &amp; Adoption</a></li>
						<li class="git-link-hands"><a href="#">Pregnant &amp; Incarcerated</a></li>
						<li class="git-link-home"><a href="#">Homeless &amp; Adoption</a></li>
						<li class="git-link-people"><a href="#">Teenage Pregnancies &amp; Adoption</a></li>
						<li class="git-link-dollar"><a href="#">Financial Assistance</a></li>
						<li class="git-link-list"><a href="#">Adoption in 10 Steps</a></li>
						<li class="git-link-lock"><a href="#">Opt-out Preferences</a></li>
						<li class="git-link-doc"><a href="#">Privacy Policy</a></li>
					</ul> -->
					<?php
					wp_nav_menu( array(
					'theme_location' => 'az-footer-landing-menu',
					'menu_class'     => 'git-links',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
					) );
					?>
				</div>
			</div>
			<!-- Right Column: Contact Us -->
			<div class="git-col">
				<div class="git-card git-contact-card">
					<?php if ($footer_contact_us_heading) : ?>
					<div class="git-card-header">
						<div class="git-card-icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/phone-orange-heading.svg" alt="">
						</div>
						<h3><?php echo $footer_contact_us_heading; ?></h3>
					</div>
					<?php endif; ?>
					<!-- Phone numbers -->
					<div class="git-phones">
						<?php if ($footer_telephone_number) : ?>
						<div class="git-phone-item">
							<div class="git-phone-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer-phone-orange.svg" alt="">
							</div>
							<div class="git-phone-text">
								<?php echo $footer_telephone_number; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($footer_toll_free_number) : ?>
						<div class="git-phone-item">
							<div class="git-phone-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer-headphone-orange.svg" alt="">
							</div>
							<div class="git-phone-text">
								<?php echo $footer_toll_free_number; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($footer_fax_number) : ?>
						<div class="git-phone-item">
							<div class="git-phone-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/fax-orange.svg" alt="">
							</div>
							<div class="git-phone-text">
								<?php echo $footer_fax_number; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<!-- Text section -->
					<div class="git-contact-section">
						<?php if ($footer_text_heading) : ?>
						<div class="git-section-heading">
							<div class="git-card-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer-chat.svg" alt="">
							</div>
							<h4><?php echo $footer_text_heading; ?></h4>
						</div>
						<?php endif; ?>
						<?php if ($footer_birth_mother_content) : ?>
						<div class="git-text-row">
							<?php echo wp_kses_post($footer_birth_mother_content); ?>
						</div>
						<?php endif; ?>
						<?php if ($footer_espanol_content) : ?>
						<div class="git-text-row">
							<?php echo wp_kses_post($footer_espanol_content); ?>
						</div>
						<?php endif; ?>
					</div>
					<!-- Email section -->
					<div class="git-contact-section">
						<?php if ($footer_email_text) : ?>
						<div class="git-section-heading">
							<div class="git-card-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer-email.svg" alt="">
							</div>
							<h4><?php echo $footer_email_text; ?></h4>
						</div>
						<?php endif; ?>
						<?php if ($footer_message_button) : ?>
							<a href="mailto:<?php echo $footer_message_button['url']; ?>" class="git-message-btn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/footer-message.svg" alt="">
							<?php echo esc_html($footer_message_button['title']); ?>
							</a>
						<?php endif; ?>
					</div>
					<!-- Socials -->
					 <?php if ($footer_social_media_repeater): ?>
					<div class="git-socials">
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
							class="git-social">
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
<!-- LINK JS FILE HERE -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/src/js/az-landing.js"></script>
<?php wp_footer(); ?>
</body>
</html>