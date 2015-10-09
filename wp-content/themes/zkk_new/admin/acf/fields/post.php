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
		'id' => 'acf_register-post-options',
		'title' => 'Post Options',
		'fields' => array (

			// Feature Post
			array (
				'key' => 'field_53ad7fb9bd2bb',
				'label' => 'Feature Post',
				'name' => 'featured_post_add',
				'type' => 'true_false',
				'message' => 'Make this post featured',
				'default_value' => 0,
			),



			// Post sponsor
			array (
				'key' => 'field_531c5wer',
				'label' => 'Is this a sponsored post?',
				'name' => 'sponsored_post_q',
				'type' => 'radio',
				'choices' => array(
					'no'	=> 'No',
					'yes'	=> 'Yes'
				),
				'other_choice' => 0,
				'default_value' => 'no',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_55d4a17b009ce',
				'label' => 'Sponsor Page',
				'name' => 'sponsored_post',
				'type' => 'post_object',
				'instructions' => 'Choose the post sponsor page',
				'post_type' => array (
					"page"
				),
				'return_format' => 'object',
				'layout' => 'horizontal',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_531c5wer',
							'operator' => '==',
							'value' => 'yes',
						),
					),
					'allorany' => 'all',
				),
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



	// Sponsor Page


	register_field_group(array (
		'id' => 'acf_sponsor-options',
		'title' => 'Sponsor Page Options',
		'fields' => array (
			array (
				'key' => 'field_73249p24',
				'label' => 'Small Logo',
				'instructions' => 'Upload a square logo. Will be cropped to 60x60 pixels',
				'name' => 'logo_small',
				'type' => 'image',
				'save_format' => 'url', 
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_73249p24_website',
				'label' => 'Website',
				'name' => 'sponsor_website',
				'type' => 'text',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_73249p24_fb',
				'label' => 'Facebook Username',
				'name' => 'sponsor_social_facebook',
				'type' => 'text',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_73249p24_tw',
				'label' => 'Twitter Username',
				'name' => 'sponsor_social_twitter',
				'type' => 'text',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-sponsor.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));



	


	// Poll

	register_field_group(array (
		'id' => 'acf_register-poll',
		'title' => 'Poll Options',
		'fields' => array (


			// Toggle post
			array (
				'key' => 'post_poll_toggle',
				'label' => 'Add Poll',
				'name' => 'post_poll_toggle',
				'type' => 'true_false',
				'message' => 'Add a Poll',
				'default_value' => 0,
			),



			// Poll Question
			array (
				'key' => 'poll_question',
				'label' => 'Question',
				'name' => 'poll_question',
				'type' => 'text',
				'default_value' => '',

				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'post_poll_toggle',
							'operator' => '==',
							'value' => 1,
						),
					),
					'allorany' => 'all',
				),
			),



			// Poll Anawers
			array (
				'key' => 'field_poll_answers',
				'label' => 'Answers',
				'name' => 'poll_answers1',
				'type' => 'repeater',
				'instructions' => 'Instructions here',
				'layout' => 'horizontal',
				'column_width' => '',
				'sub_fields' => array (

					array (
						'key' => 'poll_answer_text',
						'label' => 'Answer',
						'name' => 'poll_answer_text1',
						'type' => 'text',
						'default_value' => '',
						'parent' => 'field_poll_answers'
					),
					// array (
					// 	'key' => 'poll_answer_image',
					// 	'label' => 'Image',
					// 	'name' => 'poll_answer_image11',
					// 	'type' => 'image',
					// 	'save_format' => 'url',
					// 	'preview_size' => 'thumbnail',
					// 	'library' => 'all',
					// 	'parent' => 'field_poll_answers'
					// ),

				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Answer',

				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'post_poll_toggle',
							'operator' => '==',
							'value' => 1,
						),
					),
					'allorany' => 'all',
				),
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
			'position' => 'normal',
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