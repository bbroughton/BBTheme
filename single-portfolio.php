<?php 
	/*
	Template Name: Portfolio Page
	*/
?>


<?php get_header(); ?>

	<div class = 'left-column'>
   
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
	<p><?php the_field('description')?></p>

	</div>

	<div class = "right-column">

		<div class = "right-image">
		<?php 
			 if(is_mobile()) {
   				the_post_thumbnail('thumbnail');
   			} else {
   				the_post_thumbnail('portfolio-image');}
   		 ?>

		</div>

	<?php endwhile; endif; ?>

	</div>
<div class = "column-12">
<?php get_footer(); ?>
</div>