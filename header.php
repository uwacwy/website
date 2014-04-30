<?php

  $goal = 420000;
  $progress = (422400/420000)*100;

?><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<title><?php if (isset($pageName)) echo $pageName . " | "; ?>United Way of Albany County</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- CSS concatenated and minified via ant build script-->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/menu.css" media="screen">
<link rel="stylesheet" href="/css/screen.css" media="screen, projection">
<link rel="stylesheet" href="/css/print.css" media="print">

<!-- end CSS-->
<script src="/js/libs/modernizr-2.0.6.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33020865-1']);
  _gaq.push(['_setDomainName', 'unitedwayalbanycounty.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php if(isset($UWAC_custom_head) ) {echo $UWAC_custom_head;} ?>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=201110373287663";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div class="header">
	<div class="printOnly">
		<h1>United Way of Albany County</h1>
	</div><!-- end .screenOnly -->
	<div class="screenOnly">
		<a href="/">
			<img src="/css/img/uwac_logo.png" height="50" width="210" alt="United Way of Albany County"/>
		</a>
		<?php include("menu/menu.php"); ?>
	</div><!-- end .screenOnly -->
</div>
<div class="container">
	<div class="span-20">