
<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>


<div class = "content">

	<div class = "column-12">
		<p><?php the_title() ?></p>	
	</div>
	<div class = "column-12">
		<p><?php the_content() ?></p>
	</div>
</div>

<?php endwhile; else : ?>
 <p><?php _e('Sorry no pages to load'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>