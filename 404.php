<?php
/**
 * 404 error page
 *
 * @package ZikokoTheme
**/
get_header();
?>
<div class="main-body-area">
<div class="container">


<main class="site-main">

	<header class="page-header mobile-padd error-header">
		<h1><img src="http://zikoko.com/wp-content/uploads/2015/12/w44wo.jpg" alt="Your page was not found"></h1>

	    <p>Sorry, the page you're looking for doesn't exist. Why not try one of our popular posts below?</p>
	</header>

    
    <div class="recent-posts">
	<?php

		/* Get Featured Posts */
		global $post;
		$zkk_aside_featured_posts = new WP_Query(
			array(
				'post_type' => 'post',
				'posts_per_page' => 6
			)
		);
		?>
		<?php while ( $zkk_aside_featured_posts->have_posts() ) : $zkk_aside_featured_posts->the_post(); ?>

			<?php get_template_part( 'excerpt', '1' ); ?>

	<?php 
		endwhile; 
		wp_reset_postdata();
	?>

    </div>


</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar">

<div class="site-box">
	<?php get_search_form(); ?>
</div>

<div class="site-box">
	<ul class="social-profile-buttons social-profile-btns--sidebar">
		<?php get_template_part('inc/social-profile', 'btns'); ?>
	</ul>
</div>

<div class="site-box">
	<?php if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
        get_template_part('inc/ad', 'sidebar'); 
      } ?>
</div>

<div class="site-box">
	<?php get_template_part('inc/newsletter-box', 'small'); ?>
</div>
	
</aside>

</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>