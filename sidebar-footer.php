<?php
$et_active_sidebars = et_divi_footer_active_sidebars();
if ( $et_active_sidebars === false ) {
	return;
}
?>

<div class="container">
    <div class="cities-we-serve">
		<ul>
			<li>Phoenix</li>
			<li>Tucson</li>
			<li>Mesa</li>
			<li>Chandler</li>
			<li>Gilbert</li>
			<li>Glendale</li>
			<li>Scottsdale</li>
			<li>Peoria</li>
			<li>Tempe</li>
			<li>Surprise</li>
			<li>San Tan Valley</li>
			<li>Yuma</li>
			<li>Goodyear</li>
			<li>Buckeye</li>
			<li>Avondale</li>
			<li>Flagstaff</li>
			<li>Casas Adobes</li>
			<li>Queen Creek</li>
			<li>Maricopa</li>
			<li>Pima</li>
			<li>Pinal</li>
			<li>Yavapai</li>
			<li>Mohave</li>
			<li>Yuma</li>
			<li>Coconino</li>
			<li>Cochise</li>
			<li>Navajo</li>
			<li>Apache</li>
			<li>Gila</li>
			<li>Santa Cruz</li>
			<li>Graham</li>
			<li>La Paz</li>
			<li>Greenlee</li>
		</ul>
	</div>
	<div id="footer-widgets" class="clearfix">
		<?php
		foreach ( $et_active_sidebars as $footer_sidebar ) :
			echo '<div class="footer-widget">';
			dynamic_sidebar( $footer_sidebar );
			echo '</div>';
		endforeach;
		?>
	</div>
</div>
