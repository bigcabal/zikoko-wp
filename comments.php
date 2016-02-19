<?php
/**
 * Comments
 *
 * @package ZikokoTheme
**/
?>


<div id="comments" class="comments-area">

<?php if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) { ?>

	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>

<?php } else {
	echo "Comments here";
	} ?>

</div><!-- #comments -->