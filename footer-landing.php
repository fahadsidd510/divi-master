<?php
/*
 * This file adds the custom footer links to the Divi child theme.
 * Author:   Brad Dalton http://wpsites.net
 * @example   http://wpsites.net/
 * @package Divi Parent Theme by Elegant Themes
*/
if ( ! is_page_template( 'page-template-blank.php' ) ) :
$page_id = get_the_ID();
$add_follow_us_text = get_field('add_follow_us_text', $page_id);
$social_media_accounts_rep = get_field('add_social_media_accounts', $page_id);
?>

<footer class="landing-footer">
	<div class="lp-container">
		<div class="landing-footer-widget">
				<div class="lp-footer-widget">
						<?php
						if ( is_active_sidebar( 'footer-landing-widget-area-1' ) ) :
							dynamic_sidebar( 'footer-landing-widget-area-1' );
						endif;
						if ( is_active_sidebar( 'footer-landing-widget-area-4' ) ) :
							dynamic_sidebar( 'footer-landing-widget-area-4' );
						endif;
						?>
				</div>
				<div class="lp-footer-widget">
						<?php
						if ( is_active_sidebar( 'footer-landing-widget-area-2' ) ) :
							dynamic_sidebar( 'footer-landing-widget-area-2' );
						endif;
						if ( is_active_sidebar( 'footer-landing-widget-area-5' ) ) :
								dynamic_sidebar( 'footer-landing-widget-area-5' );
							endif;
						?>
				</div>
				<div class="lp-footer-widget">
						<?php
							if ( is_active_sidebar( 'footer-landing-widget-area-3' ) ) :
								dynamic_sidebar( 'footer-landing-widget-area-3' );
							endif;
						?>
				</div>
		</div>
	</div>


	<div class="landing-footer-social-links">
		<?php if($add_follow_us_text): ?>
		<div class="social-text">
			<span><?php echo $add_follow_us_text;?></span>
		</div>
		<?php endif; ?>
		<?php if($social_media_accounts_rep): ?>
		<div class="social-icons">
			<?php foreach($social_media_accounts_rep as $account):
				$add_social_icon = $account['add_social_icon'];
				$add_social_link = $account['add_social_link'];
				$add_social_area_label = $account['add_social_area_label'];
			?>
			<a href="<?php echo $add_social_link; ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo $add_social_area_label;?>">
				<img src="<?php echo $add_social_icon['url']; ?>" alt="<?php echo $add_social_icon['alt']; ?>" />
			</a>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
	<?php if(is_active_sidebar('footer-landing-copyright-widget')) : ?>
	<div class="copyright-text">
		<?php dynamic_sidebar('footer-landing-copyright-widget'); ?>
	</div>
	<?php endif; ?>
</footer>

<?php endif; ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/src/js/landing-js.js"></script>
<?php wp_footer(); ?>
</body>
</html>
