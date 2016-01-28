<?php
/**
 * Header (PWC)
 *
 * @package ZikokoTheme
**/
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<!-- Favicons and Touch Icons 
-->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon.ico?v=1">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-120x120.png?v=1" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-76x76.png?v=1" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-152x152.png?v=1" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-196x196.png?v=1" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-32x32.png?v=1" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-16x16.png?v=1" sizes="16x16" />

<!-- Stylesheet with version number -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/inc/css/pwc.css?v=' . filemtime( get_stylesheet_directory() . '/inc/css/pwc.css'); ?>" type="text/css" media="screen, projection" />

<?php wp_head(); ?>

<?php get_template_part('inc/scripts'); ?>

</head>
<body <?php body_class(); ?>>


<!-- Facebook -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '593692017438309',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- -->






<header class="pwc-header">
	<div class="container">

		<div class="branding">
			<a href="<?php echo home_url( '/' ); ?>" class="branding-zikoko">
			<img src="http://zikoko.com/wp-content/uploads/2015/07/logo-300x92.png" alt="Zikoko Logo">
			</a>

      <div class="branding-pwc">
      <span>Powered by</span><img src="<?php echo get_template_directory_uri(); ?>/inc/img/pwc.png" alt="Pay With Capture Logo">
      </div>
		</div>
	</div>
</header>


<nav class="pwc-nav" role="navigation">
  <div class="container cf">
    <ul>
      <li><a href="#latest">Latest</a></li>
      <li><a href="#featured">Featured</a></li>
      <li><a href="#quizzes">Quizzes</a></li>
      <li><a href="#more">More</a></li>
    </ul>
    </div>
</nav>




	


