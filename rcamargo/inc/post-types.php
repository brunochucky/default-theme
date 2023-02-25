<?php


function post_types(){

	register_post_type('artistas', array(
	    'label' => 'Artistas',
	    'description' => '',
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    
	    'rewrite' => array(   
	    'with_front' => false,
	    'slug' => 'artistas'
	    ),

	    'query_var' => true,
	    'has_archive' => true,
	    'supports' => array('title','editor','revisions','thumbnail','page-attributes','custom-fields'),

	    'labels' => array (
	      'name' => 'Artistas',
	      'singular_name' => 'Artistas',
	      'menu_name' => 'Artistas',
	      'add_new' => 'Adicionar Artista',
	      'add_new_item' => 'Adicionar nova Artista',
	      'edit' => 'Editar',
	      'edit_item' => 'Editar Artista',
	      'new_item' => 'Novo Artista',
	      'view' => 'Ver Artista',
	      'view_item' => 'Ver Artista',
	      'search_items' => 'Localizar Artistas',
	      'not_found' => 'Nenhum Artista Encontrado',
	      'not_found_in_trash' => 'Nenhum Artista na Lixeira',
	      'parent' => 'Artista Pai'
    )) );

	register_post_type('exposicoes', array(
	    'label' => 'Exposições',
	    'description' => '',
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'taxonomies'  => array( 'category' ),
	    
	    'rewrite' => array(   
	    'with_front' => false,
	    'slug' => 'exposicoes'
	    ),

	    'query_var' => true,
	    'has_archive' => true,
	    'supports' => array('title','editor','revisions','thumbnail','page-attributes','custom-fields'),

	    'labels' => array (
	      'name' => 'Exposições',
	      'singular_name' => 'Exposições',
	      'menu_name' => 'Exposições',
	      'add_new' => 'Adicionar Exposição',
	      'add_new_item' => 'Adicionar nova Exposição',
	      'edit' => 'Editar',
	      'edit_item' => 'Editar Exposição',
	      'new_item' => 'Nova Exposição',
	      'view' => 'Ver Exposição',
	      'view_item' => 'Ver Exposição',
	      'search_items' => 'Localizar Exposições',
	      'not_found' => 'Nenhuma Exposição Encontrada',
	      'not_found_in_trash' => 'Nenhuma Exposição na Lixeira',
	      'parent' => 'Exposição Pai'
    )) );



    register_post_type('obras', array(
	    'label' => 'Obras',
	    'description' => '',
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    
	    'rewrite' => array(   
	    'with_front' => false,
	    'slug' => 'obras'
	    ),

	    'query_var' => true,
	    'has_archive' => true,
	    'supports' => array('title','editor','revisions','thumbnail','page-attributes','custom-fields'),

	    'labels' => array (
	      'name' => 'Obras',
	      'singular_name' => 'Obras',
	      'menu_name' => 'Obras',
	      'add_new' => 'Adicionar Obra',
	      'add_new_item' => 'Adicionar nova Obra',
	      'edit' => 'Editar',
	      'edit_item' => 'Editar Obra',
	      'new_item' => 'Nova Obra',
	      'view' => 'Ver Obra',
	      'view_item' => 'Ver Obra',
	      'search_items' => 'Localizar Obras',
	      'not_found' => 'Nenhuma Obra Encontrada',
	      'not_found_in_trash' => 'Nenhuma Obra na Lixeira',
	      'parent' => 'Obra Pai'
    )) );

}


function post_custom_tax() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('custom_tag',array('obras','artistas','exposicoes'),array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'custom_tag' ),
  ));
}



?>