	<?php get_header(); ?>
	<div class="contenedor clearfix programas">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			
		<div class="programa">
			
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h3><?php the_title(); ?></h3>

		</div>
		
		<?php endwhile; endif; ?>

	</div>
	<?php get_footer(); ?>