<?php 
	/*
	Template Name: about_me
	*/
?>

<?php get_header(); ?>


<?php 
	$args = array(
		'post_type' => "about_me"
		);
	$query = new WP_Query($args);

?>

<div class ="row">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
			<div class = "content">
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('description')?></p>
				<p><?php the_field('profile_picture')?></p>
			
			</div>

			
			<?php endwhile; endif; wp_reset_postdata(); ?>



</div>


<?php get_footer(); ?>