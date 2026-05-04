<?php 
/*
Template Name: Test
*/

?>

<?php 

$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'post',
    'post_status'   => 'publish'
);
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) {
        $the_query->the_post(); 
    echo '<p><a href="'.get_the_permalink().'">' . get_the_permalink() . '</a></p>';
}

?>