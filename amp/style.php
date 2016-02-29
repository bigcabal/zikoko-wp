/* *********************

	DEFAULTS

**********************/

/* Generic WP styling */
amp-img.alignright { float: right; margin: 0 0 1em 1em; }
amp-img.alignleft { float: left; margin: 0 1em 1em 0; }
amp-img.aligncenter { display: block; margin-left: auto; margin-right: auto; }
.alignright { float: right; }
.alignleft { float: left; }
.aligncenter { display: block; margin-left: auto; margin-right: auto; }

.wp-caption.alignleft { margin-right: 1em; }
.wp-caption.alignright { margin-left: 1em; }

.amp-wp-enforced-sizes {
	/** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
	max-width: 100%;
}

.amp-wp-unknown-size img {
	/** Worst case scenario when we can't figure out dimensions for an image. **/
	/** Force the image into a box of fixed dimensions and use object-fit to scale. **/
	object-fit: contain;
}

/* Template Styles */
.amp-wp-content, .amp-wp-title-bar div {
	max-width: 700px;
	margin: 0 auto;
}

body {
	font-family: "Lato", sans-serif;
	font-size: 16px;
	line-height: 1.8;
	background-color: #f0f0f0;
	color: rgb(90, 90, 90);
	padding-bottom: 100px;
}



/* PAGE HEADER */

.amp-wp-title-bar {

}



/* Titlebar */
nav.amp-wp-title-bar {
	padding: 15px;
	background: #fff;
	border-bottom: 3px solid #8235b6;
}

nav.amp-wp-title-bar div {
	line-height: 54px;
	color: #fff;
}
nav.amp-wp-title-bar .amp-wp-site-icon {
	/** site icon is 32px **/
	float: left;
	margin: 11px 8px 0 0;
	border-radius: 50%;
}
nav.amp-wp-title-bar a {
    background-image: url( 'http://zikoko.com/wp-content/uploads/2015/07/logo-300x92.png' );
    background-repeat: no-repeat;
    background-size: contain;
    display: block;
    height: 28px;
    width: 94px;
    margin: 0 auto;
    text-indent: -9999px;
    text-decoration: none;
}






/* CONTENT CONTAINER */


.amp-wp-content {
	padding: 20px;
	overflow-wrap: break-word;
	word-wrap: break-word;
	font-weight: 400;
	color: #3d596d;
	background-color: #fff;
	margin-top: 20px;
}



/* Title */


.amp-wp-title {
	font-size: 30px;
	line-height: 1.258;
	font-weight: 600;
	color: #2e4453;
	margin: 0 0 10px;
}


.amp-wp-meta {
	
}


/* Meta */
ul.amp-wp-meta {
	padding: 0;
	margin: 30px 0 0;
}

ul.amp-wp-meta li {
	list-style: none;
	display: inline-block;
	margin: 0;
	line-height: 24px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	max-width: 300px;
}

ul.amp-wp-meta li:before {
	content: "\2022";
	margin: 0 8px;
}

ul.amp-wp-meta li:first-child:before {
	display: none;
}

.amp-wp-meta,
.amp-wp-meta a {
	color: #4f748e;
}

.amp-wp-meta .screen-reader-text {
	/* from twentyfifteen */
	clip: rect(1px, 1px, 1px, 1px);
	height: 1px;
	overflow: hidden;
	position: absolute;
	width: 1px;
}

.amp-wp-byline amp-img {
	border-radius: 50%;
	border: 0;
	background: #f3f6f8;
	position: relative;
	top: 6px;
	margin-right: 6px;
}



/* */

p,
ol,
ul,
figure {
	margin: 0 0 24px 0;
}

a,
a:visited {
	color: #0087be;
}

a:hover,
a:active,
a:focus {
	color: #33bbe3;
}


.amp-wp-meta,
nav.amp-wp-title-bar,
.wp-caption-text {
	font-size: 15px;
}



/* Captions */
.wp-caption-text {
	padding: 8px 16px;
	font-style: italic;
}


/* Quotes */
blockquote {
	padding: 16px;
	margin: 8px 0 24px 0;
	border-left: 2px solid #87a6bc;
	color: #4f748e;
	background: rgb(230, 230, 230);
}

blockquote p:last-child {
	margin-bottom: 0;
}

/* Other Elements */
amp-carousel {
	background: #000;
}

amp-img {
	width: 100%;
}

amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
	background: #f3f6f8;
}

.amp-wp-iframe-placeholder {
	background: #f3f6f8 url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}









/* *********************

	CUSTOM
	
**********************/




/* */


/*.pcblock__poll {
	display: none;
}*/


/* ---------------------
	INSTAGRAM EMBED
--------------------- */

.ig-embed-link {
	text-decoration: none;
	color: inherit;
	font-weight: 300;
}
.ig-embed {
	border: 1px solid rgb(200, 200, 200);
	border-radius: 3px;
	margin: 0 auto;
	max-width: 600px;
}
.ig-embed header {
	position: relative;
	text-align: left;
	height: 80px;
	line-height: 80px;
	padding: 0 10px;
}
.ig-embed header span {
	display: inline-block;
	margin: 0;
}
.ig-embed header span,
.ig-embed-user--image {
	vertical-align: middle;
}
.ig-embed-user--image {
	display: inline-block;
	border-radius: 50%;
	text-align: left;
	width: 10%;
	max-width: 50px;
	margin-right: 10px;
}
.ig-embed-user--handle {
	color: #125688;
	font-weight: 600;
	padding-right: 10px;
}
.ig-embed-user--follow {
	border: 1px solid #125688;
	border-radius: 3px;
	background-color: #fff;
	color: #125688;
	position: absolute;
	right: 10px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	font-size: 12px;
	padding: 3px 5px;

}
.ig-embed--main {
	width: 100%;
	height: auto;
	padding: 0 10px 9px 10px;
}
.ig-embed footer {
	position: relative;
	padding: 10px;
	background-color: rgb(240, 240, 240);
	height: 23px;
}
.ig-embed-meta {
	color: rgb(150, 150, 150);
	font-weight: 600;
	font-size: 1.4rem;
	float: left;
	line-height: 1;
}
.ig-embed-meta i.fa {
	font-style: normal;
	padding-right: 5px;
}
.ig-embed-meta span {
	margin-right: 15px;
	font-size: 14px;
}
.ig-logo {
	height: 20px;
	width: 20px;
	float: right;
}





/* ---------------------
	POST CONTENT BLOCKS
--------------------- */

.pcblock {
	margin-bottom: 50px;
}
h3.pcblock__headline {
	padding: 0;
	margin-bottom: 20px;
}

.pcblock__media {
	margin-bottom: 20px;
}



/* Image */
.pcblock__image {
	position: relative;
}
.pcblock__image--img {
	margin: 0 auto;
}
.pcblock__image--credit {
	display: block;
	min-height: 30px;
}
.pcblock__image--zkklogo {
	content: "";

	height: 25px;
	width: 70px;

	background-image: url('http://zikoko.com/wp-content/themes/zkk_new/inc/img/logo.png');
	background-repeat: no-repeat;
	background-position: center;

	position: absolute;
	bottom: 0;
	right: 0;
}


/* Embed */
.pcblock__embed iframe[id^='twitter-widget-'] { 
	width: 100%;
	max-width: 100%;
}

.pcblock__embed iframe[src^="https://www.youtube.com/"] {
	width: 100%;
	height: 300px;
}



/* Quote */
.pcblock__quote--text {
	quotes: "\201C""\201D""\2018""\2019";
	border-left: 10px solid #ccc;
	margin-bottom: 1rem;
	padding: 15px 0 15px 15px;

}
.pcblock__quote--text:before {
	color: #8235b6;
	content: open-quote;
	font-size: 4em;
	line-height: 0.1em;
	margin-right: 0.25em;
	vertical-align: -0.4em;
}

.pcblock__quote--text:after {
	content: close-quote;
	visibility: hidden;
}

.pcblock__quote--text p {
	display: inline;
}

.pcblock__quote--from {
	display: block;
	text-align: right;
	font-style: italic;

}




/* ---------------------
	POST AUTHOR
--------------------- */


.post-author {
	height: 50px;
	position: relative;
	display: inline-block;
	margin-bottom: 20px;
	margin-right: 35px;
	letter-spacing: normal;
}

.pa__image {
	height: 50px;
	width: 50px;
	margin-right: 10px;
	float: left;
	overflow: hidden;
}
.pa__image  a {
	display: block;
	height: 100%;
	width: 100%;
}

.pa__image img {
	min-width: 100%;
	height: 100%;
	width: auto;
}

.pa__text {
	margin-bottom: 10px;
	display: inline-block;
	font-weight: 600;
	padding: 0;	
	height: 50px;
}

.pa__text__title {
	background-color: #f0f0f0;
	color: #8235b6;
	font-size: 12px;
	line-height: 1;
	position: relative;
	top: 0;
	display: inline-block;
	padding: 2px 5px;
	margin-bottom: 5px;
	width: auto;
	vertical-align: top;
}

.pa__text__name {
	display: block;
	font-size: 14px;
	color: #000;
	font-weight: 600;
}





/* ---------------------
	SOCIAL SHARE BUTTONS
--------------------- */


.amp-social-links {

	display: flex;
	margin: 0;
	padding: 0;
	margin-bottom: 40px;
}

.amp-social-links li {
	list-style: none;
	display: inline-block;
	width: 50%;
}

.amp-social-links li a {
	display: block;
	width: 100%;
	height: 100%;
	text-align: center;
	color: #fff;
	padding: 5px 0;
	text-decoration: none;
	font-size: 13px;
}


.amp-social-links li.facebook a {
	background-color: #3B5998;
}
.amp-social-links li.twitter a {
	background-color: #4099FF;
}





/* ---------------------
	POLL
--------------------- */
.pcblock__poll--q-container {
	position: relative;
	width: 100%;
	padding: 30px 20px;
	text-align: center;
	margin-bottom: 30px;

    box-sizing: border-box;
	background-color: #8235b6;
	color: #fff;
}

li.poll-answer {
	border: 1px solid #D8D8D8;
    background-color: #f2f2f2;
    margin-bottom: 15px;
    position: relative;
    vertical-align: top;
}
.pollResults {
	background-color: #D8D8D8;
	color: #8235b6;
	text-align: center;

	position: absolute;
	top: 0;
	right: 0;
	height: 100%;
	width: auto;
	min-width: 15%;
}
.pollResults__real {
	padding-top: 10px;
	padding-top: 10px;
    display: inline-block;
    font-weight: 700;
}
.poll-answers-list {
	padding: 0;
}




/* Image poll */
.poll-answers--image li.poll-answer {
	display: inline-block;
	width: 47%;
	margin-right: 15px;
    padding: 10px 15px;
    padding-bottom: 60px;
}
.poll-answers--image li.poll-answer:nth-child(odd) {
	margin-right: 2%;
}
.poll-answers--image .poll-answers--image {
	width: 100%;
	height: 200px;
	overflow: hidden;
	margin-bottom: 15px;
}
.poll-answers--image .poll-answers--image img {
	min-height: 100%;
	width: 100%;
	height: auto;
	object-fit: cover;
}
.poll-answers--image .pollResults {
	position: absolute;
	bottom: 0;
	left: 0;
	height: 50px;
	width: 100%;
	line-height: 50px;
}
.poll-answers--image .answerText {
	display: inline-block;
	max-width: 82%;
}
.poll-answers--image {
	text-align: center;
}
.poll-answer--image {
	display: none;
}


li.poll-answer {
	display: block;
    padding: 10px 15px;
}


.answerText {
	display: inline-block;
	max-width: 82%;
}












