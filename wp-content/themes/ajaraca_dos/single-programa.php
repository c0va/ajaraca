<?php get_header(); ?>

	<div class="contenido clearfix">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			
			<h2><?php the_title(); ?></h2>

			<div class="carrusel_fotos clearfix">
				<?php 
					$post_id = $post->ID;
					$thumb_id = get_post_thumbnail_id();
					$images = array(
							'post_type' => 'attachment',
							'post_parent' => $post_id,
							'exclude' => $thumb_id,
							'posts_per_page' => 2
						);

					$imagenes = get_posts($images);
					foreach($imagenes as $image):
					$img = wp_get_attachment_image($image->ID, 'ajaraca_thumb', false);
				?>

				<?php echo $img; ?>
				
				<?php endforeach; ?>
			</div>

			<?php the_content(); ?>

		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>