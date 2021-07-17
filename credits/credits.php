<html>
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

.container
{
	width:100%;
	text-align:center;
	float:left;
}


.header_100
{
	width:100%;
	text-align:center;
}


*
{
	font-family: 'Bellefair', sans-serif;
}

/* LIST *//* https://designshack.net/articles/css/5-simple-and-practical-css-list-styles-you-can-copy-and-paste/ */

* {
	margin: 0;
	padding: 0;
}
 
body 
{
	color:black;
}

#div_top_buttons
	{
		/* COLORS */
		background-color:#3064ae;
	}
 
div {
  
  width: 100%;
  margin: 0 auto;
  overflow: auto;
}
 
ul {
  list-style-type: none;
}
 
li img {
  float: left;
  margin: 10px;
  /*border: 5px solid #fff;*/
 
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

#container
{
	width:75%;
	margin:auto;
}

/* @media */
@media only screen and (max-width: 710px)
{
	
	#container
	{
		width:100%;
	}
	
	li img
	{
		width:31%;
		margin:1%;
		float: left;
		border: 0px;
	}
	
	#container_li
	{
		text-align:center;
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
		<h1 style="margin:6px auto 0px;">Credits</h1>
	</div>
	
	<!-- HORIZONTAL LINE -->
	<div style="width:50%;margin:auto;padding:0px 0px 6px;">
		<hr>
	</div>
</div>

<div class="header_100">
	
	<!-- CREDITS GALLERY -->
	
	<div id="container">
		<ul id="container_li">
			
			<li><a href="https://www.flaticon.com/"><img src="../img/credits/01.jpg" /></a></li>
			<li><a href="https://afeld.github.io/emoji-css/"><img src="../img/credits/02.jpg" /></a></li>
			<li><a href="https://www.pexels.com/"><img src="../img/credits/03.jpg" /></a></li>
			<li><a href="https://favicon.io/emoji-favicons/"><img src="../img/credits/04.jpg" /></a></li>
			
			
			<li><a href="https://www.gimp.org/"><img src="../img/credits/07.jpg" /></a></li>
			<li><a href="https://notepad-plus-plus.org/download/v7.5.8.html"><img src="../img/credits/08.jpg" /></a></li>
			<li><a href="https://www.youtube.com/"><img src="../img/credits/09.jpg" /></a></li>
			<li><a href="https://stackoverflow.com/"><img src="../img/credits/10.jpg" /></a></li>
			<li><a href="https://www.w3schools.com/"><img src="../img/credits/11.jpg" /></a></li>
			<li><a href="https://www.codecademy.com/"><img src="../img/credits/12.jpg" /></a></li>
			
			
			<!-- <li><a href="#"><img src="http://placehold.it/150x150" /></a></li> -->
		</ul>
	</div>
</div>

</body>
</html>