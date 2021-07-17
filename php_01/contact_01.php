<?php
session_start();

//ERRORS DISPLAY
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

//SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

?>
<head>
<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- FAVICON --><!-- OUTPUT 01 -->
	<link rel="icon" type="image/png" href="../css/favicon.ico">

	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="../css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="../css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="../css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="../css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="../css/android-chrome-192x192.png" />

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- IOS PHONES -->
	<meta name="format-detection" content="telephone=no">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style>
/* OPACITY FOR LOADER */
	
/*	#div_content_02, #div_content_01
	{
		opacity:0;
	}
*/
body	
	{
		/* FONTS */
		font-family: 'Bellefair', serif;
		
		/* COLORS */
		background-color:white;
	}

#div_top_buttons
	{
		/* COLORS */
		background-color:#3064ae;
	}

.img_top_menu
	{
		padding-bottom:6px;
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

<!-- CONTENT DIV 01 -->
<div id="div_content_01" style="text-align:center;width:100%;float:right;clear:both;">
	<!-- HEADER -->
	<h1 style="margin:6px auto 0px;">Contact</h1>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;">
		<hr>
	</div>
	
	<!-- CONTACT BUTTON DIV -->
	<div style="width:75%;margin:auto;text-align:center;"> 
		
		<!-- CONTACT BUTTON --><!-- OUTPUT 04 -->
		<div style="width:75%;margin:auto;">
			<a href="mailto:5minsphysics@gmail.com" rel="nofollow">
				<input class="responsive_input_4 button" style="width:100%;" type="submit" value="5minsphysics@gmail.com" name="register">
			</a>
		</div>
    </div>	
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;">
		<hr>
	</div>
	
	<!-- TEXT -->
	<div style="width:100%;margin:auto;">
		<h4 style="margin:4px auto;padding:2px;font-size:16px;">Or leave your details and we'll get back to you</h4>
	</div>
</div><!-- CONTENT DIV 01 -->

<!-- CONTENT DIV 02 -->
<div id="div_content_02" style="text-align:center;width:100%;float:right;clear:both;">
	
	<!-- SENDING MESSAGE FORM --><!-- OUTPUT 05 -->
	<form action="mail_interest.php" method="post" enctype="multipart/form-data" autocomplete="on" style="margin-bottom:0px;">
		
		<!-- INPUTS -->
		<input id="input_1" style="margin:4px auto;padding:2px;width:200px;text-align:center;" type="text" placeholder="name" name="user_name" required><br>
		<input style="margin:4px auto;padding:2px;width:200px;text-align:center;" type="text" placeholder="phone" name="phone" required><br>
		<input style="margin:4px auto;padding:2px;width:200px;text-align:center;" type="email" placeholder="mail" name="mail"><br>
		
		<!-- EMOJI DIV -->
		<div>
			<i id="p" class="em em-crown"></i>
		</div>
		
		<!-- SEND -->
		<input style="margin:4px auto;padding:2px;" type="submit" value="SEND" name="register">
	</form>
</div><!-- CONTENT DIV 02 -->

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
		
		//opacity for loader
		//$('#div_content_01, #div_content_02').animate({opacity:1},1000);
		//$('.loader').css("display","none");
	});

	
	<!-- window resize script -->
	$( window ).resize(function() 
	{
		//loader
		//a_11_f();
	});	
</script>
</body>
<?php
	
	//SETTING SESSION VAR	
	$_SESSION['from_1_st_time'] = 1;
	
?>