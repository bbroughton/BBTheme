
<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>


<div class = "content">

			<div class = "column-12">
				<p><?php the_title() ?></p>	
			</div>
			<div class = "column-12">
				<?php the_content() ?>
			</div>
</div>

<?php endwhile; else : ?>
 <p>Sorry no posts to load</p>
<?php endif; ?>


<?php get_footer(); ?>