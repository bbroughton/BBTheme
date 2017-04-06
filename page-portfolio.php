<?php 
	/*
	Template Name: Portfolio Page
	*/
?>

<?php get_header(); ?>


<?php 
	$args = array(
		'post_type' => "portfolio"
		);
	$query = new WP_Query($args);

?>

<div>

			<table class = "small-table">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
			<td>
			<div class = "content">

			<a href="<?php the_permalink(); ?>" class = "filtered">
			<?php the_post_thumbnail('portfolio-thumb');?></a>
			</div>
			</td>
			
			<?php endwhile; endif; wp_reset_postdata(); ?>

			</table>

</div>-

<?php get_footer(); ?>