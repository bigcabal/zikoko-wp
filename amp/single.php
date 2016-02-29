<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
	<?php do_action( 'amp_post_template_head', $this ); ?>

	<style amp-custom>
	<?php $this->load_parts( array( 'style' ) ); ?>
	<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>
<body>
<nav class="amp-wp-title-bar">
	<div>
		<a href="<?php echo esc_url( $this->get( 'home_url' ) ); ?>">
			<amp-img src="http://zikoko.com/wp-content/uploads/2015/07/logo-300x92.png" height="30" width="98" class="amp-wp-site-icon" alt="Zikoko Logo"></amp-img>
		</a>
	</div>
</nav>
<div class="amp-wp-content">
	<header class="amp-wp-post-header">
		<h1 class="amp-wp-title"><?php echo esc_html( $this->get( 'post_title' ) ); ?></h1>
		<ul class="amp-wp-meta">
			<?php $this->load_parts( apply_filters( 'amp_post_template_meta_parts', array( 'meta-author' ) ) ); ?>
		</ul>
		<ul class="amp-social-links">
			<?php get_template_part('amp/social', 'share'); ?>
		</ul>
	</header>

	<?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>

	<footer class="amp-wp-post-footer">
		<ul class="amp-social-links">
			<?php get_template_part('amp/social', 'share'); ?>
		</ul>
	</footer>
</div>
<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>