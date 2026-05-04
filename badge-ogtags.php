<?php
/**
 *
 * Add Custom Dynamic URL for PF Profile
 * view/{profile_nickname}
 * {profile_nickname} can be accessed in the template via get_query_var( 'profile_nickname' )
 *
 */
function custom_rewrite_rule() {
    add_rewrite_rule('view/profile/([^/]*)/?$','index.php?pagename=view&profile_nickname=$matches[1]','top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

add_filter('query_vars', function($query_vars){
    $query_vars[] = 'profile_nickname';
    return $query_vars;
});

function remove_wpseo() {
    if ( get_query_var( 'profile_nickname' ) ) {
        $front_end = YoastSEO()->classes->get( Yoast\WP\SEO\Integrations\Front_End_Integration::class );

        remove_action( 'wpseo_head', [ $front_end, 'present_head' ], -9999 );
    }
}
add_action( 'template_redirect', 'remove_wpseo' );

function add_badge_og_tags() {
	$profileNickname = get_query_var( 'profile_nickname' );
	$class= '';
	$apiUrl = 'https://api.parentfinder.com/api/';
	if($profileNickname){
		$class= 'badgedetail';
		$authBody = json_encode(array('username' => 'guest@guest.com', 
		'password' => '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'));
		$authUrl = $apiUrl . 'authentication';
		$args = array(
			'sslverify' => false,
			'body' => $authBody,
			'timeout' => 60,
			'headers' => array(
				'content-type' => 'application/json'
			)
		);
		$authResponse = wp_remote_post($authUrl, $args);
		if ( is_wp_error( $authResponse ) ) {
			$error_message = $authResponse->get_error_message();
			echo "Something went wrong: $error_message";
		} else {
			$json = json_decode( $authResponse['body'] );
			unset( $authResponse['body'] );
			$accData = array();
			$headers['content-type'] = 'application/json';
			$headers['Authorization'] = 'Bearer ' . $json->token;
			$a_endPoint = $apiUrl . 'Account/Badge/'.$profileNickname;
			$args = array(
				'sslverify' => false,
				'method' => 'GET',
				'body' => $accData,
				'timeout' => 60,
				'headers' => $headers
			);
			
			$reqResponse = wp_remote_post( $a_endPoint, $args );
			if ( is_wp_error( $reqResponse ) ) {
				$error_message = $reqResponse->get_error_message();
				echo "Something went wrong: $error_message";
			} else {
				$accountData = json_decode( $reqResponse['body'] );
				unset( $reqResponse['body'] );					
			}
		}
		$GLOBALS['accountID']  = isset($accountData->data->human[0]->account)?$accountData->data->human[0]->account:'';
		$name = isset($accountData->data->name) ? $accountData->data->name : '';
		$accountType = isset($accountData->data->account_type) ? $accountData->data->account_type : '';
		$avatar = isset($accountData->data->avatar) ? $accountData->data->avatar : '';
		$description = isset($accountData->data->default_letter->description) ? wp_strip_all_tags($accountData->data->default_letter->description) : '';
		if(strtolower($accountType) == 'couple'){
			$name = str_replace(' / ', ' and ', $name);
		}

		echo '<title>'.$name.'</title>
		<link rel="canonical" href="'.get_site_url().'/view/profile/'.$profileNickname.'">
		<meta property="og:site_name" content="'.$name.'">
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta name="title" property="og:title" content="'.$name.'" />
		<meta name="description" property="og:description" content="'.$description.'" />
		<meta property="og:url" content="'.get_site_url().'/view/profile/'.$profileNickname.'" />
		<meta name="image" property="og:image" content="'.$avatar.'" />
		<meta property="og:image:width" content="640" />
		<meta property="og:image:height" content="426" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="description" content="">';
		
		$aaData = isset($accountData->data)?$accountData->data:'';
		$lsdata = 'profileData_'.$profileNickname;
		?>
		<script>
			localStorage.clear();
			let aData = <?php echo json_encode($aaData); ?>;
			localStorage.setItem('<?php echo $lsdata; ?>', JSON.stringify(aData));
		</script>
		<?php
	}
}
add_action('wp_head', 'add_badge_og_tags');