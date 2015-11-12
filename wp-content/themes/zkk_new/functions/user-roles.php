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

    // Authors + Contributors + Editors
    if( !current_user_can('manage_options') ) {
        remove_menu_page('tools.php'); 
        remove_menu_page('jetpack');
    }

}
add_action( 'admin_menu', 'zkk_custom_menu_pages' );









/* DASHBOARD */

function dashabord_widget_welcome_display() {


    // Contributors Only
    if( !current_user_can('publish_posts') ) { 

      ?>

      <p>Thanks for creating an account with us. You currently have a <strong>Contributor</strong> account.</p>
      <h2>Creating Posts</h2>
      <p>To create a post, click on 'Posts' in the sidebar then 'Add New'. As you have a Contributor account, you can create as many posts and quizzes as you like. All you have to do is <strong>submit them for review</strong>. They will be reviewed and published on the site.</p>
      <h2>Creating Quizzes</h2>
      <p>To create a quiz, click on 'QP Viral Quiz' in the sidebar. You only have access to quizzes you have created yourself. Follow the instructions on the page to create your quiz.</p><br>
      <strong style="font-size: 16px;">Need help?</strong>
      <p>Email us at <a href="mailto:lola@zikoko.com">lola@zikoko.com</a></p>

      <?php 
    }



    // Authors Only
    if( !current_user_can('edit_others_posts') && current_user_can('publish_posts') ) { 

      ?>

      <p>Thanks for creating an account with us. You currently have an <strong>Author</strong> account.</p>
      <h2>Creating Posts</h2>
      <p>To create a post, click on 'Posts' in the sidebar then 'Add New'. As you have an Author account, you can create and publish as many posts and quizzes as you like.</p>
      <h2>Creating Quizzes</h2>
      <p>To create a quiz, click on 'QP Viral Quiz' in the sidebar. You only have access to quizzes you have created yourself. Follow the instructions on the page to create your quiz.</p><br>
      <strong style="font-size: 16px;">Need help?</strong>
      <p>Email us at <a href="mailto:lola@zikoko.com">lola@zikoko.com</a></p>

      <?php 
    }


    // Editors Only
    if( !current_user_can('manage_options') && current_user_can('edit_pages') ) { 

      ?>

      <p>Thanks for creating an account with us. You currently have an <strong>Editor</strong> account. You have access to creating an editing all posts and quizzess. You can also publish posts submitted for review by Contributors.</p>


      <?php 
    }


    // Admin Only
    if( current_user_can('manage_options') ) { 

      ?>

      <p><strong>Administrator</strong> account.</p>


      <?php 
    }


}

function dashabord_widget_welcome() {

  global $wp_meta_boxes;


  wp_add_dashboard_widget(
    'my_dashboard_widget',
    'Welcome to Zikoko',
    'dashabord_widget_welcome_display'
  );


  $dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

  $my_widget = array( 'my_dashboard_widget' => $dashboard['my_dashboard_widget'] );
  unset( $dashboard['my_dashboard_widget'] );

  $sorted_dashboard = array_merge( $my_widget, $dashboard );
  $wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}
add_action( 'wp_dashboard_setup', 'dashabord_widget_welcome' );


function remove_dashboard_widgets(){

    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Draft


    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News


    
// use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');







function remove_plugin_metaboxes(){
    if ( ! current_user_can( 'publish_posts' ) ) { // Only run if the user is an Author or lower.
        remove_meta_box( 'wpseo_meta', 'dashboard', 'normal' ); // Remove Edit Flow Editorial Metadata
    }
}











 


?>