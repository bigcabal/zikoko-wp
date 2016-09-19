<?php
/**
 * Header
 *
 * @package ZikokoTheme
 **/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Favicons and Touch Icons
    -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon.ico?v=1">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-120x120.png?v=1"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
          href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-76x76.png?v=1"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="<?php echo get_template_directory_uri(); ?>/inc/img/apple-touch-icon-152x152.png?v=1"/>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-196x196.png?v=1"
          sizes="196x196"/>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-32x32.png?v=1"
          sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/inc/img/favicon-16x16.png?v=1"
          sizes="16x16"/>

    <!-- Stylesheet -->
    <?php if (site_url() === 'http://localhost/zikoko') : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php else: ?>
        <link rel="stylesheet"
              href="https://res.cloudinary.com/big-cabal/raw/upload/v1474295035/zikoko-static-assets/zikoko-stylesheet-v1.css">
    <?php endif; ?>

    <meta property="fb:pages" content="1587103198245131"/>

    <?php wp_head(); ?>

    <?php get_template_part('inc/scripts'); ?>

</head>
<body <?php body_class(); ?>>


<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '593692017438309',
            xfbml: true,
            version: 'v2.5'
        });
    };
    (function (d, s, id) {
        //var oldSrc = "//connect.facebook.net/en_US/sdk.js"
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk/xfbml.quote.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<header class="site-header">
    <div class="container">
        <div class="branding">
            <a href="<?php echo home_url('/'); ?>">
                <img
                    src="https://res.cloudinary.com/big-cabal/image/upload/w_300,f_auto,fl_lossy,q_auto/v1473414487/logo-300x92_cnlz0c.jpg"
                    alt="Zikoko">
            </a>
            <a href="/" class="nav-toggle--open show-on-mobile-nav mobile-padd" aria-label="Open Navigation">
                <?php include('inc/icons/menu.php'); ?>
            </a>
        </div>

        <div class="advert-leaderboard">
            <?php if (site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com') {
                get_template_part('inc/ad', 'leaderboard');
            } ?>
        </div>
    </div>

    <div class="site-nav-container site-nav-container--hidden">
        <div class="container">

            <div class="show-on-mobile-nav">
                <a href="/" class="nav-toggle--close"> <i class="fa fa-times" aria-label="Close Navigation"></i> </a>
                <?php get_search_form(); ?>
            </div>

            <nav class="primary-menu-container" role="navigation" aria-label="Primary">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container' => false,
                    'menu_id' => 'primary-nav',
                    'depth' => 1,
                    'fallback_cb' => false
                ));
                ?>
            </nav><!--

          --><nav class="secondary-menu-container" role="navigation" aria-label="Secondary">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'secondary_menu',
                    'container' => false,
                    'menu_id' => 'secondary-nav',
                    'depth' => 2,
                    'fallback_cb' => false
                ));
                ?>
            </nav>


        </div>
    </div>

</header>

<?php /*
<div class="mobile-banner-ad">
<?php 
if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
     get_template_part('inc/ad', 'mobiletop'); 
} 
?>
</div> */
?>

	


