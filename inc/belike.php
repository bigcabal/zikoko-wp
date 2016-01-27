<?php 


	$rawPermalink = get_the_permalink();
	$cleanPermalink = urlencode($rawPermalink);


	$fb_text = "";
	$twitter_text = "";


?>

<!-- -->
<img id="figure-male" src="<?php echo get_template_directory_uri(); ?>/inc/img/belike-male.jpg" alt="" class="hide-source">
<img id="figure-female" src="<?php echo get_template_directory_uri(); ?>/inc/img/belike-female.jpg" alt="" class="hide-source">


<img id="logo" src="<?php echo get_template_directory_uri(); ?>/inc/img/zikoko-logo-small.png" alt="" class="hide-source">

<section class="belike-container">

	<form class="belike-form">

		<div class="input-group">
			<label for="name">Your Name</label>
			<input type="text" name="name" id="name" placeholder="e.g. Femi"  required>
		</div>

		<div class="input-group">
			<label for="gender">Your Gender</label>
			<select name="gender" id="gender">
				<option value="male" selected="selected">Male</option>
				<option value="female">Female</option>
			</select>
		</div>

		<div class="input-group">
			<label for="country">Your Country</label>
			<select name="country" id="country">
				<option value="other" selected="selected">Other</option>
				<option value="nigeria">Nigeria</option>
				<option value="ghana">Ghana</option>
				<option value="kenya">Kenya</option>
			</select>
		</div>

		<div class="input-group-submit">
		<input type="submit" id="generateMeme" value="See Your Story">
		</div>

	</form>

	

	<div class="belike-result">

		<img src="" alt="Be Like Zikoko" id="beLikeZikokoImg">
		<canvas id="beLikeZikoko" height="350" width="600"></canvas>


		<ul class="share-image-btns cf">
			<li class="download">
				<a href="" download="BeLikeZikoko.png">
					Download Image
				</a>
			</li>
			<li class="facebook">
				<a href="" target="_blank">
					Share on Facebook
				</a>
			</li>
			<li class="twitter">
				<a href="" target="_blank">
					Share on Twitter
				</a>
			</li>
			<li class="repeat">
				<a href="">
					Retry
				</a>
			</li>

		</ul>

		</div>


</section>