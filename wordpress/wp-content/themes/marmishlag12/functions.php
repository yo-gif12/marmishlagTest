<?php

function wphetic_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('header', 'En tête de menu');
    add_image_size('post-thumbnail-crop', 350, 215, true);
    remove_image_size('medium');
    add_image_size('medium', 700, 700);
}
add_action('after_setup_theme', 'wphetic_theme_support');

// Taxonomies
function cptui_register_my_taxes() {
	/**
	 * Taxonomie: Types de recettes.
	 */

	$labels = [
		"name" => __( "Types de recettes", "custom-post-type-ui" ),
		"singular_name" => __( "Type de recette", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Types de recettes", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'types_recettes', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "types_recettes",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "types_recettes", [ "recettes2" ], $args );

	/**
	 * Taxonomie: Coups de cœur.
	 */

	$labels = [
		"name" => __( "Coups de cœur", "custom-post-type-ui" ),
		"singular_name" => __( "Coup de cœur", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Coups de cœur", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'coup_de_coeur', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "coup_de_coeur",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "coup_de_coeur", [ "recettes2" ], $args );

	/**
	 * Taxonomy: Gastronomies.
	 */

	$labels = [
		"name" => __( "Gastronomies", "custom-post-type-ui" ),
		"singular_name" => __( "Gastronomie", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Gastronomies", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gastronomie', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "gastronomie",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "gastronomie", [ "recettes2" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

// Custom post type
function cptui_register_my_cpts() {

	/**
	 * Post Type: Recettes2.
	 */

	$labels = [
		"name" => __( "Recettes2", "custom-post-type-ui" ),
		"singular_name" => __( "Recette2", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Recettes2", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "recettes2", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-carrot",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
        "capabilities" => array(
            "edit_post" => "edit_recipes",
            "read_post" => "read_recipes",
            "delete_post" => "delete_recipes",
        ),
	];

	register_post_type( "recettes2", $args );
}
add_action( 'init', 'cptui_register_my_cpts' );

// Autorisation de téléversement d'image mise en avant pour le custom_contributor
if ( current_user_can('custom_contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
     $contributor = get_role('custom_contributor');
     $contributor->add_cap('upload_files');
}

// Autorisation de téléversement d'image mise en avant pour le custom_moderator
if ( current_user_can('custom_moderator') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_moderator_uploads');
function allow_moderator_uploads() {
        $moderator = get_role('custom_moderator');
        $moderator->add_cap('upload_files');
}

// Ajout du framework CSS Tailwind
function wphetic_tailwind(){
    wp_enqueue_script('tailwind_js', 'https://cdn.tailwindcss.com', [], false, true);
}
add_action('wp_enqueue_scripts', 'wphetic_tailwind');

// Ajout de notre feuille de style
function wphetic_mycss(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wphetic_mycss');

// Fonction pagination
function montheme_pagination(){
    $pages = paginate_links(['type' => 'array']);
    if($pages === null){
        return;
    }
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="inline-flex -space-x-px">';
    foreach($pages as $page){
        $active = strpos($page, 'current') !== false;
        $class = 'bg-white border border-gray-300 text-gray-500 hover:bg-fuchsia-100 hover:text-gray-700 leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white';
        if($active){
            $class = 'bg-fuchsia-700 border border-fuchsia-700 text-white  py-2 px-3 dark:border-gray-700 dark:bg-gray-700 dark:text-white';
        }
        echo '<li>';
        echo str_replace('page-numbers', $class, $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

// Fonction Inscription
function postUserRegisterForm (){
    $userData = ['role' => 'custom_contributor'];
    $userData = array_merge($userData, $_POST);
    unset($userData['_wp_http_referer']);
    unset($userData['action']);
    
    wp_insert_user($userData);
    wp_redirect($_POST['_wp_http_referer']);
    exit();
}
add_action('admin_post_wpregister_marmishlag_form', 'postUserRegisterForm');
add_action('admin_post_nopriv_wpregister_marmishlag_form', 'postUserRegisterForm');


// Redirection à la login/déconnexion
function ps_redirect(){
	wp_redirect( home_url() );
	exit();
}
add_action('wp_logout','ps_redirect');
add_action('wp_login','ps_redirect');

$terms = get_the_terms( $post->ID, 'your-taxonomy' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    echo $term->slug;
}

?>
