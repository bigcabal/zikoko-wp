(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-43216024-9', 'auto', {'allowLinker': true});
ga('require', 'displayfeatures');

ga('require', 'linker');
ga('linker:autoLink', ['polls.zikoko.com'] );

// AUTHOR/CATEGORY DIMENSIONS
ga('set', 'dimension1', category.name);
ga('set', 'dimension2', author.name);

// OPERA DETECTION DIMENSIONS
if ( operaDetect.isOpera ) {
	console.log(operaDetect);
	ga('set', 'dimension3', operaDetect.results.mode);
	ga('set', 'dimension4', operaDetect.results.platform);
	ga('set', 'dimension5', operaDetect.results.browser);
	ga('set', 'dimension6', operaDetect.results.OS);
}

ga('send', 'pageview');