<!DOCTYPE html>
<!-- saved from url=(0075)http://wireframes.php-dev.in/training/v1.2/php/assignment/add_category.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">



<!--<script src="js/jquery.bxslider.min.js" type="text/javascript"></script> -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>


<link rel="shortcut icon" href="http://wireframes.php-dev.in/training/v1.2/php/assignment/favicon.ico">
<title>Vital Partners Leading Dating and Introduction Agency in Sydney &amp; Canberra</title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all">
<!--<link href="css/small-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/medium-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/high-resolution.css" rel="stylesheet" type="text/css" media="all">-->

<!-- jQuery library (served from Google) -->
<script src="js/jquery.min.js.download"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js.download"></script>
<!--<script src="js/script.js.download" type="text/javascript"></script> -->
<!--<script type="text/javascript" src="js/jquery.js.download"></script>	-->

<!-- bxSlider CSS file -->
<link href="css/jquery.bxslider.css" rel="stylesheet">
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">



</head>

<body>
<!--wrapper-starts-->
<div id="wrapper"> 

	<script type="text/javascript">
	$(document).ready(function(){
		$('.select').each(function(){
		  var title = $(this).attr('title');
		  if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
		  $(this).css({'z-index':10,'opacity':0,'-khtml-appearance':'none'}).after('<span class="select">' + title + '</span>').change(function(){
			val = $('option:selected',this).text();
			$(this).next().text(val);
		  })
		});
	});
</script>

  
 <!--header-starts-->
  <header class="clearfix">

    <div class="container"><!--container Start-->

		<div class="Logo_Cont left"><!--Logo_Cont Start-->
                    	
           <a href="http://wireframes.php-dev.in/training/v1.2/php/assignment/index.html"><img src="./images/logo.png" alt=""></a>
        
        </div><!--Logo_Cont End-->
		
		<div class="Home_Cont_Right right"><!--Home_Cont_Right Start-->
                    	
            <div class="Home_Cont_Right_Top left"><!--Home_Cont_Right_Top Start-->
                 
				 <div class="Top_Search1 left">Call Us Today! (02) 9017 8413</div>
				 <div class="Top_Search2 right"><input id="tags1" name="" type="text" onclick="this.value=&#39;&#39;;" onblur="validate_field(&#39;phone&#39;);" value="Type desired Job Location" data-cip-id="tags1"></div>
           
        	</div><!--Home_Cont_Right_Top End-->

			<div class="Home_Cont_Right_Bottom left"><!--Home_Cont_Right_Bottom Start-->
				<div class="toggle_menu"><a href="javascript:void(0)">Menu</a></div>
                 <div id="topMenu">
                 	<ul>
                 		<li><a href="#">Home</a></li>
                 		<li><a href="#">Dating Blog</a></li>
                 		<li><a href="#">Who We Help</a></li>
                 		<li><a href="#">Why Vital</a></li>
                 		<li><a href="#">Reviews</a></li>
                 		<li><a href="#">Contact Us</a></li>
                 	</ul>
                 </div>
           
        	</div><!--Home_Cont_Right_Bottom End-->
        
        </div><!--Home_Cont_Right End-->

	</div><!--container End-->

  </header>