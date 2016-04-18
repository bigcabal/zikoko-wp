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
	<meta property="fb:use_automatic_ad_placement" content="true">
	<meta property="fb:article_style" content="zikoko">
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

			<h1><?php esc_html( the_title_rss() ); ?> (v6)</h1>
		  	<h2><?php esc_html( the_excerpt_rss() ); ?>  </h2>

			<address><?php the_author(); ?></address>

			<time class="op-published" dateTime="<?php echo esc_attr( get_the_time( 'c' ) ); ?>"><?php echo esc_attr( get_post_time( 'Y-m-d\TH:i:s\Z' ) ); ?></time>
			<time class="op-modified" dateTime="<?php echo esc_attr( get_the_modified_time( 'c' ) ); ?>"><?php echo esc_attr( get_the_modified_date('Y-m-d\TH:i:s\Z') ); ?></time>


			<figure class="op-ad">
		        <iframe src="https://www.adserver.com/ss;adtype=banner320x50" height="50" width="320"></iframe>
		    </figure>

		</header>

		<?php include('article-content-blocks.php'); ?>

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