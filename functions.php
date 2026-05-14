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
  register_nav_menu('az-footer-landing-menu',__( 'AZ Footer Landing Menu' ));
}
add_action( 'init', 'register_landing_menu' );



/**
 * AZ Landing Page
 */

function register_podcast_cpt() {

    $labels = array(
        'name'               => 'Podcasts',
        'singular_name'      => 'Podcast',
        'menu_name'          => 'Podcasts',
        'name_admin_bar'     => 'Podcast',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Podcast',
        'new_item'           => 'New Podcast',
        'edit_item'          => 'Edit Podcast',
        'view_item'          => 'View Podcast',
        'all_items'          => 'All Podcasts',
        'search_items'       => 'Search Podcasts',
        'not_found'          => 'No podcasts found.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-microphone',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'rewrite'            => array(
            'slug'           => '/',
            'with_front'     => false
        ),
        'has_archive'        => false,
        'show_in_rest'       => true,
    );

    register_post_type('podcast', $args);
}
add_action('init', 'register_podcast_cpt');


// Podcast Category Taxonomy
function register_podcast_category_taxonomy() {

    $labels = array(
        'name'              => 'Podcast Categories',
        'singular_name'     => 'Podcast Category',
        'search_items'      => 'Search Categories',
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'hierarchical'      => true, // like categories (not tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'podcast-category'),
        'show_in_rest'      => true, // Gutenberg support
    );

    register_taxonomy('podcast_category', array('podcast'), $args);
}
add_action('init', 'register_podcast_category_taxonomy');


function fetch_rss_podcast_cards($atts) {

    $atts = shortcode_atts(array(
        'feed_url' => 'https://media.rss.com/birth-mother-matters-in-adoption/feed.xml',
        'limit'    => 6
    ), $atts);

    include_once(ABSPATH . WPINC . '/feed.php');

    $rss = fetch_feed($atts['feed_url']);

    if (is_wp_error($rss)) {
        return '<p>Unable to load podcast feed.</p>';
    }

    $rss->set_cache_duration(3600);

    $maxitems  = $rss->get_item_quantity($atts['limit']);
    $rss_items = $rss->get_items(0, $maxitems);

    // print_r($rss->get_items(0, 3));

    if ($maxitems == 0) return '<p>No episodes found.</p>';

    ob_start();
    ?>

    <div class="ep-cards-grid">

        <?php foreach ($rss_items as $item): 

            // Episode ID
            $guid = $item->get_id();
            $id_parts = explode('/', rtrim($guid, '/'));
            $episode_id = end($id_parts);

            // Namespaces
            $itunes_ns = 'http://www.itunes.com/dtds/podcast-1.0.dtd';

            // Data
            $title = $item->get_title();
            // Limit title to 5 words
            $title_limited = wp_trim_words($title, 6, '...');

            // Extract Season & Episode
            $season_episode_badge = 'Episode'; // default fallback

            if (preg_match('/Season\s*(\d+),\s*Episode\s*(\d+)/i', $title, $matches)) {
                $season = $matches[1];
                $episode = $matches[2];
                $season_episode_badge = "S{$season} | E{$episode}";
            }
            
            $date  = $item->get_date('M j, Y');

            $duration_tag = $item->get_item_tags($itunes_ns, 'duration');

            $duration = '';

            if (!empty($duration_tag) && isset($duration_tag[0]['data'])) {

                $raw_duration = trim($duration_tag[0]['data']);

                // Normalize
                if (is_numeric($raw_duration)) {
                    // seconds → MM:SS
                    $minutes = floor($raw_duration / 60);
                    $seconds = $raw_duration % 60;

                } else {
                    $parts = explode(':', $raw_duration);

                    if (count($parts) === 3) {
                        // HH:MM:SS → MM:SS
                        $hours   = (int) $parts[0];
                        $minutes = (int) $parts[1] + ($hours * 60);
                        $seconds = (int) $parts[2];

                    } elseif (count($parts) === 2) {
                        // MM:SS
                        $minutes = (int) $parts[0];
                        $seconds = (int) $parts[1];

                    } else {
                        $minutes = 0;
                        $seconds = 0;
                    }
                }

                $duration = sprintf('%02d:%02d', $minutes, $seconds);
            }
            $image_tag = $item->get_item_tags($itunes_ns, 'image');
            $cover_art = !empty($image_tag) ? $image_tag[0]['attribs']['']['href'] : '';

            $description = wp_trim_words(wp_strip_all_tags($item->get_description()), 20);
            $podcast_title = 'Birth Mother Matters in Adoption';
            // Author name
            $author = $item->get_author();
            $author_name = $author ? $author->get_name() : 'Unknown';
        ?>

        <div class="ep-card">

            <div class="ep-card-top">
                <div class="ep-card-thumb">
                    <?php if ($cover_art): ?>
                        <img src="<?php echo esc_url($cover_art); ?>" alt="<?php echo esc_attr($title); ?>">
                    <?php endif; ?>
                </div>

                <div class="ep-card-info">
                    <div class="ep-card-badge"><?php echo esc_html($season_episode_badge); ?></div>
                    <div class="ep-card-title"><?php echo esc_html($title_limited); ?></div>
                    <div class="ep-card-subtitle">Podcast Episode</div>
                </div>
            </div>

            <div class="ep-card-body">
                <p class="ep-card-description">
                    <?php echo esc_html($podcast_title . ' by ' . $author_name); ?>
                </p>
            </div>

            <div class="ep-card-meta">
                <?php if ($duration): ?>
                <div class="meta-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="duration">
                    <span><?php echo esc_html($duration); ?></span>
                </div>
                <?php endif; ?>

                <div class="meta-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/date.svg" alt="date">
                    <span><?php echo esc_html($date); ?></span>
                </div>
            </div>

            <div class="ep-card-actions">

                <!-- Listen -->
                <button class="ep-btn ep-btn-listen"
                    onclick="window.open('https://player.rss.com/birth-mother-matters-in-adoption/<?php echo esc_attr($episode_id); ?>','_blank')">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/play.svg" alt="play">
                    Listen to Podcasts
                </button>

                <!-- Transcript -->
                <a href="<?php echo esc_url($item->get_permalink()); ?>" 
                   target="_blank" 
                   class="ep-btn ep-btn-read">
                   
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/read.svg" alt="read">
                    Read Transcripts
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

    <?php
    // Dynamic total count + link
    $total_items = $rss->get_item_quantity();
    $feed_link   = $rss->get_link();
    ?>

    <div class="ep-button-wrapper">
        <a class="ep-button" href="<?php echo esc_url($feed_link); ?>" target="_blank">
            See all <?php echo esc_html($total_items); ?> episodes
        </a>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('rss_podcast_cards', 'fetch_rss_podcast_cards');




function podcast_list_shortcode($atts) {

    $atts = shortcode_atts(array(
        'posts_per_page' => 6,
        'category'       => '', // optional: slug
    ), $atts);

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'      => 'podcast',
        'posts_per_page' => $atts['posts_per_page'],
        'paged'          => $paged,
    );

    // Optional taxonomy filter
    if (!empty($atts['category'])) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'podcast_category',
                'field'    => 'slug',
                'terms'    => $atts['category'],
            )
        );
    }

    $query = new WP_Query($args);

    if (!$query->have_posts()) {
        return '<p>No podcasts found.</p>';
    }

    ob_start();
    ?>

    <div class="le-grid">

        <?php while ($query->have_posts()): $query->the_post();

            $audio_url = get_field('podcast_audio_url');
            $read_more = get_field('custom_read_more_url');
            $thumb     = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $date      = get_the_date('M d, Y');

            // Taxonomy
            $terms = get_the_terms(get_the_ID(), 'podcast_category');
            $tags = '';

            if ($terms && !is_wp_error($terms)) {
                $tags = implode(', ', wp_list_pluck($terms, 'name'));
            }
        ?>

        <article class="le-card">

            <div class="le-thumb">
                <?php if ($thumb): ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>

                <!-- <div class="le-thumb-badge">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/src/images/mike.svg" alt="">
                </div> -->
            </div>

            <h3><?php the_title(); ?></h3>

            <div class="le-meta">
                <span class="le-author">by <?php echo get_the_author(); ?></span>
                <span class="le-date">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/le-date.svg" alt="">
                    <?php echo esc_html($date); ?>
                </span>
            </div>

            <?php if ($tags): ?>
            <div class="le-tags">
                <p><?php echo esc_html($tags); ?></p>
            </div>
            <?php endif; ?>

            <div class="le-excerpt">
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?></p>
            </div>

            <div class="le-actions">

                <?php if ($audio_url): ?>
                <a href="<?php echo esc_url($audio_url); ?>" target="_blank" class="le-listen-btn">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/microphone-white.svg" alt="">
                    Listen Now
                </a>
                <?php endif; ?>

                <a href="<?php echo esc_url($read_more ?: get_permalink()); ?>" class="le-read-more">
                    Read More <span>&#8250;</span>
                </a>

            </div>

            <div class="le-waveform">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/waveform.svg" alt="">
            </div>

        </article>

        <?php endwhile; ?>

    </div>

    <!-- Pagination -->
    <div class="le-pagination">

        <?php if ($paged > 1): ?>
            <a href="<?php echo get_previous_posts_page_link(); ?>" class="le-page-btn le-page-prev">
                <span>&#8592;</span> Older Entries
            </a>
        <?php endif; ?>

        <span class="le-page-count">
            <?php echo $paged . ' of ' . $query->max_num_pages; ?>
        </span>

        <?php if ($paged < $query->max_num_pages): ?>
            <a href="<?php echo get_next_posts_page_link($query->max_num_pages); ?>" class="le-page-btn le-page-next">
                Next Entries <span>&#8594;</span>
            </a>
        <?php endif; ?>

    </div>

    <?php
    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('podcast_list', 'podcast_list_shortcode');
