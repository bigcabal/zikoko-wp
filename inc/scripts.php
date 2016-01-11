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

<!-- Sidebar Advert -->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_rectangle_1', [[300, 600], [300, 250]], 'div-gpt-ad-1436517701090-0').addService(googletag.pubads());
    <?php
      $url = parse_url(get_permalink($post_id));
      $targeturl = substr($url['path'],0,40);
    ?>
    googletag.pubads().setTargeting("url","<?php  echo  $targeturl ?>");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<!-- Leaderboard Advert -->
<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/24669334/zkk_leaderboard_1', [728, 90], 'div-gpt-ad-1436520880435-0').addService(googletag.pubads());
    <?php
      $url = parse_url(get_permalink($post_id));
      $targeturl = substr($url['path'],0,40);
    ?>
    googletag.pubads().setTargeting("url","<?php  echo  $targeturl ?>");
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>


<!-- Mobile Top -->
<script type='text/javascript'>
  // googletag.cmd.push(function() {
  //   googletag.defineSlot('/24669334/zkk_mobile_top', [300, 250], 'div-gpt-ad-1449527877015-0').addService(googletag.pubads());
  //   googletag.pubads().enableSingleRequest();
  //   googletag.enableServices();
  // });
</script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '948066918602902');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=948066918602902&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->





