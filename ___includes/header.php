<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<title>{if embed:title != ""}{embed:title} - {/if}{site_name}</title>
<meta charset="{charset}">
{if embed:meta != ""}{embed:meta}{/if}
{if embed:description != ""}<meta name="description" content="{embed:description}">{/if}

{!--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}
{if segment_1=="learn" OR segment_1=="now" OR segment_1=="show"}
	<!-- RoyalSlider -->
	<link rel="stylesheet" href="/site/royalslider/royalslider.css">
	<link rel="stylesheet" href="/site/royalslider/skins/minimal-white/rs-minimal-white.css"> 
{/if}


  <link rel="shortcut icon" href="http://www.iconj.com/ico/a/g/agq6olcisw.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="/content/files/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="/content/files/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/content/files/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="/content/files/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/content/files/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/content/files/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/content/files/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/content/files/apple-touch-icon-152x152.png" />



	<!-- Included CSS Files -->
	<link rel="stylesheet" href="/site/stylesheets/fonts.css">
	<link rel="stylesheet" href="/site/stylesheets/foundation.css">
	<link rel="stylesheet" href="/site/stylesheets/app.css">
	<link rel="stylesheet" href="/site/stylesheets/animate.css">
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="/site/stylesheets/ie.css">
	<![endif]-->
	
	<script src="/site/javascripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
{if segment_2=="project" OR segment_2=="preview-project" OR segment_2=="review-project" OR segment_1=="institution" OR segment_2=="archive-review" OR segment_2=="archive-shortlist" }
	<!-- RoyalSlider -->
	<link rel="stylesheet" href="/site/royalslider/royalslider.css">
	<link rel="stylesheet" href="/site/royalslider/skins/default/rs-default.css"> 
{/if}



{if segment_2=="add-project"}
	<!-- Dropkick -->
	<link rel="stylesheet" href="/site/dropkick/100_dk.css">
{/if}

{!-- Keep this here, to get SAEF form to work --}
{!--<script src="http://code.jquery.com/jquery-latest.js"></script>--}
<script src="/site/javascripts/jquery-1.8.3.js"></script>

{if segment_1=="show" && segment_2=="future"}
<link rel="alternate" type="application/rss+xml" title="100 Future" href="http://100archive.com/rss/future">
{/if}
{if segment_1=="now" && segment_2==""}
<link rel="alternate" type="application/rss+xml" title="100 Future" href="http://100archive.com/rss/now">
{/if}
</head>
<body class="{embed:page_title}">