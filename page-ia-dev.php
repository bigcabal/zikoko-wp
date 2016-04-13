<?php
/**
 * Template Name: Facebook Instant Articles (Development Feed)
 *
 * @package ZikokoTheme
**/

$posts = "";

global $post;
$instant_articles = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 5
	)
);
?>
<?php while ( $instant_articles->have_posts() ) : $instant_articles->the_post(); 


$post_content = esc_html( get_the_content() );
$post_content = "<![CDATA[" . $post_content . "]]>";

$post = "<item>
			<title>" . get_the_title() . "</title>
			<link>" . get_the_permalink() . "</link>

			<content:encoded>
				" . $post_content . "
			</content:encoded>
		</item>";

$posts = $posts . $post;

endwhile; 
wp_reset_postdata();
?>



<pre style="word-wrap: break-word; white-space: pre-wrap;">
<?php 
$instant_article_feed = '
<xml version="1.0" encoding="UTF-8">
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
<channel>
	<title>Zikoko! - Instant Articles</title>
	<link>http://zikoko.com</link>
	<description>Enjoy &#38; Share!</description>
	' . $posts. '

</channel>
</rss>';

$instant_article_feed = esc_html( $instant_article_feed );

echo $instant_article_feed;
?>
</pre>











