<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		if( ! get_page_by_path('fundacion-ajaraca') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Fundación Ajaraca',
				'post_name'   => 'fundacion-ajaraca',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('alianzas') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Alianzas',
				'post_name'   => 'alianzas',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
