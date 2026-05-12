<?php

//* Create Portfolio Type custom taxonomy
add_action( 'init', 'divi_type_taxonomy' );
function divi_type_taxonomy() {

	register_taxonomy( 'portfolio-type', 'portfolio',
		array(
			'labels' => array(
				'name'          => _x( 'Types', 'taxonomy general name', 'divi' ),
				'add_new_item'  => __( 'Add New Portfolio Type', 'divi' ),
				'new_item_name' => __( 'New Portfolio Type', 'divi' ),
			),
			'exclude_from_search' => true,
			'has_archive'         => true,
			'hierarchical'        => true,
			'rewrite'             => array( 'slug' => 'portfolio-type', 'with_front' => false ),
			'show_ui'             => true,
			'show_tagcloud'       => false,
		)
	);

}


function dequeue_unnecessary_styles() {
    wp_dequeue_style( 'wp-block-library' );
        wp_deregister_style( 'wp-block-library' );
	wp_dequeue_style( 'cpsh-shortcodes' );
        wp_deregister_style( 'cpsh-shortcodes' );
		wp_dequeue_style( 'jquery-lazyloadxt-spinner-css' );
        wp_deregister_style( 'jquery-lazyloadxt-spinner-css' );
	if(is_front_page()) {
		wp_dequeue_style( 'dashicons' );
        wp_deregister_style( 'dashicons' );
	wp_dequeue_style( 'et_monarch-css' );
        wp_deregister_style( 'et_monarch-css' );

			wp_dequeue_style( 'email-subscribers' );
        wp_deregister_style( 'email-subscribers' );
		wp_dequeue_style( 'wp-msbd' );
        wp_deregister_style( 'wp-msbd' );

	}
}
add_action( 'wp_print_styles', 'dequeue_unnecessary_styles' );
function dequeue_unnecessary_scripts() {
	if(is_front_page()) {
    wp_dequeue_script( 'email-subscribers' );
        wp_deregister_script( 'email-subscribers' );
    wp_dequeue_script( 'wp-msbd' );
        wp_deregister_script( 'wp-msbd' );
        wp_dequeue_script( 'et_core_api_spam_recaptcha' );
        wp_deregister_script( 'et_core_api_spam_recaptcha' );

wp_dequeue_script( 'fitvids' );
        wp_deregister_script( 'fitvids' );

	}
}
add_action( 'wp_print_scripts', 'dequeue_unnecessary_scripts' );


//* Create portfolio custom post type
add_action( 'init', 'divi_portfolio_post_type' );
function divi_portfolio_post_type() {

	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name'          => __( 'Portfolio', 'divi' ),
				'singular_name' => __( 'Portfolio', 'divi' ),
			),
			'has_archive'  => true,
			'hierarchical' => true,
			'menu_icon'    => 'dashicons-portfolio',
			'public'       => true,
			'rewrite'      => array( 'slug' => 'portfolio', 'with_front' => false ),
			'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),
			'taxonomies'   => array( 'portfolio-type' ),

		)
	);

}

//* Change the number of portfolio items to be displayed (props Brad Dalton)
add_action( 'pre_get_posts', 'divi_portfolio_items' );
function divi_portfolio_items( $query ) {

	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'portfolio' ) ) {
		$query->set( 'posts_per_page', '12' );
	}

}





// Create the new widget area
function myprefix_widget_area() {
    register_sidebar(array(
        'name' => 'Header',
        'id' => 'myprefix-widget-area',
        'before_widget' => '<div id="%1$s" class="et_pb_widget %2$s">',
        'after_widget' => '</div> <!-- end .et_pb_widget -->',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

	/**
	 * Landing Page Widgets - 10/16/2025
	 */
		register_sidebar(array(
				'name' => 'Footer Landing Area 1',
				'id' => 'footer-landing-widget-area-1',
				'before_widget' => '<div id="%1$s" class="landing_custom_widget %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="custom_widget_title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => 'Footer Landing Area 2',
				'id' => 'footer-landing-widget-area-2',
				'before_widget' => '<div id="%1$s" class="landing_custom_widget %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="custom_widget_title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => 'Footer Landing Area 3',
				'id' => 'footer-landing-widget-area-3',
				'before_widget' => '<div id="%1$s" class="landing_custom_widget %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="custom_widget_title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => 'Footer Landing Area 4',
				'id' => 'footer-landing-widget-area-4',
				'before_widget' => '<div id="%1$s" class="landing_custom_widget landing_custom_widget_4 %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="custom_widget_title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => 'Footer Landing Area 5',
				'id' => 'footer-landing-widget-area-5',
				'before_widget' => '<div id="%1$s" class="landing_custom_widget landing_last_widget %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="custom_widget_title landing_last_widget_title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => 'Footer Copyright Widget',
				'id' => 'footer-landing-copyright-widget',
				'before_widget' => '<div id="%1$s" class="copyright_landing_custom_widget %2$s">',
				'after_widget' => '</div> <!-- end .landing_custom_widget -->',
				'before_title' => '<h4 class="copyright_landing_custom_widget_title">',
				'after_title' => '</h4>',
			));


}
add_action('widgets_init', 'myprefix_widget_area');

// Create the widget area and then move into place
function myprefix_footer() { ?>
    <div id="myprefix-widget-area-wrap">
        <?php dynamic_sidebar('myprefix-widget-area'); ?>
    </div>
    <script>
        jQuery(function($){
            $("#et-top-navigation").after($("#myprefix-widget-area-wrap"));
            $("#myprefix-widget-area-wrap").show();
        });
    </script>
<?php
}
add_action('wp_footer', 'myprefix_footer');

// Adjust the layout so that it fits into the header better
function myprefix_css() { ?>
    <style>
    #myprefix-widget-area-wrap {
        display:none;
        float:right;
        max-width: 500px;
        clear:right;
        position:relative;
    }
    #myprefix-widget-area-wrap .et_pb_widget { margin-right:0px }
    #myprefix-widget-area-wrap .et_pb_widget:last-child { margin-bottom: 18px; }
    .et-fixed-header #myprefix-widget-area-wrap .et_pb_widget:last-child { margin-bottom: 10px; }
    @media only screen and ( max-width: 980px ) {
        #myprefix-widget-area-wrap .et_pb_widget:last-child { margin-bottom: 0px; }
    }
    @media only screen and ( max-width: 768px ) {
        #myprefix-widget-area-wrap .et_pb_widget:first-child { margin-top: 18px; }
    }
    </style>
<?php
}
add_action('wp_head', 'myprefix_css');

function redirect_to_home() {
  if(!is_admin() && is_page('birthmother-stories')) {
    wp_redirect(home_url());
    exit();
  }
}
add_action('template_redirect', 'redirect_to_home');


add_action('wp_footer', function(){
	?>

		<script>
				function redirect_to_brochure(obj) {
					if(obj.status =="complete")  {
						jQuery('#broucher-download-link .et_pb_code_inner').html('<a href="https://azpregnancyhelp.com/wp-content/uploads/2019/02/Brochure.pdf" target="_blank">Download Brochure</a>');
					}
				}
		</script>

	<?php
}, 9999);


function enqueue_custom_scripts() {

         wp_enqueue_script( 'wp-embed' );
    }

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts', 10);



add_filter( 'use_widgets_block_editor', '__return_false' );


add_shortcode('btncontainer', function($atts = array(), $content = null) {

        return '<div class="cs-btn-wrap">'. do_shortcode($content) .'</div>';

});


add_shortcode('azbutton', function($atts = array(), $content = null) {

    // set up default parameters
    extract(shortcode_atts(array(
     'link' => '#',
     'color' => '#cccccc',
    ), $atts));

    return '<a href="'. $link .'" class="azbutton">' . $content . '</a>';

});

require_once get_stylesheet_directory() . '/badge-ogtags.php';



function imp_custom_youtube_querystring( $html, $url, $args ) {
	if(!is_page(6757)) return $html;
	if(strpos($html, 'youtube')!= FALSE) {
		$args = [
			'rel' => 0,
			'controls' => 0,
			'showinfo' => 0,
			'modestbranding' => 1,
		];
		$params = '?feature=oembed&';
		foreach($args as $arg => $value){
			$params .= $arg;
			$params .= '=';
			$params .= $value;
			$params .= '&';
		}
		$result = str_replace( '?feature=oembed', $params, $html );
	}
	return $result;
}
add_filter('oembed_result', 'imp_custom_youtube_querystring', 10, 3);

add_action('wp_head', function(){
	?>

	 <!-- Global site tag (gtag.js) - Google Ads: 937976053 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-937976053"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'UA-134857174-1');
		gtag('config', 'AW-937976053', {'allow_enhanced_conversions': true});
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-29209W3C4M"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-29209W3C4M');
	</script>

	<?php

	if(is_page('thank-you')  && isset($_GET['feid']) ):
		$eid = $_GET['feid'];
		$result = GFAPI::get_entry( $eid );
		if((int)$result['form_id'] === 2  ||  (int)$result['form_id'] === 5) {
			?>
							<script>
								gtag('set', 'user_data', {
								"email":  "<?php echo $result[3]; ?>"
								});
							</script>
						<?php
		}
		if((int)$result['form_id'] === 1 ) {
			?>
				<script>
					gtag('set', 'user_data', {
					"email":  "<?php echo $result[8]; ?>"
					});
				</script>
			<?php
		}

		?>
			<!-- Event snippet for BM Form conversion page -->
			<script>
			gtag('event', 'conversion', {'send_to': 'AW-937976053/gLBsCKTumWMQ9cGhvwM'});
			</script>
		<?php

	endif;

}, 1);


add_filter( 'gform_ajax_spinner_url_5', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
return "https://azpregnancyhelp.com/wp-content/uploads/2024/05/jxspinner.gif";
}

function preload_images() {
    ?>
    <link rel="preload" href="https://azpregnancyhelp.com/wp-content/uploads/2024/11/az-desk-banner.webp" as="image">
    <link rel="preload" href="https://azpregnancyhelp.com/wp-content/uploads/2024/11/az-mobile-banner.webp" as="image">
    <?php
}
add_action('wp_head', 'preload_images');


/**
 * Landing Page Related - 10/16/2025
 */
// Allow SVG Uploads
function allow_svg_upload($mimes) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Optional: Fix SVG display in WordPress Admin
function fix_svg_display($svg, $attachment_id) {
    $svg = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $svg);
    return $svg;
}
add_filter('wp_get_attachment_image_src', 'fix_svg_display', 10, 2);


// Register Landing Menu
function register_landing_menu() {
  register_nav_menu('landing-menu',__( 'Landing Menu' ));
  register_nav_menu('az-landing-menu',__( 'AZ Landing Menu' ));
}
add_action( 'init', 'register_landing_menu' );



/**
 * AZ Landing Page — Asset isolation
 */

