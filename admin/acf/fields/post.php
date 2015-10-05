<?php
/**
 * Custom Fields
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/


if(function_exists("register_field_group"))
{

	register_field_group(array (
		'id' => 'acf_register-post-sponsor',
		'title' => 'Post Options',
		'fields' => array (
			array (
				'key' => 'field_1',
				'label' => 'Feature Post',
				'name' => 'featured_post',
				'type' => 'true_false',
				'message' => 'Make this post featured',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));








}


/* Add-Ons */
function zkk_register_fields(){
	include_once('add-ons/acf-gallery/gallery.php');
	include_once('add-ons/acf-repeater/repeater.php');
	include_once('add-ons/acf-flexible-content/flexible-content.php');
}
add_action('acf/register_fields', 'zkk_register_fields'); 