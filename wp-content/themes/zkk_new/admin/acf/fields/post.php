<?php
/**
 * Custom Fields for Posts
 *
 * @package ZikokoTheme
**/



if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_561e2e561152b',
	'title' => 'Post',
	'fields' => array (
		array (
			'key' => 'field_561e47c2a85e5',
			'label' => 'Post Type',
			'name' => 'post_type',
			'type' => 'radio',
			'instructions' => 'Choose what type of post this is. 

"Numbered" will add chronological numbers to each content block you add.
"Countdown" will add reverse chronological numbers.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'plain_list' => 'Plain List',
				'numbered' => 'Numbered',
				'countdown' => 'Countdown',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'plain_list',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_561e2c60d251f',
			'label' => 'Post Format',
			'name' => 'post_format',
			'type' => 'radio',
			'instructions' => 'Choose how you want to the post to be represented.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'standard' => 'Standard',
				'cards' => 'Cards',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'standard',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_561e2993ffd26',
			'label' => 'Content Block (Standard Format)',
			'name' => 'content_block_standard_format',
			'type' => 'repeater',
			'instructions' => 'Add a block of content',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561e2c60d251f',
						'operator' => '==',
						'value' => 'standard',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add',
			'sub_fields' => array (
				array (
					'key' => 'field_561e29beffd27',
					'label' => 'Headline',
					'name' => 'headline',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Headline',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e2caed2520',
					'label' => 'Add Media',
					'name' => 'media_choice',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'none' => 'None',
						'image' => 'Image',
						'embed' => 'Embed',
						'quote' => 'Quote',
						'quiz' => 'Quiz',
						'poll' => 'Poll',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'none',
					'layout' => 'horizontal',
				),
				array (
					'key' => 'field_561e2ce0d2521',
					'label' => 'Image Upload',
					'name' => 'image_upload',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_561e2cfad2522',
					'label' => 'Image Credit',
					'name' => 'image_credit',
					'type' => 'text',
					'instructions' => 'Who does this image belong to?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Paste the name of the person or organisation here',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e2d0ad2523',
					'label' => 'Via',
					'name' => 'via',
					'type' => 'url',
					'instructions' => 'Where did you get the image? ',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Paste the URL here (http://...)',
				),
				array (
					'key' => 'field_561e42e014c0b',
					'label' => 'Choose Embed Souce',
					'name' => 'choose_embed',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'embed',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'instagram' => 'Instagram',
						'other' => 'Other',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
				),
				array (
					'key' => 'field_561e433d14c0c',
					'label' => 'Instagram URL',
					'name' => 'embed_code_instagram',
					'type' => 'text',
					'instructions' => 'Paste the link to the Instagram image or video',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'embed',
							),
							array (
								'field' => 'field_561e42e014c0b',
								'operator' => '==',
								'value' => 'instagram',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'https://instagram.com/',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e4217d3281',
					'label' => 'Embed Code',
					'name' => 'embed_code_other',
					'type' => 'oembed',
					'instructions' => 'Add embeds. 

For certain...',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'embed',
							),
							array (
								'field' => 'field_561e42e014c0b',
								'operator' => '==',
								'value' => 'other',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array (
					'key' => 'field_561e43d4b505b',
					'label' => 'Quote Text',
					'name' => 'quote_text',
					'type' => 'textarea',
					'instructions' => 'Paste the quote here. We will add the quotation marks for you',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'quote',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'It\'s never that serious...',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e43e8b505c',
					'label' => 'From',
					'name' => 'from',
					'type' => 'text',
					'instructions' => 'Who said this?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'quote',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Zikoko',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e440eb505d',
					'label' => 'Quiz Shortcode',
					'name' => 'quiz_shortcode',
					'type' => 'text',
					'instructions' => 'Place the shortcode from the "WP Viral Quiz" you created',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'quiz',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '[viralQuiz id=]',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e4435b505e',
					'label' => 'Poll Question',
					'name' => 'poll_question',
					'type' => 'text',
					'instructions' => 'What do you want to ask?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'poll',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_561e51fa91856',
					'label' => 'Question Background Colour',
					'name' => 'question_background_colour',
					'type' => 'color_picker',
					'instructions' => 'Choose a background colour that the Poll Question will be on.',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'poll',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '#5A1490',
				),
				array (
					'key' => 'field_561e524191857',
					'label' => 'Question Text Colour',
					'name' => 'question_text_colour',
					'type' => 'color_picker',
					'instructions' => 'Choose a colour for the Poll Question text.',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'poll',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '#FFFFFF',
				),
				array (
					'key' => 'field_561e461434a6d',
					'label' => 'Answers Format',
					'name' => 'answers_format',
					'type' => 'radio',
					'instructions' => 'What format should the answers to the poll be?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'poll',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'text' => 'Text Only',
						'images' => 'Images and Text',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'text',
					'layout' => 'horizontal',
				),
				array (
					'key' => 'field_561e463c34a6e',
					'label' => 'Answers',
					'name' => 'answers',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e2caed2520',
								'operator' => '==',
								'value' => 'poll',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => 1,
					'max' => 9,
					'layout' => 'table',
					'button_label' => 'Add Answer',
					'sub_fields' => array (
						array (
							'key' => 'field_561e466334a70',
							'label' => 'Answer',
							'name' => 'answer_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'Answer Text Here',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_561e467234a71',
							'label' => 'Image',
							'name' => 'answer_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_561e461434a6d',
										'operator' => '==',
										'value' => 'images',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
				array (
					'key' => 'field_561e29dcffd28',
					'label' => 'Additional Text',
					'name' => 'additional_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
				),
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
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'custom_fields',
	),
	'active' => 1,
	'description' => '',
));

endif;















//if(function_exists("register_field_group"))
//{

	// register_field_group(array (
	// 	'id' => 'acf_register-post-options',
	// 	'title' => 'Post Options',
	// 	'fields' => array (

	// 		// Feature Post
	// 		array (
	// 			'key' => 'field_53ad7fb9bd2bb',
	// 			'label' => 'Feature Post',
	// 			'name' => 'featured_post_add',
	// 			'type' => 'true_false',
	// 			'message' => 'Make this post featured',
	// 			'default_value' => 0,
	// 		),



	// 		// Post sponsor
	// 		array (
	// 			'key' => 'field_531c5wer',
	// 			'label' => 'Is this a sponsored post?',
	// 			'name' => 'sponsored_post_q',
	// 			'type' => 'radio',
	// 			'choices' => array(
	// 				'no'	=> 'No',
	// 				'yes'	=> 'Yes'
	// 			),
	// 			'other_choice' => 0,
	// 			'default_value' => 'no',
	// 			'layout' => 'horizontal',
	// 		),
	// 		array (
	// 			'key' => 'field_55d4a17b009ce',
	// 			'label' => 'Sponsor Page',
	// 			'name' => 'sponsored_post',
	// 			'type' => 'post_object',
	// 			'instructions' => 'Choose the post sponsor page',
	// 			'post_type' => array (
	// 				"page"
	// 			),
	// 			'return_format' => 'object',
	// 			'layout' => 'horizontal',
	// 			'conditional_logic' => array (
	// 				'status' => 1,
	// 				'rules' => array (
	// 					array (
	// 						'field' => 'field_531c5wer',
	// 						'operator' => '==',
	// 						'value' => 'yes',
	// 					),
	// 				),
	// 				'allorany' => 'all',
	// 			),
	// 		),
	// 	),
	// 	'location' => array (
	// 		array (
	// 			array (
	// 				'param' => 'post_type',
	// 				'operator' => '==',
	// 				'value' => 'post',
	// 				'order_no' => 0,
	// 				'group_no' => 0,
	// 			),
	// 			array (
	// 			'param' => 'post_category',
	// 			'operator' => '!=',
	// 			'value' => '10',
	// 		),
	// 		),
	// 	),
	// 	'options' => array (
	// 		'position' => 'side',
	// 		'layout' => 'default',
	// 		'hide_on_screen' => array (
	// 		),
	// 	),
	// 	'menu_order' => 0,
	// ));



	// // Sponsor Page


	// register_field_group(array (
	// 	'id' => 'acf_sponsor-options',
	// 	'title' => 'Sponsor Page Options',
	// 	'fields' => array (
	// 		array (
	// 			'key' => 'field_73249p24',
	// 			'label' => 'Small Logo',
	// 			'instructions' => 'Upload a square logo. Will be cropped to 60x60 pixels',
	// 			'name' => 'logo_small',
	// 			'type' => 'image',
	// 			'save_format' => 'url', 
	// 			'layout' => 'horizontal',
	// 		),
	// 		array (
	// 			'key' => 'field_73249p24_website',
	// 			'label' => 'Website',
	// 			'name' => 'sponsor_website',
	// 			'type' => 'text',
	// 			'layout' => 'horizontal',
	// 		),
	// 		array (
	// 			'key' => 'field_73249p24_fb',
	// 			'label' => 'Facebook Username',
	// 			'name' => 'sponsor_social_facebook',
	// 			'type' => 'text',
	// 			'layout' => 'horizontal',
	// 		),
	// 		array (
	// 			'key' => 'field_73249p24_tw',
	// 			'label' => 'Twitter Username',
	// 			'name' => 'sponsor_social_twitter',
	// 			'type' => 'text',
	// 			'layout' => 'horizontal',
	// 		),
	// 	),
	// 	'location' => array (
	// 		array (
	// 			array (
	// 				'param' => 'post_type',
	// 				'operator' => '==',
	// 				'value' => 'page',
	// 				'order_no' => 0,
	// 				'group_no' => 0,
	// 			),
	// 			array (
	// 				'param' => 'page_template',
	// 				'operator' => '==',
	// 				'value' => 'page-sponsor.php',
	// 				'order_no' => 1,
	// 				'group_no' => 0,
	// 			),
	// 		),
	// 	),
	// 	'options' => array (
	// 		'position' => 'normal',
	// 		'layout' => 'default',
	// 		'hide_on_screen' => array (
	// 		),
	// 	),
	// 	'menu_order' => 0,
	// ));



	


	// // Poll

	// register_field_group(array (
	// 	'id' => 'acf_register-poll',
	// 	'title' => 'Poll Options',
	// 	'fields' => array (


	// 		// Toggle post
	// 		array (
	// 			'key' => 'post_poll_toggle',
	// 			'label' => 'Add Poll',
	// 			'name' => 'post_poll_toggle',
	// 			'type' => 'true_false',
	// 			'message' => 'Add a Poll',
	// 			'default_value' => 0,
	// 		),



	// 		// Poll Question
	// 		array (
	// 			'key' => 'poll_question',
	// 			'label' => 'Question',
	// 			'name' => 'poll_question',
	// 			'type' => 'text',
	// 			'default_value' => '',

	// 			'conditional_logic' => array (
	// 				'status' => 1,
	// 				'rules' => array (
	// 					array (
	// 						'field' => 'post_poll_toggle',
	// 						'operator' => '==',
	// 						'value' => 1,
	// 					),
	// 				),
	// 				'allorany' => 'all',
	// 			),
	// 		),



	// 		// Poll Anawers
	// 		array (
	// 			'key' => 'field_poll_answers',
	// 			'label' => 'Answers',
	// 			'name' => 'poll_answers1',
	// 			'type' => 'repeater',
	// 			'instructions' => 'Add the answers you want people to be able to give. You can add up to 10 answers.',
	// 			'layout' => 'horizontal',
	// 			'column_width' => '',
	// 			'sub_fields' => array (

	// 				array (
	// 					'key' => 'poll_answer_text',
	// 					'label' => 'Answer',
	// 					'name' => 'poll_answer_text1',
	// 					'type' => 'text',
	// 					'default_value' => '',
	// 					'parent' => 'field_poll_answers'
	// 				),
	// 				// array (
	// 				// 	'key' => 'poll_answer_image',
	// 				// 	'label' => 'Image',
	// 				// 	'name' => 'poll_answer_image11',
	// 				// 	'type' => 'image',
	// 				// 	'save_format' => 'url',
	// 				// 	'preview_size' => 'thumbnail',
	// 				// 	'library' => 'all',
	// 				// 	'parent' => 'field_poll_answers'
	// 				// ),

	// 			),
	// 			'row_min' => 1,
	// 			'row_limit' => 10,
	// 			'layout' => 'row',
	// 			'button_label' => 'Add Answer',

	// 			'conditional_logic' => array (
	// 				'status' => 1,
	// 				'rules' => array (
	// 					array (
	// 						'field' => 'post_poll_toggle',
	// 						'operator' => '==',
	// 						'value' => 1,
	// 					),
	// 				),
	// 				'allorany' => 'all',
	// 			),
	// 		),


			
	// 	),
	// 	'location' => array (
	// 		array (
	// 			array (
	// 				'param' => 'post_type',
	// 				'operator' => '==',
	// 				'value' => 'post',
	// 				'order_no' => 0,
	// 				'group_no' => 0,
	// 			),
	// 			array (
	// 			'param' => 'post_category',
	// 			'operator' => '!=',
	// 			'value' => '10',
	// 		),
	// 		),
	// 	),
	// 	'options' => array (
	// 		'position' => 'normal',
	// 		'layout' => 'default',
	// 		'hide_on_screen' => array (
	// 		),
	// 	),
	// 	'menu_order' => 0,
	// ));









//}





