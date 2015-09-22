<?php 
/**
 * Conversion Prompt
 * Refer to Theme Options, Header tab
 *
 * @package SimpleMag
 * @since 	SimpleMag 2.0
**/

global $ti_option;

$profiles = $ti_option['social_profile_url'];


foreach ( $profiles as $key => $value ) {
	if ( !empty ( $value ) ) { 

		if ( $key == 'facebook' ) {
			$facebookUrl = $value;
		}
	}
}
?>


<div class="conversion-prompt-container">
    <div class="conversion-prompt">
        <a href="/" class="conversion-prompt-cancel">X</a>
        <div class="conversion-prompt-left">
            <h1>Wait, you want to go without liking us?</h1>
        </div><div class="conversion-prompt-right">
            <div class="fb-like" data-href="<?php echo $facebookUrl; ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>

        <div class="triangle"></div>
    </div>
</div>
