<!doctype html>
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
<link rel="stylesheet" href="/css/menu.css">
<link rel="stylesheet" href="/css/screen.css" media="screen, projection">
<link rel="stylesheet" href="/css/print.css" media="print">

<!-- end CSS-->
<script src="/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<div class="header">
	<div class="printOnly">
		<h1>United Way of Albany County</h1>
		<p>Serving all of Albany County since 19xx</p>
	</div><!-- end .screenOnly -->
	<div class="screenOnly">
		<a href="/">
			<img src="/css/img/uwac_logo.png" height="50" width="210" alt="United Way of Albany County"/>
		</a>
		<?php include('menu.php'); ?>
	</div><!-- end .screenOnly -->
</div>
<div class="container">
	<div class="span-20">
				<div class="span-14">
					<h2>New Menu Demonstration</h2>
				</div><!-- end .span-14 -->
			<?php require('../sidebar.php'); ?>
		</div><!-- end .span-20 -->
<?php require('../footer.php'); ?>