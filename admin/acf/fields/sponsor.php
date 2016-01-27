<?php
/**
 * Custom Fields for Sponsor Page
 *
 * @package ZikokoTheme
**/


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_561f6a8916b4a',
	'title' => 'Sponsor Page',
	'fields' => array (
		array (
			'key' => 'field_73249p24',
			'label' => 'Logo (Small)',
			'name' => 'logo_small',
			'type' => 'image',
			'instructions' => 'Upload a square logo. The image will be cropped to 60x60 pixels',
			'required' => 0,
			'conditional_logic' => 0,
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
		array (
			'key' => 'field_73249p24_website',
			'label' => 'Website',
			'name' => 'sponsor_website',
			'type' => 'url',
			'instructions' => 'Official website for the Sponsor',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'http://',
		),
		array (
			'key' => 'field_73249p24_fb',
			'label' => 'Facebook Username',
			'name' => 'sponsor_social_facebook',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_73249p24_tw',
			'label' => 'Twitter Username',
			'name' => 'twitter_username',
			'type' => 'text',
			'instructions' => 'Do not include the @',
			'required' => 0,
			'conditional_logic' => 0,
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
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-sponsor.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;






if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56a8aa71dd4e0',
	'title' => 'Be Like',
	'fields' => array (
		array (
			'key' => 'field_56a8aa77276a9',
			'label' => 'Be Like',
			'name' => 'be_like',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_56a8aa86276aa',
					'label' => 'Sentence',
					'name' => 'sentence',
					'type' => 'textarea',
					'instructions' => 'For example - 

This is {{name}}. {{name}} has a girlfriend. Be like {{name}}',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_56a8ae992868f',
					'label' => 'Gender',
					'name' => 'gender',
					'type' => 'select',
					'instructions' => 'Which gender should this sentence be applied to?',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'any' => 'Any',
						'male' => 'Male',
						'female' => 'Female',
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
				array (
					'key' => 'field_56a8c29a187b5',
					'label' => 'Country',
					'name' => 'country',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'any' => 'Any',
						'nigeria' => 'Nigeria',
						'ghana' => 'Ghana',
						'kenya' => 'Kenya',
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
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-belike.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;






?>
