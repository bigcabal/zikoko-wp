<?php
/**
 * Zikoko Poll
 *
 * @package ZikokoTheme
**/


/* CREATE DATABASE IF DOESN'T ALREADY EXIST */

$zkkpoll_table_name = 'bc_zkkpoll';


if ( $wpdb->get_var('SHOW TABLES LIKE ' . $zkkpoll_table_name) != $zkkpoll_table_name )
{
	$sql = 'CREATE TABLE ' . $zkkpoll_table_name . '( 
      id INTEGER(10) UNSIGNED AUTO_INCREMENT,
      post_id INTEGER(10) NOT NULL default "0", 
      poll_key varchar(200) character set utf8 NOT NULL default "",
      answer varchar(200) character set utf8 NOT NULL default "",
      responses INTEGER(10) NOT NULL default "0",
      PRIMARY KEY  (id) )';

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

	dbDelta($sql);

	add_option('zkkpoll_database_version','1.0');
}





function add_poll_answer_ajax() {

    global $wpdb;  

    $post_id = $_POST['post_id'];
    $poll_key = $_POST['poll_key'];
    $answer = $_POST['answer'];


    // Add Vote to Database
    $add_user_vote = $wpdb->query(
    	"
    	UPDATE bc_zkkpoll 
    	SET responses = (responses+1) 
    	WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
    	"
    );

    // Get Updated Vote Count
    $updatedVote = $wpdb->get_var( 
    	"
    	SELECT responses 
    	FROM bc_zkkpoll
    	WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
    	"
    ); 
    
    // Pass updated vote count back to front end
    echo $updatedVote;

}
add_action('wp_ajax_add_poll_answer', 'add_poll_answer_ajax');
add_action('wp_ajax_nopriv_add_poll_answer', 'add_poll_answer_ajax');







?>