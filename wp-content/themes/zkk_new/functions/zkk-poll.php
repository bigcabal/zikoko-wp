<?php
/**
 * Zikoko Poll
 *
 * @package ZikokoTheme
**/


/* CRETE DATABASE IF DOESN'T ALREADY EXIST */

$zkkpolls_table_name = $wpdb->prefix . 'zkkpolls_answers';

// will return NULL if there isn't one
if ( $wpdb->get_var('SHOW TABLES LIKE ' . $zkkpolls_table_name) != $zkkpolls_table_name )
{
  $sql = 'CREATE TABLE ' . $zkkpolls_table_name . '( 
      id INTEGER(10) UNSIGNED AUTO_INCREMENT,
      post_id INTEGER(10) NOT NULL default "0", 
      answer varchar(200) character set utf8 NOT NULL default "",
      responses INTEGER(10) NOT NULL default "0",
      PRIMARY KEY  (id) )';
  
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

  dbDelta($sql);
  
  add_option('zkkpolls_database_version','1.0');
}





function add_poll_result_ajax() {

    global $wpdb;  

    $post_id = $_POST['id'];
    $answer = $_POST['answer'];

    

    $update_polla_votes = $wpdb->query("UPDATE wp_zkkpolls_answers SET responses = (responses+1) WHERE answer = '".$answer."' AND post_id = $post_id");

    $new_reponse = $wpdb->get_var( 
          "
          SELECT responses 
          FROM wp_zkkpolls_answers
          WHERE answer = '".$answer."'
          "
        ); 

    echo $new_reponse;



}
add_action('wp_ajax_add_poll_result', 'add_poll_result_ajax');
add_action('wp_ajax_nopriv_add_poll_result', 'add_poll_result_ajax');







?>