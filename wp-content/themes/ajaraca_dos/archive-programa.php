<?php get_header(); ?>

	<div class="programas clearfix">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="programa">
			<h3><?php the_title(); ?></h3>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ajaraca_thumb'); ?></a>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>