<?php
/**
 * Template Name: Facebook Instant Articles
 *
 *
 */

header( 'Content-Type: ' . feed_content_type( 'rss-http' ) . '; charset=' . get_option( 'blog_charset' ), true );
echo '<?xml version="1.0" encoding="' . esc_attr( get_option( 'blog_charset' ) ) . '"?>'; ?>

<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	<?php do_action( 'rss2_ns' ); ?>
>

<channel>
	<title><?php echo esc_html( "Staging!" ); ?></title>
	<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
	<link><?php echo esc_url( apply_filters( 'simple_fb_home_url', home_url() ) ) ?></link>
	<description><?php echo bloginfo( 'description' ); ?></description>
	<lastBuildDate><?php echo esc_html( mysql2date( 'D, d M Y H:i:s +0000', get_lastpostmodified( 'GMT' ), false ) ); ?></lastBuildDate>
	<language><?php echo bloginfo( 'language' ); ?></language>

	<?php do_action( 'rss2_head' ); ?>



	<?php 
	global $post;
	$instant_articles = new WP_Query(
		array(
			'post_type'      => 'post',
			'posts_per_page' => 20,
		)
	);
	while ( $instant_articles->have_posts() ) : $instant_articles->the_post();
		if ( get_field('instant_article_choice') != 'no' && !has_category( 'Quizzes') ) : ?>
			<item>
				<title><?php esc_html( the_title_rss() ); ?></title>
				<link><?php the_permalink_rss(); ?></link>
				<pubDate><?php echo esc_html( mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ) ); ?></pubDate>
				<author><?php the_author(); ?></author>
				<guid isPermaLink="false"><?php esc_html( the_guid() ); ?></guid>
				<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description>
				<content:encoded><![CDATA[<?php include( 'inc/instant-articles/article.php' ); ?>]]></content:encoded>
			</item>
	<?php endif; endwhile; ?>
</channel>
</rss>