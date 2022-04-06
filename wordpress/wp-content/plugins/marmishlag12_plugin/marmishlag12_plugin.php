<?php
/**
 * Plugin Name: Marmishlag Plugin
 * Description: Ce plugin permettra d'intégrer les rôles custom_contributor et custom_moderator
 * Version: 1.0.0
 * Author: Jacky TRUONG
 * Author URI: https://www.linkedin.com/in/jacky-truong-a6a644171/
 */


register_activation_hook(__FILE__, function(){
    add_role('custom_contributor', 'Custom Contributor', array(
        'read' => true,
        'edit_posts' => true,
        'delete_posts' => true,
    ));
    
    // Autorisation de téléversement d'image mise en avant pour le custom_contributor
    if ( current_user_can('custom_contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
    function allow_contributor_uploads() {
         $contributor = get_role('custom_contributor');
         $contributor->add_cap('upload_files');
    }
    
    add_role('custom_moderator', 'Custom Moderator', array(
        'read' => true,
        'edit_posts' => true,
        'edit_private_posts' => true,
        'edit_published_posts' => true,
        'edit_others_posts' => true,
        'delete_private_posts' => true,
        'delete_published_posts' => true,
        'delete_others_posts' => true,
        'publish_posts' => true,
    ));
    
    // Autorisation de téléversement d'image mise en avant pour le custom_moderator
    if ( current_user_can('custom_moderator') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_moderator_uploads');
    function allow_moderator_uploads() {
         $moderator = get_role('custom_moderator');
         $moderator->add_cap('upload_files');
    }

});

register_deactivation_hook(__FILE__, function(){
    remove_role('custom_moderator');
    remove_role('custom_contributor');
});

?>