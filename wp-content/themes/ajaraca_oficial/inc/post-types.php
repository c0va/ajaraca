<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// PROGRAMAS
		$labels = array(
			'name'          => 'Programas',
			'singular_name' => 'Programa',
			'add_new'       => 'Nuevo Programa',
			'add_new_item'  => 'Nuevo Programa',
			'edit_item'     => 'Editar Programa',
			'new_item'      => 'Nuevo Programa',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Programa',
			'search_items'  => 'Buscar Programa',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Programas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'programas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'programa', $args );

	});