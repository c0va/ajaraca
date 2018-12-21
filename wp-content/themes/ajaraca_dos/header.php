<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<?php if(is_home()){ ?>
		<div class="cycle-slideshow slider_gigante" data-cycle-slides="> div">
			<?php 
				$slider = array(
						'post_type' => 'slide',
						'orderby' => 'rand',
						'posts_per_page' => -1
					);

				$slides = get_posts($slider);
				foreach($slides as $post): setup_postdata($post);
						
			?>
				<div class="slider_img" style="background-image: url('<?php the_post_thumbnail_url($post->ID, 'large'); ?>');"></div>
				
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<?php } ?>
		<div class="container">
			<header>
				<div class="logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo THEMEPATH; ?>/images/logo.png"></a>
					<h1>Fundación Ajaraca</h1>
				</div><!-- logo -->
				<div class="menu">
					<ul>
						<li><a class="<?php if(is_page('fundacion-ajaraca')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/fundacion-ajaraca">Fundación</a></li>
						<li><a class="<?php if(is_post_type_archive('programa') || is_singular('programa')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/programas">Programas</a></li>
						<li><a class="<?php if(is_page('alianzas')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/alianzas">Alianzas</a></li>
						<li><a class="<?php if(is_page('participa')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/participa">Participa</a></li>
						<li><a class="<?php if(is_page('dona')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/dona">Dona</a></li>
						<li><a class="<?php if(is_page('contacto')){echo 'selected'; } ?>" href="<?php echo site_url(); ?>/contacto">Contacto</a></li>
					</ul>
				</div><!-- menu -->
			</header>
			
