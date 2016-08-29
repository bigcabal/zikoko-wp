console.log("cloudinary-acf");

acf.add_action('load', function( $el ){
	
	// $el will be equivalent to the new element being appended $('tr.row')
	
	
	// find a specific field
	var $fields = $el.find('a.acf-button[data-name="add"]');
	
	
	// do something to $field
	console.log( $fields );
	var parentEl = $fields[0].parentNode;

	$fields[0].outerHTML = '';

	// var site_url = 'http://localhost/zikoko';
	var site_url = 'http://zikoko.com';


	var cloudinary_btn = '<div id="wp-content-media-buttons" class="wp-media-buttons"><button type="button" class="button insert-media add_media" data-editor="content"><span class="wp-media-buttons-icon"></span> Add Media</button><link href="'+site_url+'/wp-content/plugins/cloudinary-image-management-and-manipulation-in-the-cloud-cdn/css/cloudinary.css?cv=1.1.4" media="screen" rel="stylesheet" type="text/css"><span id="cloudinary-library-config" data-base="'+site_url+'/wp-content/plugins/cloudinary-image-management-and-manipulation-in-the-cloud-cdn" data-remote="https://cloudinary.com/console/media_library/cms?timestamp=1472454018&amp;mode=wp_post&amp;plugin_version=1.1.4&amp;signature=aa24dbaaf710901c37757f62b700e0d1be847d77&amp;api_key=122125953429187" data-ajaxurl="'+site_url+'/wp-admin/admin-ajax.php?_wpnonce=e7706fa891" data-remotehelper="https://cloudinary.com/easyXDM.name.html" data-autoshow="false"></span><a href="#" class="cloudinary_add_media" id="content-add_media" title="Add Media from Cloudinary">Cloudinary Upload/Insert</a><span class="cloudinary_message"></span></div>';


	parentEl.insertAdjacentHTML('beforeend', cloudinary_btn)

	// console.log( $fields );

	// var parentEl = $field
	
});