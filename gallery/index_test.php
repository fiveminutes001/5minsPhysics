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

<!-- srcs -->
	<!-- js split string -->
	<!-- https://www.w3schools.com/jsref/jsref_split.asp -->
	<!-- color codes -->
	<!-- http://www.color-hex.com/popular-colors.php -->
	<!-- js border left -->
	<!-- https://www.w3schools.com/jsref/prop_style_borderleft.asp -->
	<!-- js logical operators -->
	<!-- https://www.w3schools.com/js/js_comparisons.asp -->
	<!-- js math random -->
	<!-- https://www.w3schools.com/jsref/jsref_random.asp -->
	<!-- w3schools responsive design -->
	<!-- https://www.w3schools.com/css/css_rwd_mediaqueries.asp -->
	<!-- w3schools media queries -->
	<!-- https://www.w3schools.com/css/css_rwd_mediaqueries.asp -->
	<!-- css absolute positioned elements are taken out of the flow of the document. Height needs to be set for the containing div to have dimensions. -->
	<!-- https://stackoverflow.com/questions/1137517/how-to-position-absolute-inside-a-div -->
	<!-- jquery updates -->
	<!-- https://stackoverflow.com/questions/38871753/uncaught-typeerror-a-indexof-is-not-a-function-error-when-opening-new-foundat -->
	<!-- jquery get div height -->
	<!-- https://stackoverflow.com/questions/9292529/jquery-height-returns-0-on-a-visible-div-why -->
	<!-- http://api.jquery.com/height/ -->
	<!-- js screen height -->
	<!-- https://stackoverflow.com/questions/2407221/how-to-get-the-height-of-the-screen-using-jquery
	<!-- js get last letter of string -->
	<!-- https://stackoverflow.com/questions/3884632/how-to-get-the-last-character-of-a-string -->
	<!-- jquery get array of .each loop -->
	<!-- https://stackoverflow.com/questions/7753182/how-to-create-an-array-from-each-loop-with-jquery -->
	<!-- jquery position -->
	<!-- https://api.jquery.com/position/ -->
	<!-- css viewport height -->
	<!-- https://www.weareconvoy.com/2014/07/css-vw-and-vh-units-are-they-worth-using-yet/ -->
	<!-- http://api.jquery.com/height/ -->
	<!-- jquery wildcard selector -->
	<!-- https://stackoverflow.com/questions/5376431/wildcards-in-jquery-selectors -->
	<!-- js array length -->
	<!-- https://www.w3schools.com/jsref/jsref_length_array.asp -->
	<!-- jquery get parameter into click function -->
	<!-- https://stackoverflow.com/questions/3273350/jquerys-click-pass-parameters-to-user-function -->
	<!-- jquery loop break -->
	<!-- https://stackoverflow.com/questions/5515109/jquery-how-to-exit-break-function-from-each-statement -->
	<!-- jquery remove css property -->
	<!-- https://stackoverflow.com/questions/9405689/how-to-remove-css-property-in-jquery -->
	<!-- jquery function to run only on desktop -->
	<!-- https://stackoverflow.com/questions/22996312/execute-a-jquery-function-only-over-a-specific-width-of-window-even-resizing -->
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
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html 		
	{
		box-sizing: border-box;
	}

	
*, *:before, *:after 
	{
		box-sizing: inherit;
	}

body
	{
		max-width:720px;
		margin:auto;
		position:absolute;
	}
#div_top_buttons
	{
		/* COLORS */
		background-color:#3064ae;
	}	
	
#menu_div
	{
		position:absolute;
		height:100vh;
		right:0%;
		left:0%;
		z-index:-2;
		opacity:0;
		max-width:720px;
		margin:auto;
	}
	
.div_row_1
	{
		top:16px;
	}
	
.div_row_2
	{
		position:absolute;
		right:0%;
		left:0%;
		background-color:purple;
		top:30vh;
		height:30vh;
	}
	
.div_row_3
	{
		position:absolute;
		right:0%;
		left:0%;
		background-color:blue;
		top:60vh;
		height:30vh;
	}
	
.div_row_4
	{
		position:absolute;
		right:0%;
		left:0%;
		background-color:yellow;
		top:90vh;
		height:30vh;
	}

.col_left
	{
		position:absolute;
		width:25%;
	}

.col_l	
	{
		left:5%;
	}	
	
.col_middle
	{
		position:absolute;
		width:30%;
	}

.col_m	
	{
		left:35%;
	}	

.col_m_2	
	{
		right:35%;
	}
	
.col_right
	{
		position:absolute;
		width:25%;
	}

.col_r	
	{
		right:5%;
	}
/* For mobile phones: */	
[class*="col-"]
	{
		background-color:blue;
		width: 50%;
		background-color:green;
	}	

/* w3schools loader */
.loader 
	{
		position:absolute;
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid #3498db;
		width: 120px;
		height: 120px;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
	}

@-webkit-keyframes spin 
	{
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
	}

@keyframes spin 
	{
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}
</style>
</head>

<body>
<!-- HEADER -->
<?php include '../php/header.php';?>

<div class="loader"></div>

<script>
	
	//FOR LOADER
	var a_11 = $(document.body).outerWidth()/2-60;
	//console.log(a_11);
	var a_12 = $(window).outerHeight()/2-60;
	$('.loader').css("left",a_11);
	$('.loader').css("top",a_12);
	
	//LEFT FOR BODY
	var document_outer_width = $(document).outerWidth();
	var body_outer_width = $(document.body).outerWidth();
	var left_body_value = document_outer_width/2 - body_outer_width/2;
	$(document.body).css("left",left_body_value);
	
	//TOP FOR MENU DIV
	var header_outer_height = $('#div_top_buttons').outerHeight();
	var top_div_value = header_outer_height;
	$('#menu_div').css("top",top_div_value);
</script>

	<div id="menu_div">
		<div id="div_1" class="col_left col_l"><img id="img_1" style="width:100%;" src="IMG_E9323.JPG"></div>
		<div id="div_2" class="col_middle col_m"><img id="img_2" style="width:100%;" src="img/02.jpg"></div>
		<div id="div_3" class="col_right col_r"><img id="img_3" style="width:100%;" src="img/03.jpeg"></div>
		<div id="div_4" class="col_left col_l"><img id="img_4" style="width:100%;" src="img/04.jpeg"></div>
		<div id="div_5" class="col_right col_r"><img id="img_5" style="width:100%;" src="img/05.jpeg"></div>
		<div id="div_6" class="col_middle col_m"><img id="img_6" style="width:100%;" src="img/01.jpeg"></div>
		<div id="div_7" class="col_left col_l"><img id="img_7" style="width:100%;" src="img/02.jpg"></div>
		<div id="div_8" class="col_left col_l"><img id="img_8" style="width:100%;" src="img/03.jpeg"></div>
		<div id="div_9" class="col_middle col_m"><img id="img_9" style="width:100%;" src="img/04.jpeg"></div>
		<div id="div_10" class="col_middle col_m"><img id="img_10" style="width:100%;" src="img/05.jpeg"></div>
		<div id="div_11" class="col_right col_r"><img id="img_11" style="width:100%;" src="img/01.jpeg"></div>
		<div id="div_12" class="col_right col_r"><img id="img_12" style="width:100%;" src="img/02.jpg"></div>
		<div id="div_13" class="col_left col_l"><img id="img_13" style="width:100%;" src="img/03.jpeg"></div>
		<div id="div_14" class="col_right col_r"><img id="img_14" style="width:100%;" src="img/04.jpeg"></div>
		
	</div>

<script>
//TOP FOR MENU DIV
var header_outer_height = $('#div_top_buttons').outerHeight();
var top_div_value = header_outer_height;
$('#menu_div').css("top",top_div_value);

function class_list_func(div_id)
{
// getting class list
	var a_1 = $("#"+div_id).prop('class');
	//console.log("div_1 class:",a_1);
	//console.log("a_1 length:",a_1.length);

// moving list to array
	var class_list_ar = [];
	class_list_ar = a_1.split(" ");
	//console.log("class_list_ar:",class_list_ar);

// checking for col_left,col_right,col_middle		
	for (i_1=0;i_1<class_list_ar.length;i_1++)
	{
		if (class_list_ar[i_1]=='col_left')
			{
			return 'col_left';
			break;
			}
			
		if (class_list_ar[i_1]=='col_middle')
			{
			return 'col_middle';
			break;
			}
			
		if (class_list_ar[i_1]=='col_right')
			{
			return 'col_right';
			break;
			}
	}
}

//var a_3= class_list_func("div_10");
//console.log("class_list_func result:",a_3)
</script>

<script>
function class_list_func_2(div_id)
{
// getting class list
	var a_1 = $("#"+div_id).prop('class');
	//console.log("div_1 class:",a_1);
	//console.log("a_1 length:",a_1.length);

// moving list to array
	var class_list_ar = [];
	class_list_ar = a_1.split(" ");
	console.log("class_list_ar:",class_list_ar);

// checking for col_l,col_r,col_middle		
	for (i_1=0;i_1<class_list_ar.length;i_1++)
	{
		if (class_list_ar[i_1]=='col_m')
		{
			return 'col_m';
			break;
		}
			
		if (class_list_ar[i_1]=='col_m_2')
		{
			return 'col_m_2';
			break;
		}
	}
}

//var a_3= class_list_func_2("div_10");
//console.log("class_list_func result:",a_3)
</script>

<script>
function set_height(column,a_0)
{
	var ar = [];
	var a_2 = 0;
		
	$("."+column).each (function(index){
		ar.push($(this).prop('id'));
	});
	
	//console.log('ar:',ar);
	for (i=0;i<ar.length;i++)
	{
		if (a_2 == 0)
		{
		$('#'+ar[i]).css("top","2vh");
		//console.log("ar_0 position top: ",$('#'+ar[0]).position().top)
		a_2 = 1;
		continue;
		}
		
		var a_h = $( window ).height();
		var a_h_2 = 0.02*a_h;
		var a_6 = i-1;
		//console.log("a_h: ",a_h);
		//console.log("a_6: ",a_6);
		
		var a_3 = $('#'+ar[a_6]).position().top; 
			//a_3 = (a_3/a_h)*100;
			a_3 = Math.round(a_3*1000)/1000;		
		var a_4 = $('#'+ar[a_6]).outerHeight();
			//a_4 = (a_4/a_h)*100;
			a_4 = Math.round(a_4*1000)/1000;
		var a_5 = a_3+a_4+16;
			a_5 = Math.round(a_5*1000)/1000;
		//$('#'+ar[i]).css("top",a_5+"vh");
		$('#'+ar[i]).css("top",a_5);
		
		//console.log("a_3: ",a_3);
		//console.log("element "+a_6+" position from top:",a_3)
		//console.log("element "+a_6+" outer height:",a_4);
		//console.log("element "+i+" top:",a_5);
	}
	
}
</script>

<script>
function set_height_all()	
{
	set_height('col_left');
	set_height('col_middle');
	set_height('col_right');
}
</script>

<script>
var side_v = 0;

//defining array
	var click_ar = [];
	click_ar[0] = 0;
	//console.log("click_ar 0:", click_ar[0]);

//setting array values to 0
	for (v_3=1;v_3<15;v_3++)
	{
	click_ar[v_3] = 0;
	}
	//console.log("v:",v)
	console.log("click_ar_begin: ",click_ar);

//adding click function to imgs		
	for (v=1;v<15;v++)
	{
		$('#img_'+v).click({param1: v, param2:click_ar[v]},function(event)
		{	console.log("img number:",event.data.param1);
			console.log("click status:",event.data.param2);
			//console.log("hi from img_"+$(this).prop('id').slice(-1));
			var v_2 = event.data.param1; 		
			var click_ar_2 = click_ar[v_2]; 		
		//checking if any other pic was clicked	
			var another_pic_clicked = 0;
			
			for (i=1;i<15;i++)
			{
				if(click_ar[i]==1)
				{
					another_pic_clicked = i;
				}
			}
			       
			console.log("a_p_c:",another_pic_clicked);
			if(another_pic_clicked !== v_2 && another_pic_clicked !== 0 )//another pic clicked
			{
				console.log("apc clicked");
			/*
				console.log("else");
					var col_class = class_list_func("div_"+v_2);
				
				//left	
					if(col_class == 'col_left')
					{
						$('#div_'+v_2).animate({width:'25%'},1000);
						$('#div_'+v_2).animate({left:'5%'},1000);
					}
				//right	
					if(col_class == 'col_right')
					{
						$('#div_'+v_2).animate({width:'25%'},1000);
						$('#div_'+v_2).animate({right:'5%'},1000);
					}
				//middle	
					if(col_class == 'col_middle')
					{
						var result_2 = class_list_func_2('div_'+v_2);
						$('#div_'+v_2).animate({width:'30%'},1000);
						
						if (result_2 == 'col_m')
						{
						$('#div_'+v_2).css("right","");
						$('#div_'+v_2).animate({left:'35%'},1000);
						}
						else
						{
						$('#div_'+v_2).css("left","");
						$('#div_'+v_2).animate({right:'35%'},1000);
						$('#div_'+v_2).removeClass('col_m_2').addClass('col_m');
						}
					}	
					click_ar[v_2]=0;
			*/
			}
			if (another_pic_clicked == v_2 || another_pic_clicked == 0)//no other pic clicked
			{
			//first click			
				if (click_ar_2==0)
				{
				$("[id^=div_]").css("z-index","-1");
				$("#div_"+v_2).css("z-index","0");
				 
			
				//getting col class from class_list_func
					var col_class = class_list_func("div_"+v_2);
					console.log("col_class:", col_class);
					
				//designing according to col class				
				//left	
					if(col_class == 'col_left')
					{
					$('#div_'+v_2).animate({left:'0%'},1000);
					//$('#div_'+v_2).animate({top:'2vh'},1000);
					$('#div_'+v_2).animate({width:'100%'},1000);
					}
				//right	
					if(col_class == 'col_right')
					{
					$('#div_'+v_2).animate({right:'0%'},1000);
					//$('#div_'+v_2).animate({top:'2vh'},1000);
					$('#div_'+v_2).animate({width:'100%'},1000);
					} 
				//middle	
					if(col_class == 'col_middle')
					{
						if (side_v == 0)
						{
						$('#div_'+v_2).removeClass('col_m_2');
						$('#div_'+v_2).addClass('col_m');
						$('#div_'+v_2).css("right","").css("left","35%");
						$('#div_'+v_2).animate({left:'0%'},1000);
						//$('#div_'+v_2).animate({top:'2vh'},1000);
						side_v = 1;
						}
						else
						{
						
						$('#div_'+v_2).removeClass('col_m');
						$('#div_'+v_2).addClass('col_m_2');
						
						//ADDED LINE
						$('#div_'+v_2).css("left","").css("right","35%");
						
						$('#div_'+v_2).animate({right:'0%'},1000);
						//$('#div_'+v_2).animate({top:'2vh'},1000);
						side_v = 0;
						}
					$('#div_'+v_2).animate({width:'100%'},1000);
					}
					
					click_ar[v_2]=1;
					console.log("click_ar:",click_ar);
					console.log("side_v:",side_v);
				} 
			//second click
				else
				{
					console.log("else");
					var col_class = class_list_func("div_"+v_2);
				
				//left	
					if(col_class == 'col_left')
					{
						$('#div_'+v_2).animate({width:'25%'},1000);
						$('#div_'+v_2).animate({left:'5%'},1000);
					}
				//right	
					if(col_class == 'col_right')
					{
						$('#div_'+v_2).animate({width:'25%'},1000);
						$('#div_'+v_2).animate({right:'5%'},1000);
					}
				//middle	
					if(col_class == 'col_middle')
					{
						var result_2 = class_list_func_2('div_'+v_2);
						$('#div_'+v_2).animate({width:'30%'},1000);
						
						if (result_2 == 'col_m')
						{
							$('#div_'+v_2).css("right","");
							$('#div_'+v_2).animate({left:'35%'},1000);
						}
						else
						{
							$('#div_'+v_2).animate({right:'35%'},1000);
						}
					}	
					click_ar[v_2]=0;
				}
			}
		});
	}
set_height_all();
</script>

<script>
function a_11_f() 
{
	var a_11 = $(document).outerWidth()/2-60;
	//console.log(a_11);
	var a_12 = $(window).outerHeight()/2-60;
	$('.loader').css("left",a_11);
	$('.loader').css("top",a_12);
	
	//LEFT FOR BODY
	var document_outer_width = $(document).outerWidth();
	var body_outer_width = $(document.body).outerWidth();
	var left_body_value = document_outer_width/2 - body_outer_width/2;
	$(document.body).css("left",left_body_value);
	
	//TOP FOR MENU DIV
	var header_outer_height = $('#div_top_buttons').outerHeight();
	var top_div_value = header_outer_height;
	$('#menu_div').css("top",top_div_value);

}
</script>

<script>
$(window).on('load',function(){
//ending loader	
	
	$('#menu_div').animate({opacity:1},1000);
	$('.loader').css ("display","none");

//setting height	
	
	set_height('col_left');
	set_height('col_middle');
	set_height('col_right');
});
</script>

<script>
$( window ).resize(function() 
{
	a_11_f();
	
	var check_click_ar = 0;
		for (f=0;f<click_ar.length;f++)
		{
			if(click_ar[f] == 1)
			{
				check_click_ar += 1; 
			}
		}

	if (check_click_ar == 0)
	{
		set_height('col_left');
		set_height('col_middle');
		set_height('col_right');
	}
});
</script>

<script>
$(function() {
    // variables ftw!
    var win = $(window);

    // fire it once on document.ready
    resizeHandler();

    // Fires on every resize   
    win.resize(resizeHandler);
	
	console.log("click_ar from resize func:",click_ar);
	
    function resizeHandler() {
        console.log("click_ar from resize func:",click_ar);
		
		var check_click_ar = 0;
		for (f=0;f<click_ar.length;f++)
		{
			if(click_ar[f] == 1)
			{
				check_click_ar += 1; 
			}
		}
		if (win.width() >= 768 && check_click_ar == 0) 
		{
            set_height_all();
        }
    }
});

</script>
</body>
</html>