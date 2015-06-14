<?php
/**
 * Custom Fields
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/


/* Register Fields */
if(function_exists("register_field_group")){
	register_field_group(array (
		'id' => 'acf_category-options',
		'title' => 'Category Options',
		'fields' => array (
			array (
				'layout' => 'horizontal',
				'choices' => array (
					'latest_posts_on' => 'Enable',
					'latest_posts_off' => 'Disable',
				),
				'default_value' => 'latest_posts_on',
				'key' => 'field_516807bdd9f14',
				'label' => 'Latest Posts in drop down menu',
				'name' => 'menu_latest_posts',
				'type' => 'radio',
				'instructions' => 'Enable or Disable latest posts in the drop down menu of this category',
			),
			array (
				'layout' => 'horizontal',
				'choices' => array (
					'cat_slider_on' => 'Enable',
					'cat_slider_off' => 'Disable',
				),
				'default_value' => 'cat_slider_on',
				'key' => 'field_66',
				'label' => 'Category Slider',
				'name' => 'category_slider',
				'type' => 'radio',
				'instructions' => 'Enable or Disable this category slider',
			),
			array (
				'layout' => 'horizontal',
				'choices' => array (
					'cat_sidebar_on' => 'Enable',
					'cat_sidebar_off' => 'Disable',
				),
				'default_value' => 'cat_sidebar_on',
				'key' => 'field_51c6f934bf408',
				'label' => 'Category Sidebar',
				'name' => 'category_sidebar',
				'type' => 'radio',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_format-audio',
		'title' => 'Format Audio',
		'fields' => array (
			array (
				'default_value' => '',
				'formatting' => 'none',
				'key' => 'field_51b01e1ec60a8',
				'label' => 'Add SoundCloud Audio',
				'name' => 'add_audio_url',
				'type' => 'text',
				'instructions' => 'Paste page URL from SoundCloud',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'audio',
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
	register_field_group(array (
		'id' => 'acf_format-gallery',
		'title' => 'Format Gallery',
		'fields' => array (
			array (
				'key' => 'field_51b01e988b9a1',
				'label' => 'Upload gallery image',
				'name' => 'post_upload_gallery',
				'type' => 'gallery',
				'preview_size' => 'thumbnail',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'gallery',
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
	register_field_group(array (
		'id' => 'acf_format-video',
		'title' => 'Format Video',
		'fields' => array (
			array (
				'default_value' => '',
				'formatting' => 'html',
				'key' => 'field_55',
				'label' => 'Add Video',
				'name' => 'add_video_url',
				'type' => 'text',
				'instructions' => 'Paste video page URL',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
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
	register_field_group(array (
		'id' => 'acf_page-composer',
		'title' => 'Page Composer',
		'fields' => array (
			array (
				'key' => 'field_36',
				'label' => 'Page Composer',
				'name' => 'page_composer',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Posts Slider',
						'name' => 'hp_posts_slider',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									1 => 1,
									2 => 2,
									3 => 3,
									4 => 4,
									5 => 5,
									6 => 6,
									7 => 7,
									8 => 8,
									9 => 9,
									10 => 10,
								),
								'default_value' => 3,
								'key' => 'field_37',
								'label' => 'Posts to show',
								'name' => 'slides_to_show',
								'type' => 'select',
								'instructions' => 'Select the maximum number of posts you want to show in the slider',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Featured Posts',
						'name' => 'hp_featured_posts',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_39',
								'label' => 'Main Title',
								'name' => 'featured_main_title',
								'type' => 'text',
								'instructions' => 'Enter the main title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => 'Enter the sub title for this section',
								'formatting' => 'html',
								'key' => 'field_40',
								'label' => 'Sub Title',
								'name' => 'featured_sub_title',
								'type' => 'text',
								'instructions' => 'Enter the sub title for this section',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'enable' => 'Enable',
									'disable' => 'Disable',
								),
								'default_value' => 'enable',
								'key' => 'field_51a1ca6e05fe8',
								'label' => 'Posts Excerpt',
								'name' => 'featured_excerpt',
								'type' => 'radio',
								'instructions' => 'Choose to enable or disable the excerpt',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Latest By Category',
						'name' => 'latest_by_category',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_41',
								'label' => 'Main Title',
								'name' => 'category_main_title',
								'type' => 'text',
								'instructions' => 'Enter the main title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_42',
								'label' => 'Sub Title',
								'name' => 'category_sub_title',
								'type' => 'text',
								'instructions' => 'Enter the sub title for this section',
								'column_width' => '',
							),
							array (
								'taxonomy' => 'category',
								'field_type' => 'select',
								'allow_null' => 0,
								'load_save_terms' => 0,
								'multiple' => 0,
								'return_format' => 'id',
								'key' => 'field_43',
								'label' => 'Category',
								'name' => 'category_section_name',
								'type' => 'taxonomy',
								'instructions' => 'Select the category for this section',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'enable' => 'Enable',
									'disable' => 'Disable',
								),
								'default_value' => 'enable',
								'key' => 'field_51a1cddf5ec24',
								'label' => 'Posts Excerpt',
								'name' => 'category_excerpt',
								'type' => 'radio',
								'instructions' => 'Choose to enable or disable the excerpt',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Latest By Format',
						'name' => 'latest_by_format',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_44',
								'label' => 'Main Title',
								'name' => 'format_main_title',
								'type' => 'text',
								'instructions' => 'Enter the main title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => '',
								'formatting' => 'html',
								'key' => 'field_45',
								'label' => 'Sub Title',
								'name' => 'format_sub_title',
								'type' => 'text',
								'instructions' => 'Enter the sub title for this section',
								'column_width' => '',
							),
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									'standard' => 'Standard',
									'video' => 'Video',
									'audio' => 'Audio',
									'gallery' => 'Gallery',
								),
								'default_value' => 'standard',
								'key' => 'field_49',
								'label' => 'Format',
								'name' => 'format_section_name',
								'type' => 'select',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'enable' => 'Enable',
									'disable' => 'Disable',
								),
								'default_value' => 'enable',
								'key' => 'field_51a1ce185ec25',
								'label' => 'Posts Excerpt',
								'name' => 'format_excerpt',
								'type' => 'radio',
								'instructions' => 'Choose to enable or disable the excerpt',
								'column_width' => '',
							),
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									3 => 3,
									6 => 6,
									9 => 9,
									12 => 12,
									15 => 15,
									18 => 18,
									21 => 21,
									24 => 24,
									27 => 27,
									30 => 30,
								),
								'default_value' => '3 : 3',
								'key' => 'field_51aa0082eceb9',
								'label' => 'Posts Per Page',
								'name' => 'format_posts_per_page',
								'type' => 'select',
								'instructions' => 'How many posts you want to show at once',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'pagination_on' => 'Enable',
									'pagination_off' => 'Disable',
								),
								'default_value' => 'pagination_off',
								'key' => 'field_51aa046aecebd',
								'label' => 'Pagination',
								'name' => 'format_pagination',
								'type' => 'radio',
								'instructions' => 'Enable or Disable the pagination',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Latest Reviews',
						'name' => 'latest_reviews',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_5195e20601871',
								'label' => 'Main Title',
								'name' => 'reviews_main_title',
								'type' => 'text',
								'instructions' => 'Enter the main title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => '',
								'formatting' => 'html',
								'key' => 'field_5195e20601872',
								'label' => 'Sub Title',
								'name' => 'reviews_sub_title',
								'type' => 'text',
								'instructions' => 'Enter the sub title for this section',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'enable' => 'Enable',
									'disable' => 'Disable',
								),
								'default_value' => 'enable',
								'key' => 'field_51a1ce455ec26',
								'label' => 'Posts Excerpt',
								'name' => 'reviews_excerpt',
								'type' => 'radio',
								'instructions' => 'Choose to enable or disable the excerpt',
								'column_width' => '',
							),
							array (
								'multiple' => 0,
								'allow_null' => 0,
								'choices' => array (
									3 => 3,
									6 => 6,
									9 => 9,
									12 => 12,
									15 => 15,
									18 => 18,
									21 => 21,
									24 => 24,
									27 => 27,
									30 => 30,
								),
								'default_value' => '3 : 3',
								'key' => 'field_51aa0133eceba',
								'label' => 'Posts Per Page',
								'name' => 'reviews_posts_per_page',
								'type' => 'select',
								'instructions' => 'How many posts you want to show at once',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'pagination_on' => 'Enable',
									'pagination_off' => 'Disable',
								),
								'default_value' => 'pagination_off',
								'key' => 'field_51aa049decebe',
								'label' => 'Pagination',
								'name' => 'reviews_pagination',
								'type' => 'radio',
								'instructions' => 'Enable or Disable the pagination',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Latest Posts',
						'name' => 'latest_posts',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_46',
								'label' => 'Main Title',
								'name' => 'latest_main_title',
								'type' => 'text',
								'instructions' => 'Enter the main title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_47',
								'label' => 'Sub Title',
								'name' => 'latest_sub_title',
								'type' => 'text',
								'instructions' => 'Enter the sub title for this section',
								'column_width' => '',
							),
							array (
								'default_value' => 3,
								'min' => 2,
								'max' => '',
								'step' => 1,
								'key' => 'field_48',
								'label' => 'Posts Per Page',
								'name' => 'latest_posts_per_page',
								'type' => 'number',
								'instructions' => 'How many posts you want to show per page, if you enable the pagination',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'pagination_on' => 'Enable',
									'pagination_off' => 'Disable',
								),
								'default_value' => 'pagination_on',
								'key' => 'field_51a9c7286dd23',
								'label' => 'Pagination',
								'name' => 'latest_pagination',
								'type' => 'radio',
								'instructions' => 'Enable or Disable the pagination',
								'column_width' => '',
							),
							array (
								'layout' => 'horizontal',
								'choices' => array (
									'sidebar_on' => 'Enable',
									'sidebar_off' => 'Disable',
								),
								'default_value' => 'sidebar_on',
								'key' => 'field_70',
								'label' => 'Sidebar',
								'name' => 'latest_posts_sidebar',
								'type' => 'radio',
								'instructions' => 'Do you need a sidebar in this section',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Image Banner',
						'name' => 'image_advertising',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'none',
								'key' => 'field_51c6fa31eabcc',
								'label' => 'Banner Image URL',
								'name' => 'ad_banner_url',
								'type' => 'text',
								'instructions' => 'Enter the banner URL',
								'column_width' => '',
							),
							array (
								'default_value' => '#',
								'formatting' => 'none',
								'key' => 'field_51c84c720068d',
								'label' => 'Banner Link',
								'name' => 'ad_banner_link',
								'type' => 'text',
								'instructions' => 'Enter the banner link',
								'column_width' => '',
							),
						),
					),
					array (
						'label' => 'Code Banner',
						'name' => 'code_advertising',
						'display' => 'row',
						'sub_fields' => array (
							array (
								'default_value' => '',
								'formatting' => 'html',
								'key' => 'field_51c96d4afb2d6',
								'label' => 'Code or AdSense',
								'name' => 'ad_banner_code',
								'type' => 'textarea',
								'instructions' => 'Paste here banner JS code or Google AdSense code',
								'column_width' => '',
							),
						),
					),
				),
				'button_label' => 'Add Section',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-composer.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page-options',
		'title' => 'Page Options',
		'fields' => array (
			array (
				'layout' => 'horizontal',
				'choices' => array (
					'page_sidebar_on' => 'Enable',
					'page_sidebar_off' => 'Disable',
				),
				'default_value' => 'page_sidebar_on',
				'key' => 'field_71',
				'label' => 'Page Sidebar',
				'name' => 'page_sidebar',
				'type' => 'radio',
				'instructions' => 'Enable or Disable sidebar on this page. Disable to use this page full width.',
				'multiple' => 0,
				'allow_null' => 0,
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
					'operator' => '!=',
					'value' => 'page-composer.php',
					'order_no' => 1,
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
	register_field_group(array (
		'id' => 'acf_post-options',
		'title' => 'Post Options',
		'fields' => array (
			array (
				'default_value' => 0,
				'message' => 'Add this post to homepage slider',
				'key' => 'field_52',
				'label' => 'Homepage slider',
				'name' => 'homepage_slider_add',
				'type' => 'true_false',
			),
			array (
				'default_value' => 0,
				'message' => 'Add this post to category slider',
				'key' => 'field_53',
				'label' => 'Category Slider',
				'name' => 'category_slider_add',
				'type' => 'true_false',
			),
			array (
				'default_value' => 0,
				'message' => 'Make this post featured',
				'key' => 'field_54',
				'label' => 'Make featured',
				'name' => 'featured_post_add',
				'type' => 'true_false',
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
	register_field_group(array (
		'id' => 'acf_post-score',
		'title' => 'Post Score',
		'fields' => array (
			array (
				'default_value' => 0,
				'message' => 'Turn On the Score feature',
				'key' => 'field_51adce9bc729d',
				'label' => 'Enable Post Score',
				'name' => 'enable_rating',
				'type' => 'true_false',
			),
			array (
				'default_value' => '',
				'formatting' => 'none',
				'key' => 'field_51ade0f48bd2a',
				'label' => 'Rating Note',
				'name' => 'rating_note',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51adce9bc729d',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_51adb7a0b081f',
				'label' => 'Score',
				'name' => 'rating_module',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_51adce9bc729d',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'default_value' => '',
						'formatting' => 'none',
						'key' => 'field_51add3bcc729e',
						'label' => 'Label',
						'name' => 'score_label',
						'type' => 'text',
						'column_width' => 60,
					),
					array (
						'multiple' => 0,
						'allow_null' => 0,
						'choices' => array (
							1 => 1,
							2 => 2,
							3 => 3,
							4 => 4,
							5 => 5,
							6 => 6,
							7 => 7,
							8 => 8,
							9 => 9,
							10 => 10,
						),
						'default_value' => '1 : 1',
						'key' => 'field_51adb7cbb0820',
						'label' => 'Score',
						'name' => 'score_number',
						'type' => 'select',
						'column_width' => 40,
					),
				),
				'row_min' => 1,
				'row_limit' => 10,
				'layout' => 'table',
				'button_label' => 'Add Score Row',
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


/* Add-Ons
 * USING PREMIUN ADD-ONS OUTSIDE THIS THEME IS NOT ALLOWED!!!
 */
function ti_register_fields(){
	include_once('add-ons/acf-gallery/gallery.php');
	include_once('add-ons/acf-repeater/repeater.php');
	include_once('add-ons/acf-flexible-content/flexible-content.php');
}
add_action('acf/register_fields', 'ti_register_fields'); 