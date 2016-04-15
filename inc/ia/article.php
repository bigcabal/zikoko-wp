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
		<?php do_action( 'simple_fb_before_the_cover' ); ?>
		<header>

			<figure>
				<?php 
				if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
					echo get_the_post_thumbnail();
				} elseif( first_post_image( $next_post->ID ) ) { 
					echo '<img src="' . first_post_image( $next_post->ID ) . '" />';
				} ?>
			</figure>

			<h1><?php esc_html( the_title_rss() ); ?> (v5)</h1>
		  	<h2><?php the_excerpt_rss(); ?> </h2>

			<address><?php the_author(); ?></address>

			<time class="op-published" dateTime="<?php echo esc_attr( get_the_time( 'c' ) ); ?>"><?php echo esc_attr( get_post_time( 'Y-m-d\TH:i:s\Z' ) ); ?></time>
			<time class="op-modified" dateTime="<?php echo esc_attr( get_the_modified_time( 'c' ) ); ?>"><?php echo esc_attr( get_the_modified_date('Y-m-d\TH:i:s\Z') ); ?></time>


			<figure class="op-ad">
		        <iframe src="https://www.adserver.com/ss;adtype=banner320x50" height="50" width="320"></iframe>
		    </figure>

		</header>
		<?php do_action( 'simple_fb_after_the_cover' ); ?>
		<?php do_action( 'simple_fb_before_the_content' ); ?>
		<?php 

			$content = get_the_content();
			$content = str_replace("h2","h1",$content);
			$content = str_replace("h3","h2",$content);
			$content = str_replace("h4","h2",$content);
			$content = str_replace("<p></p>","",$content);
			$content = str_replace("<span></span>","",$content);
			$content = str_replace('<div class="pcblock__media"></div>',"",$content);

			$content = str_replace('<button class="ig-embed-user--follow">+ Follow</button>',"",$content);

			$content = str_replace('<img class="ig-logo" src="http://zikoko.com/wp-content/uploads/2016/02/instagram-logo.png" alt="Instagram Logo">',"",$content);


	

			$content = preg_replace('#<img class="ig-embed-user--image"(.*?)>#', ' ', $content);


			$content = preg_replace('#<span class="ig-embed-user--handle">(.*?)</span>#', ' ', $content);


			//$poll_replacement = "(View poll on our site)";

			//$content = preg_replace('#[zkk_poll post=(.*?) ]#', ' ', $content);


			echo $content;
		?>

		<footer>
	        <small>Copyright &copy; Big Cabal Media</small>
     	</footer>
	</article>
</body>
</html>