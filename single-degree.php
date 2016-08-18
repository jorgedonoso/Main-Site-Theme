<?php disallow_direct_load('single-degree.php');?>
<?php get_header(); the_post();?>
<?php
	$post = append_degree_metadata( $post, true );
?>
<?php 
	if ( $post->use_updated_template ) {
		get_template_part( 'degree-profile' );
	} else {
		get_template_part( 'classic-degree-profile' );
	}
?>

<?php get_footer();?>
