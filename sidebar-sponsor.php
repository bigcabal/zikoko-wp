<?php
/**
 * Sidebar for Sponsor Pages
 *
 * @package ZikokoTheme
**/
?>

<div class="site-box padd-all">
	<h3>Follow <?php the_title(); ?></h3><br>

	<?php if ( get_field( 'sponsor_website' ) != "" ) { ?>
    <a href="<?php the_field( 'sponsor_website' ); ?>" class="website-link" target="_blank"> <i class="fa fa-globe"></i> Official Website</a><br>
    <?php } ?>


    <?php if ( get_field( 'twitter_username' ) != "" ) { ?>
    <a href="https://twitter.com/<?php the_field( 'twitter_username' ); ?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php the_field( 'twitter_username' ); ?> on Twitter</a> <br>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <?php } ?>


</div>


<?php if ( get_field( 'sponsor_social_facebook' ) != "" ) { ?>
<div>
    <div class="fb-page" data-href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>"><a href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>"><?php the_field( 'sponsor_social_facebook' ); ?></a></blockquote></div></div>
</div>
<?php } ?>


