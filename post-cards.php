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
</footer>
