<?php get_header(); ?>

	<div class="contenido clearfix">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			
			<?php the_content(); ?>

		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>