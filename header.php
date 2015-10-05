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

<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="description" content="<?php bloginfo( 'description' ); ?>">

<link rel="icon" href="">

<?php wp_head(); ?>

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
		</div>


		<div class="advert-leaderboard">

		<div id="div-gpt-ad-1436520880435-0"></div>
			
		</div>

	</div>

	<nav class="site-primary-nav">

		<div class="container">
			Links
		</div>
	
	</nav>

</header>



	


