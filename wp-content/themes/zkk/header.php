<?php
/**
 * The Header for the theme
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.0
**/
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html <?php language_attributes(); ?> class="oldie"><![endif]-->
<!--[if (gte IE 9) | !(IE)]><!--><html <?php language_attributes(); ?> class="modern"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php global $ti_option; ?>
<link rel="shortcut icon" href="<?php echo $ti_option['site_favicon']['url']; ?>" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $ti_option['site_retina_favicon']['url']; ?>" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_rectangle_1', [[300, 600], [300, 250]], 'div-gpt-ad-1436517701090-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_leaderboard_1', [728, 90], 'div-gpt-ad-1436520880435-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>


<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="pageslide" class="st-menu st-effect">
    	<a href="#" id="close-pageslide"><i class="icomoon-remove-sign"></i></a>
         <?php get_search_form(); ?>
    
        <div class="header-social-icons">
        <?php if( $ti_option['top_social_profiles'] == 1 ) {
            get_template_part ( 'inc/social', 'profiles' );
        } ?>
        </div>
    </div><!-- Sidebar in Mobile View -->
    
	<?php
    // Check for a layout options: Full Width or  Boxed
    if ( $ti_option['site_layout'] == '2' ) { $site_layout = ' class="layout-boxed"'; } else { $site_layout = ' class="layout-full"'; } ?>
    <section id="site"<?php echo isset( $site_layout ) ? $site_layout : ''; ?>>
        <div class="site-content">
    
            <header id="masthead" role="banner" class="clearfix<?php if ( $ti_option['site_main_menu'] == true ) { echo ' with-menu'; } ti_top_strip_class(); ?>" itemscope itemtype="http://schema.org/WPHeader">
                <div id="branding" class="animated">
                    <div class="wrapper mobile-padd">
                    <?php
                            get_template_part( 'inc/header', 'default' );
                    ?>
                    </div><!-- .wrapper -->
                </div><!-- #branding -->


                <div class="no-print animated main-menu-container">
                  <div class="wrapper">
                    
                  
                  <nav class="main-menu" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                    <?php 
                      wp_nav_menu( array(
                      'theme_location' => 'main_menu',
                      'container' => false,
                      'menu_id' => 'main-nav',
                      'depth' => 3,
                      'fallback_cb' => false,
                      'walker' => new TI_Menu()
                     ));
                    ?>
                  </nav>

                  <nav class="secondary-menu" role="navigation">
                    <?php 
                      wp_nav_menu( array(
                      'theme_location' => 'secondary_menu',
                      'container' => false,
                      'menu_id' => 'secondary-nav',
                      'depth' => 2,
                      'fallback_cb' => false,
                      'walker' => new TI_Menu()
                     ));
                    ?>
                    
                  </nav>
                  </div>
                </div>
                

            
            </header><!-- #masthead -->