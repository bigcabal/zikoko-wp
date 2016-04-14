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
		<header>
			<figure>
				<?php 
				if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
					echo get_the_post_thumbnail();
				} elseif( first_post_image( $next_post->ID ) ) { 
					echo '<img src="' . first_post_image( $next_post->ID ) . '" />';
				} ?>
			</figure>

			<h1> v1.2: <?php esc_html( the_title_rss() ); ?> </h1>
	      	<h2> <?php the_excerpt_rss(); ?> </h2>
	      	<address>
	          <?php the_author(); ?>
	        </address>
	    </header>


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