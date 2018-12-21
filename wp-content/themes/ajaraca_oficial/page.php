	<?php get_header(); ?>
	
	<div class="contenido clearfix">
		<div class="contenedor">
			<?php
				if(have_posts()): while(have_posts()): the_post();
				the_content();
				endwhile; endif;
			?>
		</div><!-- contenedor -->
	</div>
	<?php get_footer(); ?>