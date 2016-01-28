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
	$meta_image = $_GET['img'];
	$meta_description = "Be Like Me. See Your Story";

 ?>

<meta property="og:title" content="<?php echo $meta_title; ?>">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:image" content="<?php echo $meta_image; ?>">
<meta property="og:site_name" content="Be Like (Zikoko)">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:description" content="<?php echo $meta_description; ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:title" content="<?php echo $meta_title; ?>">
<meta name="twitter:image" content="<?php echo $meta_image; ?>">
<meta name="twitter:site" content="@zikokomag">
<meta name="twitter:creator" content="@zikokomag">


<?php $url = get_bloginfo( 'url' ) . "/be-like"; ?>

</head>
<body>
Redirecting...
<script
>
setTimeout(function(){ 
	window.location.href = '<?php echo $url; ?>';

 }, 1000);
</script>

	
</body>
</html>