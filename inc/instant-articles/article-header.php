<header>

	<figure>
		<?php 
		if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
			echo get_the_post_thumbnail();
		} elseif( first_post_image( $next_post->ID ) ) { 
			echo '<img src="' . first_post_image( $next_post->ID ) . '" />';
		} ?>
	</figure>

	<h1><?php esc_html( the_title_rss() ); ?> (v7)</h1>
  	<h2><?php esc_html( the_excerpt_rss() ); ?>  </h2>

	<address><?php the_author(); ?></address>

	<time class="op-published" dateTime="<?php echo esc_attr( get_the_time( 'c' ) ); ?>"><?php echo esc_attr( get_post_time( 'Y-m-d\TH:i:s\Z' ) ); ?></time>
	<time class="op-modified" dateTime="<?php echo esc_attr( get_the_modified_time( 'c' ) ); ?>"><?php echo esc_attr( get_the_modified_date('Y-m-d\TH:i:s\Z') ); ?></time>

</header>