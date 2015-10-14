<?php
/**
 * Custom Fields for Posts (New)
 *
 * @package ZikokoTheme
**/


if(function_exists("register_field_group"))
{	

/* *****************************

		POST OPTIONS

***************************** */


register_field_group(array (
	'id' => 'acf_register-post-options',
	'title' => 'Post Options',
	'fields' => array (


		// Post Type
		array (
			'key' => 'post_type_key',
			'label' => 'Post Type',
			'name' => 'post_type_option',
			'type' => 'radio',
			'instructions' => 'Messe',

			'choices' => array(
				'plain' => 'Plain List',
				'numbered' => 'Numbered',
				'countdown' => 'Countdown'
			),
			'other_choice' => 0,
			'default_value' => 'plain',
			'layout' => 'horizontal',
		),

		// Post Format
		array (
			'key' => 'post_format_key',
			'label' => 'Post Format',
			'name' => 'post_format_option',
			'type' => 'radio',
			'instructions' => 'Choose how you want to be represented',

			'choices' => array(
				'standard' => 'Standard',
				'card' => 'Cards',

			),
			'other_choice' => 0,
			'default_value' => 'standard',
			'layout' => 'horizontal',
		),




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
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
			0 => 'the_content',
		),
	),
	'menu_order' => 1,
));





/* *****************************

		THE POST

***************************** */

register_field_group(array (
	'id' => 'acf_register-the-post',
	'title' => 'Post',
	'fields' => array (


		// Content Block
		array (
			'key' => 'post_content_block_key',
			'label' => 'Content Block',
			'name' => 'post_content_block1',
			'type' => 'repeater',
			'instructions' => 'Instructions here.',
			'layout' => 'horizontal',
			'column_width' => '',
			'sub_fields' => array (


				/*
				 *
				 *  HEADLINE
				 *
				 */
				array (
					'key' => 'post_content_headline',
					'label' => 'Headline',
					'name' => 'post_content_headline',
					'type' => 'text',
					'default_value' => '',
					'parent' => 'post_content_block_key'
				),


				/*
				 *
				 *  MEDIA
				 *
				 */
				array (
					'key' => 'post_content_media_choice',
					'label' => 'Add Media',
					'name' => 'post_content_media_choice',
					'type' => 'radio',
					'instructions' => 'Choose a media to include',

					'choices' => array(
						'none' => 'None',
						'image' => 'Image',
						'embed' => 'Embed',
						'quote' => 'Quote',
						'quiz' => 'Quiz',
						//'poll' => 'Poll'
					),
					'other_choice' => 0,
					'default_value' => 'none',
					'layout' => 'horizontal',
					'parent' => 'post_content_block_key'
				),



					/*
					 *
					 *  MEDIA - IMAGE
					 *
					 */

					// Image Upload
					array (
						'key' => 'post_content_media__image_url',
						'label' => 'Upload Image',
						'name' => 'post_content_media__image_url',
						'type' => 'image',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
					),

					// Image Credit
					array (
						'key' => 'post_content_media__image_credit',
						'label' => 'Image Credit',
						'instructions' => 'Who does this image belong to?',
						'name' => 'post_content_media__image_credit',
						'type' => 'text',
						'default_value' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
					),

					// Image Credit
					array (
						'key' => 'post_content_media__image_via',
						'label' => 'Via',
						'instructions' => 'Where did you get the image? Paste the URL here',
						'name' => 'post_content_media__image_via',
						'type' => 'url', // ISSUE WITH URL
						'placeholder' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'image',
								),
							),
							'allorany' => 'all',
						),
					),





					/*
					 *
					 *  MEDIA - Embed
					 *
					 */

					// Embed
					array (
						'key' => 'post_content_media__embed_url',
						'label' => 'Add Embed URL',
						'instructions' => 'Paste a URL to create an embed for Instagram. For other sources, paste the embed code',
						'name' => 'post_content_media__embed_url',
						'type' => 'textarea',
						'default_value' => '',
						'rows' => '3',
						'new_lines' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'embed',
								),
							),
							'allorany' => 'all',
						),
					),



					/*
					 *
					 *  MEDIA - Quote
					 *
					 */

					// Quote Text
					array (
						'key' => 'post_content_media__quote_text',
						'label' => 'Quote Text',
						'instructions' => '',
						'name' => 'post_content_media__quote_text',
						'type' => 'textarea',
						'default_value' => '',
						'rows' => '3',
						'new_lines' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'quote',
								),
							),
							'allorany' => 'all',
						),
					),

					// Quote Text
					array (
						'key' => 'post_content_media__quote_author',
						'label' => 'Quote Credit',
						'instructions' => 'Who said this?',
						'name' => 'post_content_media__quote_author',
						'type' => 'text',
						'default_value' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'quote',
								),
							),
							'allorany' => 'all',
						),
					),



					/*
					 *
					 *  MEDIA - Quiz
					 *
					 */

					// Quiz
					array (
						'key' => 'post_content_media__quiz_shortcode',
						'label' => 'WP Viral Quiz Shortcode',
						'instructions' => 'Paste the shortcode from the "WP Viral Quiz" Quiz you created',
						'name' => 'post_content_media__quiz_shortcode',
						'type' => 'text',
						'default_value' => '',

						'parent' => 'post_content_block_key',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'post_content_media_choice',
									'operator' => '==',
									'value' => 'quiz',
								),
							),
							'allorany' => 'all',
						),
					),








				/*
				 *
				 *  DESCRIPTION
				 *
				 */
				array (
					'key' => 'post_content_description',
					'label' => 'Additional Text',
					'name' => 'post_content_description',
					'type' => 'wysiwyg',
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 'no',

					'parent' => 'post_content_block_key'
				),


			),
			'row_min' => 1,
			'row_limit' => 100,
			'layout' => 'row',
			'button_label' => 'Add Content Block',
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
			0 => 'the_content',
		),
	),
	'menu_order' => 2,
));







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



		// Poll Answers
		array (
			'key' => 'field_poll_answers',
			'label' => 'Answers',
			'name' => 'poll_answers1',
			'type' => 'repeater',
			'instructions' => 'Add the answers you want people to be able to give. You can add up to 10 answers.',
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
			'row_limit' => 10,
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
			),
		),
	),
	'options' => array (
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
			0 => 'the_content',
		),
	),
	'menu_order' => 3,
));




}

?>