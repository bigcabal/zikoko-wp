<?php
/**
 * Header
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
<meta name="description" content="<?php bloginfo( 'description' ); ?>">


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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?v=' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

<?php wp_head(); ?>

<script type='text/javascript'>
  var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
  var gads = document.createElement('script');
  gads.async = true;
  gads.type = 'text/javascript';
  var useSSL = 'https:' == document.location.protocol;
  gads.src = (useSSL ? 'https:' : 'http:') +
    '//www.googletagservices.com/tag/js/gpt.js';
  var node = document.getElementsByTagName('script')[0];
  node.parentNode.insertBefore(gads, node);
})();
</script>

<!-- Sidebar Advert -->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_rectangle_1', [[300, 600], [300, 250]], 'div-gpt-ad-1436517701090-0').addService(googletag.pubads());
    <?php
      $url = parse_url(get_permalink($post_id));
      $targeturl = substr($url['path'],0,40);
    ?>
    googletag.pubads().setTargeting("url","<?php  echo  $targeturl ?>");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<!-- Leaderboard Advert -->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_leaderboard_1', [728, 90], 'div-gpt-ad-1436520880435-0').addService(googletag.pubads());
    <?php
      $url = parse_url(get_permalink($post_id));
      $targeturl = substr($url['path'],0,40);
    ?>
    googletag.pubads().setTargeting("url","<?php  echo  $targeturl ?>");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
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


<header class="site-header">
	<div class="container">

		<div class="branding">
			<a href="<?php echo home_url( '/' ); ?>">
			<img src="http://zikoko.com/wp-content/uploads/2015/07/logo-300x92.png" alt="">
			</a>

      <a href="/" class="nav-toggle--open show-on-mobile-nav mobile-padd"> <i class="fa fa-bars" aria-label="Open Navigation"></i> </a>
		</div>


		<div class="advert-leaderboard">
    <?php if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
        get_template_part('inc/ad', 'leaderboard'); 
      } ?>
		</div>


	</div>

	<div class="site-nav-container site-nav-container--hidden">
		<div class="container">


      <div class="show-on-mobile-nav">
        
        <a href="/" class="nav-toggle--close"> <i class="fa fa-times" aria-label="Close Navigation"></i> </a>

        <?php get_search_form(); ?>

      </div>

      <nav class="primary-menu-container" role="navigation" aria-label="Primary">
        <?php 
          wp_nav_menu( array(
          'theme_location' => 'primary_menu',
          'container' => false,
          'menu_id' => 'primary-nav',
          'depth' => 1,
          'fallback_cb' => false
         ));
        ?>
      </nav><!--

      --><nav class="secondary-menu-container" role="navigation" aria-label="Secondary">
        <?php 
          wp_nav_menu( array(
          'theme_location' => 'secondary_menu',
          'container' => false,
          'menu_id' => 'secondary-nav',
          'depth' => 2,
          'fallback_cb' => false
         ));
        ?>
      </nav>




		</div>
	</div>

</header>



	


