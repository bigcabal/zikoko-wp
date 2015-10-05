<?php
/**
 * Archive
 *
 * @package ZikokoTheme
**/
get_header();
?>
<div class="main-body-area">
<div class="container">

<header class="page-header mobile-padd">
        <h1 class="entry-title">
			<?php if (is_category()) { ?>
            <?php single_cat_title(); ?>
            
            <?php } elseif(is_tag()) { ?>
            <?php single_tag_title(); ?>
    
            <?php } elseif (is_day()) { ?>
            <?php the_time('F jS, Y'); ?>
    
            <?php } elseif (is_month()) { ?>
            <?php the_time('F, Y'); ?>
    
            <?php } elseif (is_year()) { ?>
            <?php the_time('Y'); ?>
            
            <?php } elseif ( get_post_format() ) { ?>
            <?php echo get_post_format(); ?>
            
            <?php } elseif (is_author()) { ?>
            <?php the_author(); ?>

            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <?php } ?>
        </h1>
</header>

<main class="site-main">

	<?php 
	if ( have_posts() ) : while ( have_posts()) : the_post();
		get_template_part( 'excerpt', '1' );
	endwhile;
	endif;
	?>

</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar">

<?php get_sidebar(); ?>
	
</aside>

</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>