<?php

// SESSION START
	session_start();

// ERRORS DISPLAY
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// HTTPS REDIRECT
	if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") 
	{
		$location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . $location);
		exit;
	}

// VARS
	$_SESSION['visit_data'] = 1;
?>

<!DOCTYPE html>
<html lang="iw" dir="rtl">
<head>

	<!-- FAVICON --><!-- OUTPUT 01 -->
	<link rel="icon" type="image/png" href="../css/favicon.ico">

	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="../css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="../css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="../css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="../css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="../css/android-chrome-192x192.png" />

	<!-- TITLE -->
	<title>5mins Physics</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='Physics explained in 5 minutes steps.'>
	
	<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
<style>
/* OPACITY FOR LOADER */
	
	#div_LECTURERS, #courses_menu, #div_what_is_it
	{
		opacity:0;
	}

/* ALL */

* 
	{
		/* GENERAL SETTINGS */
		box-sizing: border-box;
		margin: 0;
		
		/* FONTS*/
		font-family: 'Bellefair', serif;
		
	}

body
	{
		/* COLORS */
		background-color:white;
	}
	
#div_top_buttons
	{
		/* COLORS */
		background-color:#3064ae;
	}
	
	div.gallery {
		margin: 5px auto;
		border: 1px solid #ccc;
		/*float: left;*/
		width: 75%;
		overflow:hidden;
	}
	
	div.gallery:hover {
		border: 1px solid #777;
	}
	
	div.gallery img {
		width: 100%;
		height: auto;
	}
	
	div.desc {
		padding: 15px 0px;
		text-align: center;
	}
	
	.container
	{
		width:100%;
		text-align:center;
		float:left;
	}
	
	/* LIST *//* https://designshack.net/articles/css/5-simple-and-practical-css-list-styles-you-can-copy-and-paste/ */

	div 
	{
		width: 100%;
		margin: 0 auto;
	}
	
	ul 
	{
		list-style-type: none;
	}
	
	li img {
	float: left;
	margin: 10px;
	border: 5px solid #fff;
	
	-webkit-transition: box-shadow 0.5s ease;
	-moz-transition: box-shadow 0.5s ease;
	-o-transition: box-shadow 0.5s ease;
	-ms-transition: box-shadow 0.5s ease;
	transition: box-shadow 0.5s ease;
	}
	
	li img:hover {
	-webkit-box-shadow: 0px 0px 7px rgba(255,255,255,0.9);
	box-shadow: 0px 0px 7px rgba(255,255,255,0.9);
	}
	
	/* GENERAL */
	.thumbnail_pic
	{
		/*width:150px;*//*CHANGED*/
		width:25%;
		padding:0px;
		border:0.5px black solid;
	}
	
	.to_complete
	{
		background-color:yellow;
	}
	
	.to_fix
	{
		background-color:lightblue;
	}
	
	.initial_width
	{
		width:initial;
	}

	
	
/* BUTTON *//*http://jeromejaglale.com/doc/css/pretty_button*/	
		.button 
		{
			/*font: bold 13px "Helvetica Neue", Helvetica, Arial, clean, sans-serif !important;*/
			text-shadow: 0 -1px 1px rgba(0,0,0,0.25), -2px 0 1px rgba(0,0,0,0.25);
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.5);
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.5);
			display: inline-block;
			color: white;
			padding: 5px 10px 5px;
			white-space: nowrap;
			text-decoration: none;
			cursor: pointer;
			background: #A9014B url(../../css/button_overlay.png) repeat-x scroll 0 0;/*OUTPUT 03*/
			border-style: none;
			text-align: center;
			overflow: visible;
		}
		
		.button:hover,
		.button:focus 
		{
			background-position: 0 -50px;
			color: white;
		}
		
		.button:active 
		{
			background-position: 0 -100px;
			-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.7);
			-webkit-box-shadow: none;
		}

input[type="submit"],input[type="email"],input[type="text"],input[type="password"],input[type="tel"]
	{
		font-family:'Bellefair', sans-serif;
	}
		
/* CLASSES */
	.responsive_input_4
	{
		width:96%;
		height:36px;
		margin:4px 2px;
		padding:6px;
		font-size:16px;
	}
	
		
/* @ MEDIA */
	@media only screen and (max-width: 500px)
	{
		.responsive_input_4
		{
			width:96%;
			height:36px;
			margin:4px 2px;
			padding:6px;
			font-size:16px;
		}
	}

/* @MEDIA */
@media only screen and (max-width: 600px)
	{
		.div_iframe_desktop 
		{
			display:none;
		}
		
		.div_iframe_mobile
		{
			display:block;
		}
	}
	
@media only screen and (min-width: 600px)
	{
		#div_iframe
		{
			width:50%;
			padding:0px;
		}
		#div_iframe_02
		{
			display:block;
			width:50%;
			vertical-align:middle;
		}
		
		#table_iframe 
		{
			padding:4px 1px 1px;
		}
		
		.div_iframe_desktop
		{
			display:block;
		}
				
		.div_iframe_mobile
		{
			display:none;
		}
	}
	
</style>

<!-- Hotjar Tracking Code for https://5minsphysics.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1286628,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>

<body style="max-width:720px;margin:auto;">

<!-- HEADER -->
<?php include '../php/header.php';?>

<!-- CONTENT -->
<div style="width:100%;text-align:center;float:right;">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1 style="margin:6px auto 0px;">YouTube Channel</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<!-- CONTENT -->
<div class="div_iframe_mobile" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<iframe width="100%" height="225px" src="https://www.youtube.com/embed/N5412d9N3uM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
</div>	

<div class="div_iframe_mobile" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<iframe width="100%" height="225px" src="https://www.youtube.com/embed/-m1TBt9iYNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
</div>

<div class="div_iframe_mobile" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<iframe width="100%" height="225px" src="https://www.youtube.com/embed/zIrQM2QuJ7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
</div>

<div class="div_iframe_mobile" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<iframe width="100%" height="225px" src="https://www.youtube.com/embed/nLZvvo_l2Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
</div>

<!-- CONTENT -->	
<div class="div_iframe_desktop" style="text-align:center;float:right;direction:ltr;">	
	<!-- TABLE -->
	<table id="table_iframe" style="width:100%;">
		<tr>
			<!-- IFRAME -->
			<td id="div_iframe" style="text-align:center;float:right;">
				<iframe width="100%" height="225px" src="https://www.youtube.com/embed/N5412d9N3uM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
			
			<!-- IFRAME -->
			<td id="div_iframe" style="text-align:center;float:right;">
				<iframe width="100%" height="225px" src="https://www.youtube.com/embed/-m1TBt9iYNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
		<tr>
		<tr>
			<!-- IFRAME -->
			<td id="div_iframe" style="text-align:center;float:right;">
				<iframe width="100%" height="225px" src="https://www.youtube.com/embed/zIrQM2QuJ7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
			
			<!-- IFRAME -->
			<td id="div_iframe" style="text-align:center;float:right;">
				<iframe width="100%" height="225px" src="https://www.youtube.com/embed/nLZvvo_l2Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
		<tr>
	</table>
</div>


<div style="text-align:center;width:100%;float:right;">
	
	<!-- HEADER -->
	<h1 style="margin:6px auto 0px;">MORE CONTENT</h1>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;">
		<hr>
	</div>
	
	<!-- MORE BUTTON DIV -->
	<div style="width:75%;margin:auto;text-align:center;"> 
		
		<!-- MORE BUTTON --><!-- OUTPUT 04 -->
		<div style="width:75%;margin:auto;">
			<a href="https://www.youtube.com/channel/UCOerrCnCZvzownAuiFvDXog" rel="nofollow">
				<input class="responsive_input_4 button" style="width:100%;" type="submit" value="Click For More" name="register">
			</a>
		</div>
    </div>	
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:0px auto 12px;">
		<hr>
	</div>
	
</div>

</body>
</html>