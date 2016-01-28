<?php
/**
 * Template Name: Be Like Zikoko (Share)
 *
 * @package ZikokoTheme
**/
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title>Be Like | Zikoko</title>


<?php 

	$meta_title = "Be Like Me. See Your Story";
	$meta_image = $_GET['img'] . '.png';
	$meta_description = "See Your Story";
	$url = get_bloginfo( 'url' ) . "/be-like";

 ?>

<meta property="og:title" content="<?php echo $meta_title; ?>">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $meta_image; ?>">
<meta property="og:site_name" content="Zikoko!">
<meta property="og:url" content="<?php bloginfo('url'); ?>/be-like-share/?img=<?php echo $meta_image; ?>">
<meta property="og:description" content="<?php echo $meta_description; ?>">
<meta property="fb:app_id" content="593692017438309">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:title" content="<?php echo $meta_title; ?>">
<meta name="twitter:image" content="<?php echo $meta_image; ?>">
<meta name="twitter:site" content="@zikokomag">
<meta name="twitter:creator" content="@zikokomag">

<!-- Stylesheet with version number -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?v=' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

<style>
	.container {
		width: 90%;
		max-width: 600px;
		margin: 50px auto;
	}

	.btn {
		background-color: #8235b6;
		display: block;
		width: 100%;
		text-align: center;
		padding: 10px;
		color: #fff;
		font-size: 15px;
		margin-bottom: 10px;
	}

	.redirect {
		font-size: 13px;
		display: block;
		text-align: center;
	}
</style>

</head>
<body>

<div class="container">
	<img src="<?php echo $meta_image; ?>">
	<a href="<?php echo $url; ?>" class="btn">See Your Story</a>
	<p class="redirect">(Redirecting in <span id="countdown-timer"></span>)</p>
</div>

<script>
var counter = 5;
document.getElementById('countdown-timer').innerHTML = counter;

var interval = setInterval(function() {
    counter--;
    if (counter == 0) {
        clearInterval(interval);
        window.location.href = '<?php echo $url; ?>';
    }
    document.getElementById('countdown-timer').innerHTML = counter;
}, 1000);
</script>

	
</body>
</html>