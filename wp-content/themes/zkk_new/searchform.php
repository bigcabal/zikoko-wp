<?php
/**
 * Search Form
 *
 * @package ZikokoTheme
**/
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" name="s" id="s" placeholder="Search" aria-label="Search"><!--
    --><button type="submit">
    	<i class="fa fa-search"></i>
    </button>
</form>