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
	<link rel="icon" type="image/png" href="css/favicon.ico">

	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="css/android-chrome-192x192.png" />

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
		overflow: auto;
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
	
	.subjects_div
	{
		width:75%;
		text-align:right;
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

	#div_iframe
		{
			width:100%;
			padding:0px;
		}
		
	#div_iframe_02
		{
			display:none;
		}
	
	
/* @MEDIA */
@media only screen and (max-width: 600px)
	{
		.subjects_div
		{
			width:75%;
		}
		
		#div_iframe_desktop 
		{
			display:none;
		}
		
		#div_iframe_mobile
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
		
		#div_iframe_desktop
		{
			display:block;
		}
				
		#div_iframe_mobile
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

<!-- LOADER -->
<div class="loader"></div>

<!-- SCRIPT -->
<script>
	//SETTING WIDTH VARIABLE
	var a_11_loader = $(window).outerWidth()/2-60;
	
	//SETTING HEIGHT VARIABLE
	var a_12_loader = $(window).outerHeight()/2-60;
	
	//SETTING HEIGHT AND WIDTH
	$('.loader').css("left","35%");
	$('.loader').css("top",a_12_loader);
</script>
<!-- SCRIPT -->		

<!-- TOP BUTTONS MENU -->
<div id="div_top_buttons" style="width:100%;text-align:center;float:right;direction:rtl;">
	<a href="php_01/contact.php" style="text-decoration:none;">
		<img class="img_top_menu" src="img/contact.png" style="width:19%;">
	</a>
	
	<a href="credits/credits.php" style="text-decoration:none;">
		<img class="img_top_menu" src="img/credits.png" style="width:19%;">
	</a>
		
	<a href="https://pay.tranzila.com/ttxxo001ch" style="text-decoration:none;">
		<img class="img_top_menu" src="img/payment.png" style="width:19%;">
	</a>
		
	<a href="Youtube/01.php" style="text-decoration:none;">
		<img class="img_top_menu" src="img/Youtube.png" style="width:19%;">
	</a>
		
	<a href="index.php" style="text-decoration:none;">
		<img class="img_top_menu" src="img/Introduction.png" style="width:19%;">
	</a>

</div>
<!-- TOP BUTTONS MENU -->

<!-- CONTENT -->
<div style="width:100%;text-align:center;float:right;direction:ltr;">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1 style="margin:6px auto 0px;">Introduction</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<!-- CONTENT -->
<div id="div_iframe_mobile" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<iframe width="100%" height="225px" src="https://www.youtube.com/embed/N5412d9N3uM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
</div>	

<!-- CONTENT -->	
<div id="div_iframe_desktop" style="width:100%;text-align:center;float:right;direction:ltr;">	
	<!-- TABLE -->
	<table id="table_iframe" style="width:100%;">
		<tr>
			<!-- IFRAME -->
			<td id="div_iframe" style="text-align:center;float:right;">
				<iframe width="100%" height="225px" src="https://www.youtube.com/embed/N5412d9N3uM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</td>
			
			<!-- IFRAME -->
			<td id="div_iframe_02" style="text-align:center;float:right;direction:ltr;">
				<p style="font-size:30px;">🏆</p><h1>Hi,<br>I can help<br>you with<br>Physics<p style="font-size:30px;">⚽❤️🔭</p></h1>
			</td>
		<tr>
	</table>
</div>
	
<!-- CONTENT -->
<div style="width:100%;text-align:center;float:right;direction:ltr;margin-top:12px;">
	<!-- HEADER -->
	<div style="width:100%;">	
		<h1 style="margin:6px auto 0px;">Subjects</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<!-- CONTENT -->
<div style="width:100%;text-align:center;float:right;direction:ltr;">
	<!-- HEADER -->
	<h3 style="margin:12px auto 12px;">MECHANICS 🔨</h3>
		
	<!-- TEXT -->
	<p>
		* Dynamics
		* Kinetics
		* Gravitation
		* Energy and Work
		* Momentum and Impulse
		* Harmonic Motion
		* Circular Motion
	</p>
	
	<!-- HEADER -->
	<h3 style="margin:12px auto 12px;">ELECTRICITY⚡</h3>
		
	<!-- TEXT -->
	<p>
		* Electrostatics
		* DC Circuits
		* Capacitance
	</p>
	
	<!-- HEADER -->
	<h3 style="margin:12px auto 12px;">ELECTROMAGNETISM✨</h3>
		
	<!-- TEXT -->
	<p>
		* Magnetic Fields
		* Induced current
		* Lorentz Force
		* Electromotive Force
	</p>
	
	<!-- HEADER -->
	<h3 style="margin:12px auto 12px;">OPTICS👓</h3>
		
	<!-- TEXT -->
	<p>
		* Reflection
		* Snell's Law
		* Critical angle
		* Lenses
	</p>
	
	<!-- HEADER -->
	<h3 style="margin:12px auto 12px;">WAVES🌊</h3>
		
	<!-- TEXT -->
	<p>
		* Wave interference
		* Bohr model
		* Emission spectrum
		* Absorption spectrum
		* Radioactivity
	</p>
</div>

<!-- NEW LINE -->
<h4>&nbsp;</h4>

<script>
	<!-- a_11_f script -->
	// loader window resize function
	function a_11_f()
	{
		var a_11_loader = $(document).outerWidth()/2-60;
		
		var a_12_loader = $(window).outerHeight()/2-60;
		
		$('.loader').css("left","40%");
		$('.loader').css("top",a_12_loader);
	}
	
	$(document).ready(function()
	{
	//GET VISIT DATA
		<!-- OUTPUT --><!-- POST REQUEST -->
		$.post("php_01/mail_interest_2.php",
		{
			subject:"Series"	,
			subsubject:"Heshbonit"	,
		},
			function(data, status)
			{
				console.log("data ok");
			}
		);//GET VISIT DATA
		
		//opacity for loader
		$('#div_LECTURERS, #courses_menu, #div_what_is_it').animate({opacity:1},1000);
		$('.loader').css("display","none");
	});

	
	<!-- window resize script -->
	$( window ).resize(function() 
	{
		//loader
		a_11_f();
	});	
</script>
</body>
</html>