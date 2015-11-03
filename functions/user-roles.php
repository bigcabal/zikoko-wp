<?php
/**
 * User Roles and Capabilities
 *
 * @package ZikokoTheme
**/

function zkk_set_capabilities() {

    // Get the role object.
    $editor = get_role( 'editor' );
    $author = get_role( 'author' );
    $contributor = get_role( 'contributor' );

    $add_contributor_caps = array(
        'upload_files',
    );
    foreach ( $add_contributor_caps as $cap ) {
        $contributor->add_cap( $cap );
    }

    $add_editor_caps = array(
        'edit_others_posts',
        'edit_others_pages',
        'delete_posts',
        'manage_categories',
        'manage_links',
    );
    foreach ( $add_editor_caps as $cap ) {
        $editor->add_cap( $cap );
    }


  

}
add_action( 'init', 'zkk_set_capabilities' );


function zkk_custom_menu_pages() {

    // Everyone
	remove_menu_page('edit-comments.php'); 


    // Contributors
    if( !current_user_can('publish_posts') ) {
        remove_menu_page( 'options-general.php' );  // Settings
    }

    // Authors + Contributors
    if( !current_user_can('edit_others_posts') ) {
        
    }

    // Everyone except Admin (Authors + Contributors + Editors)
    if( !current_user_can('manage_options') ) {
        remove_menu_page('tools.php'); 
        remove_menu_page('jetpack');
    }

}
add_action( 'admin_menu', 'zkk_custom_menu_pages' );



 


?>