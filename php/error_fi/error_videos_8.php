<?php
//SESSION START
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

//SESSION VARS
	$_SESSION['message_1']="<h1 style='margin-bottom:0px;'>Something's wrong with the payment confirmation</h1><div style='width:50%;margin:auto;'><hr></div><h4 id='c' style='margin:2px auto;'>please contact us at 5minsphysics@gmail.com</h4>";
?>
<head>
<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- FAVICON --><!-- OUTPUT 01 -->
	<link rel="icon" type="image/png" href="../../css/favicon.ico">

	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="../../css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="../../css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="../../css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="../../css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="../../css/android-chrome-192x192.png" />

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style>
/* TEMPLATE */
body
	{
		font-family: 'Bellefair', serif;
		box-sizing:border-box;
	}

hr	
	{
		border-top:1px solid #f1f1f1;
	}
	
input[type="submit"],input[type="email"],input[type="text"],input[type="password"]
	{
		font-family: 'Bellefair', serif;
	}

a	{
		text-decoration:none;
		color:#54c539;
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

<body>
	<!-- TEXT -->
	<div style="text-align:center;width:100%;direction:rtl;">
		<?=$_SESSION['message_1'] ?>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;">
		<hr>
	</div>
</body>