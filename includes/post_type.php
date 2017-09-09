<?php 

// Add Post Type
// Register Custom Post Type

function register_posttype($options) {
	$labels = array(
		'name'                  => _x( $options['name'], 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( $options['name'], 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( $options['name'], 'text_domain' ),
		'name_admin_bar'        => __( $options['name'], 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos Itens', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar novo item', 'text_domain' ),
		'add_new'               => __( 'Adicionar novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Procurar Item', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado no Lixo', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Setar Imagem Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Eventos Label', 'text_domain' ),
		'description'           => __( 'Eventos Descrição', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => $options['support'],
		'taxonomies'            => $options['cat'] === false ?  [] : array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,	
		'rewrite'				=> $options['rewrite'] ? $options['rewrite'] : array(),
		'menu_icon'   			=> $options['icon'],	
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( $options['name'], $args );
}

function custom_post_type() {

	$options = array(
		'name' => 'Albuns de fotos',
		'icon' => 'dashicons-images-alt2',
		'rewrite' => array('slug' => 'nossas-fotos'),
		'support' => ['title']
	);
	register_posttype($options);


	$options = array(
		'name' => 'RSVP',
		'icon' => 'dashicons-email-alt',
		'support' => ['title'],
		'cat' => false,
	);
	register_posttype($options);

	$options = array(
		'name' => 'Recados',
		'icon' => 'dashicons-format-quote',
		'support' => ['title', 'editor'],
		'cat' => false,
	);
	register_posttype($options);

}
add_action( 'init', 'custom_post_type', 0 );



 ?>