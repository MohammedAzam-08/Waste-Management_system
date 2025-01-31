<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Wastage Management System</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="zerogrid">
		<div class="wrap-header">
			<div class="logo t-center"><a href="index.php"><img src="images/logo.jpg"/></a></div>	
			<div id='cssmenu' class="align-center">
				<ul>
				   <li class="active"><a href='index'><span>Home</span></a></li>
                                   <li><a href='admin'><span>Admin</span></a></li>
				   <li class="has-sub"><a href=''><span>Municipal</span></a>
                                       <ul>
                                           <li><a href='agent'><span>Agent</span></a></li>
                                           <li><a href='cleaner'><span>Cleaner</span></a></li></ul>
                                   </li>
				   <li class='last'><a href='user'><span>User</span></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</header>

<section id="container">
	<div class="wrap-container">
		
		
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">Municipal Agent Login</h2>
					<div class="row">
						<div class="col-1-12">
                                                    <form name="form1" id="ff" method="post" action="agentlogin">
													<label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																Username:
															</div>
														</div>
														<div class="col-1-1">
															<div class="wrap-col">
																<input type="text" name="username" id="username" placeholder="Enter Username" required="required" />
															</div>
														</div>
													</label>
                                                        <label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																Password:
															</div>
														</div>
														<div class="col-1-1">
															<div class="wrap-col">
																<input type="password" name="password" id="password" placeholder="Enter Password" required="required" />
															</div>
														</div>
													</label>
													
													<center><input class="sendButton" type="submit" name="login" value="LOGIN"></center>
												</form>
						</div>
				
					</div>
				</div>
			</div>
		</section>
	
	</div>
</section>
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Designed by <a href="">Waste Management System</a></p>
						</div>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>


</div>
</body></html>