<?php
/**
 * Custom Fields for Sponsor Page
 *
 * @package ZikokoTheme
**/


if(function_exists("register_field_group"))
{



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


}





