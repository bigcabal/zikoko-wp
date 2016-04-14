<?php
/**
 * Article template for Facebook Instant Articles.
 */
?>
<!doctype html>
<html lang="en" prefix="op: http://media.facebook.com/op#">
<head>
	<meta charset="utf-8">
	<meta property="op:markup_version" content="v1.2">

    <link rel="canonical" href="<?php the_permalink(); ?>">
    
    <meta property="fb:article_style" content="zikoko">
    <meta property="fb:use_automatic_ad_placement" content="true">
</head>
<body>
	<article>
		
	    <?php include( 'article-header.php' ); ?>

		<?php 
			$content = get_the_content();
			$content = str_replace("h3","h2",$content);
			echo $content;
		?>

		<footer>
			Article footer
			<small>Copyright &copy; Big Cabal Media</small>
		</footer>
	</article>
</body>
</html>