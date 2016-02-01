<?php
/**
 * Template Name: PWC/Access Feed
 *
 * @package ZikokoTheme
**/
get_header('pwc');

$pwc_latest_posts = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 6,
	)
);
$pwc_featured_posts = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'meta_key' => 'featured_post_add',
 		'meta_value' => '1',
	)
);
$pwc_quiz_posts = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'category_name' => 'quizzes'
	)
);
$pwc_more_posts = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'offset' => 6
	)
);

//

?>
<div class="main-body-area">
<div class="container">


<section id="latest" class="pwc-section">
	<header class="pwcs__header mobile-padd">
	<h1>Latest</h1>
	</header>

	<?php
		global $post;
		while ( $pwc_latest_posts->have_posts() ) : 
				$pwc_latest_posts->the_post();

			get_template_part( 'excerpt', '3' );
 
		endwhile; 
		wp_reset_postdata();
	?>
</section>

<div class="pwc-ad">
	Ad Here
</div>


<section id="featured" class="pwc-section">
	<header class="pwcs__header mobile-padd">
	<h1>Featured</h1>
	</header>

	<?php
		global $post;
		while ( $pwc_featured_posts->have_posts() ) : 
				$pwc_featured_posts->the_post();

			get_template_part( 'excerpt', '3' );
 
		endwhile; 
		wp_reset_postdata();
	?>
</section>

<section id="quizzes" class="pwc-section">
	<header class="pwcs__header mobile-padd">
	<h1>Quizzes</h1>
	</header>

	<?php
		global $post;
		while ( $pwc_quiz_posts->have_posts() ) : 
				$pwc_quiz_posts->the_post();

			get_template_part( 'excerpt', '3' );
 
		endwhile; 
		wp_reset_postdata();
	?>
</section>

<section id="more" class="pwc-section">
	<header class="pwcs__header mobile-padd">
	<h1>More</h1>
	</header>

	<?php
		global $post;
		while ( $pwc_more_posts->have_posts() ) : 
				$pwc_more_posts->the_post();

			get_template_part( 'excerpt', '3' );
 
		endwhile; 
		wp_reset_postdata();
	?>
</section>






</div> <!-- end .container -->
</div> <!-- end .main-body-area -->


<footer class="site-footer">
<div class="container">

	<div class="bc-logo">
        <a href="http://www.bigcabal.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/bc-logo-white.png" alt="Big Cabal Logo">
        </a>
    </div>
	
</div>
</footer>


<?php wp_footer(); ?>

<script>
window.onscroll = function() {
	var top = window.scrollY;
	if (top > 99) {
		var pwcNavClass = document.getElementsByClassName('pwc-nav')[0].className;
		if ( !(pwcNavClass.indexOf('floating') > -1) ) {
			document.getElementsByClassName('pwc-nav')[0].className += ' floating';
		}
	} else {
		document.getElementsByClassName('pwc-nav')[0].className = 'pwc-nav';
	}
}
$('.pwc-nav a').on('click', function() {
	var section = $(this).attr('href');
	$('html, body').animate({
        scrollTop: $(section).offset().top - 80
    }, 1000);
    return false;
})

</script>

</body>
</html>