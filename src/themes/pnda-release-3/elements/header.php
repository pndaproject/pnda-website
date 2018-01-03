<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	@t(metaTitle { title: @p(meta_title) })
	@t(jquery)
	@t(bootstrapJS)

	<script type="text/javascript" src="@t(themeURL)/js/collapselist.js"></script>
    <script type="text/javascript" src="@t(themeURL)/js/jquery.qtip.min.js"></script>

	@t(bootstrapCSS)
	<link type="text/css" rel="stylesheet" href="@t(themeURL)/css/standard.css" />
	<link type="text/css" rel="stylesheet" href="@t(themeURL)/css/images.css" />
	<link type="text/css" rel="stylesheet" href="@t(themeURL)/css/customlist.css" />
	<link type="text/css" rel="stylesheet" href="@t(themeURL)/css/lightbox.css" />
	<link type="text/css" rel="stylesheet" href="@t(themeURL)/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="@t(themeURL)/css/jquery.qtip.min.css" />

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
{ (i[r].q=i[r].q||[]).push(arguments)}
,i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-79140116-1', 'auto');
ga('send', 'pageview');
</script>

</head>

<body class="level-@t(level)">

	@x(Navbarpnda {
		logo: @s(pndalogo),
    brand: "Home",
		logoWidth: 40,
		logoHeight: 40,
		fluid: false,
		fixedToTop: true,
		search: false,
		searchPosition: "right",
		levels: 1
	})