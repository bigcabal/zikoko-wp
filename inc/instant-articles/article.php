<?php
/**
 * Article template for Facebook Instant Articles.
 */
?>
<!doctype html>
<html lang="en" prefix="op: http://media.facebook.com/op#">
<head>
	<meta property="op:markup_version" content="v1.0">
	<link rel="canonical" href="<?php the_permalink(); ?>">
	<meta property="fb:use_automatic_ad_placement" content="false">
	<meta property="fb:article_style" content="zikoko">
</head>
<body>
	<article>
		
		<?php include('article-header.php'); ?>

		<?php include('article-content-blocks.php'); ?>

		<?php include('analytics.php'); ?>

		<footer>
			<aside>Zikoko, Enjoy &amp; Share</aside>
			<small>© Big Cabal Media</small>

			<ul class="op-related-articles">
				<?php $next_post = get_previous_post(); ?>
				<li><a href="<?php echo get_permalink( $next_post->ID ); ?>"></a></li>
			</ul>
     	</footer>
	</article>
</body>
</html>