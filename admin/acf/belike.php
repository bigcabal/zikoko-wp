<?php
/**
 * Custom Fields for Be Like App
 *
 * @package ZikokoTheme
**/

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
