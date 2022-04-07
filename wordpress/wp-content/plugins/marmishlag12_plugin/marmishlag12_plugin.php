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
});

register_deactivation_hook(__FILE__, function(){
    remove_role('custom_moderator');
    remove_role('custom_contributor');
});

?>