<header>

	<figure>
		<?php
		$featured_image = get_post_meta(get_the_ID(), 'fifu_image_url', true);
		if ($featured_image) {
			echo cl_image($featured_image, 'instant_articles', true);
		} elseif (first_post_image()) {
			echo first_post_image();
		}
		?>
	</figure>

	<h1><?php esc_html( the_title_rss() ); ?></h1>
  	<h2><?php esc_html( the_excerpt_rss() ); ?> </h2>

	<address><?php the_author(); ?></address>

	<time class="op-published" dateTime="<?php echo esc_attr( get_the_time( 'c' ) ); ?>"><?php echo esc_attr( get_post_time( 'Y-m-d\TH:i:s\Z' ) ); ?></time>
	<time class="op-modified" dateTime="<?php echo esc_attr( get_the_modified_time( 'c' ) ); ?>"><?php echo esc_attr( get_the_modified_date('Y-m-d\TH:i:s\Z') ); ?></time>

</header>