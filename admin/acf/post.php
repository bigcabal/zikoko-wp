<?php
/**
 * Custom Fields for Posts
 *
 * @package ZikokoTheme
**/

/* ******************************************

	Remove Post Settings for Contributors

if ( current_user_can('publish_posts') ) :

endif;

******************************************* */


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
				// 'cards' => 'Cards',
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
			'instructions' => 'Add each block of content below.',
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
					'key' => 'field_5626604bb7afe',
					'label' => 'Block Number',
					'name' => 'display_block_number',
					'type' => 'true_false',
					'instructions' => 'Display the number for this post',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e47c2a85e5',
								'operator' => '==',
								'value' => 'numbered',
							),
						),
						array (
							array (
								'field' => 'field_561e47c2a85e5',
								'operator' => '==',
								'value' => 'countdown',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
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

				//
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
							'instructions' => 'Required even if you also use images',
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
		array (
			'key' => 'field_562f3b6de13cf',
			'label' => 'Content Block (Cards Format)',
			'name' => 'content_block_cards_format',
			'type' => 'repeater',
			'instructions' => 'Add each block of content below.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561e2c60d251f',
						'operator' => '==',
						'value' => 'cards',
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
					'key' => 'field_562f3b6de13d0',
					'label' => 'Block Number',
					'name' => 'display_block_number',
					'type' => 'true_false',
					'instructions' => 'Display the number for this post',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_561e47c2a85e5',
								'operator' => '==',
								'value' => 'numbered',
							),
						),
						array (
							array (
								'field' => 'field_561e47c2a85e5',
								'operator' => '==',
								'value' => 'countdown',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
				),
				array (
					'key' => 'field_562f3b6de13d1',
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
					'key' => 'field_562f3b6de13d2',
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
						'poll' => 'Poll',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'none',
					'layout' => 'horizontal',
				),
				array (
					'key' => 'field_562f3b6de13d3',
					'label' => 'Image Upload',
					'name' => 'image_upload',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_562f3b6de13d2',
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
					'key' => 'field_562f3b6de13d4',
					'label' => 'Image Credit',
					'name' => 'image_credit',
					'type' => 'text',
					'instructions' => 'Who does this image belong to?',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_562f3b6de13d2',
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
					'key' => 'field_562f3b6de13d5',
					'label' => 'Via',
					'name' => 'via',
					'type' => 'url',
					'instructions' => 'Where did you get the image? ',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_562f3b6de13d2',
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
					'key' => 'field_562f6be68ec8d',
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
		array (
			'key' => 'field_563745ac3a336',
			'label' => 'In-Post Advert',
			'name' => 'in_post_advert',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561e2c60d251f',
						'operator' => '==',
						'value' => 'cards',
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
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'custom_fields',
		2 => 'comments',
	),
	'active' => 1,
	'description' => '',
));





acf_add_local_field_group(array (
	'key' => 'group_561f678b9ae6a',
	'title' => 'Post Settings',
	'fields' => array (
		array (
			'key' => 'field_561f67a340b12',
			'label' => 'Featured Post',
			'name' => 'featured_post_add',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		),
		array (
			'key' => 'field_5693c1bb47645',
			'label' => 'Show Post Author',
			'name' => 'show_post_author',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
		),
		array (
			'key' => 'field_5693c1bb476499',
			'label' => 'Facebook Instant Articles',
			'name' => 'instant_article_choice',
			'type' => 'radio',
			'instructions' => 'Should this article be displayed in Facebook as an Instant Article?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'no' => 'No',
				'yes' => 'Yes',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'yes',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_561f680f40b13',
			'label' => 'Sponsored Post',
			'name' => 'sponsored_post_q',
			'type' => 'radio',
			'instructions' => 'Is this a sponsored post?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'no' => 'No',
				'yes' => 'Yes',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'no',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_561f685940b14',
			'label' => 'Choose Sponsor Page',
			'name' => 'sponsored_post',
			'type' => 'post_object',
			'instructions' => 'Choose the post sponsor\'s Official Sponsor Page',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561f680f40b13',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'page',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
		array (
			'key' => 'field_567812bad3dfd',
			'label' => 'Sponsor CTA Link',
			'name' => 'sponsor_cta_link',
			'type' => 'url',
			'instructions' => 'Add a link for the Call-To-Action button at the bottom of the post. Leave blank to not include a CTA button.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561f680f40b13',
						'operator' => '==',
						'value' => 'yes',
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
		),
		array (
			'key' => 'field_567812d5d3dfe',
			'label' => 'Sponsor CTA Text',
			'name' => 'sponsor_cta_text',
			'type' => 'select',
			'instructions' => 'What should the CTA button say?',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_561f680f40b13',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Learn More' => 'Learn More',
				'Download Now' => 'Download Now',
				'Sign Up' => 'Sign Up',
				'Contact Us' => 'Contact Us',
				'Book Now' => 'Book Now',
				'Use App' => 'Use App',
				'Shop Now' => 'Shop Now',
				'Watch Video' => 'Watch Video',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
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
	'menu_order' => 2,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'comments',
	),
	'active' => 1,
	'description' => '',
));





endif;


// array (
// 	'key' => 'field_5626062012586',
// 	'label' => 'Old Post',
// 	'name' => 'legacy_post',
// 	'type' => 'true_false',
// 	'instructions' => '',
// 	'required' => 0,
// 	'conditional_logic' => 0,
// 	'wrapper' => array (
// 		'width' => '',
// 		'class' => '',
// 		'id' => '',
// 	),
// 	'message' => 'Check this box if this is an old post and the content is still in the old content editor',
// 	'default_value' => 0,
// ),



?>