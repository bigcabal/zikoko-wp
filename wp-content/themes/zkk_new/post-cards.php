<?php 
/**
 * Single Post - Cards Layout
 *
 * @package ZikokoTheme
**/
get_header('cards');

$author = get_the_author(); 
?>


<main class="main-body-area--cards">
	

	<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>


	<div class="entry-full-content">

		<?php the_content(); ?>

	</div>


		
	</article>



</main>

<section class="cards-share-window">

	<div class="sh-cards__close cards-hide-share">
	    <i class="fa fa-times"></i>
	  </div>
	
	<h3 class="cards-share-window__heading">Share this Slide</h3>

	<!-- Floating Social Share Buttons -->
	<ul class="social-share-buttons social-share-buttons--cards">
    	<?php get_template_part('inc/social-share-btns', 'cards'); ?>
    </ul>
	
</section>

<footer class="sf-cards">
	<?php 

	$link_pages_args = array(
		'before'           => '',
		'after'            => '',
		'next_or_number'   => 'next',
		'nextpagelink'     => __( '<div class="sf-cards__nav--right"><i class="fa fa-chevron-right"></i></div>' ),
		'previouspagelink' => __( '<div class="sf-cards__nav--left"><i class="fa fa-chevron-left"></i></div>' ),
	);

	wp_link_pages( $link_pages_args ); 

	?>

	<a href="#" class="cards-show-share">Share this on Social Media</a>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.TouchSwipe.min.js"></script>

<?php wp_footer(); ?>



