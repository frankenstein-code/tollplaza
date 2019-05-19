
<!DOCTYPE html>
<html>
	<head>
		<title>Toll Plaza</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<script src="css/jquery.min.js"></script>
		<script src="css/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$(function() {
				$('#slider').carouFredSel({
					width: '100%',
					align: false,
					items: 3,
					items: {
						width: $('#wrapper').width() * 0.15,
						height: 500,
						visible: 1,
						minimum: 1
					},
					scroll: {
						items: 1,
						timeoutDuration : 5000,
						onBefore: function(data) {
			
							//	find current and next slide
							var currentSlide = $('.slide.active', this),
								nextSlide = data.items.visible,
								_width = $('#wrapper').width();
			
							//	resize currentslide to small version
							currentSlide.stop().animate({
								width: _width * 0.15
							});		
							currentSlide.removeClass( 'active' );
			
							//	hide current block
							data.items.old.add( data.items.visible ).find( '.slide-block' ).stop().fadeOut();					
			
							//	animate clicked slide to large size
							nextSlide.addClass( 'active' );
							nextSlide.stop().animate({
								width: _width * 0.7
							});						
						},
						onAfter: function(data) {
							//	show active slide block
							data.items.visible.last().find( '.slide-block' ).stop().fadeIn();
						}
					},
					onCreate: function(data){
			
						//	clone images for better sliding and insert them dynamacly in slider
						var newitems = $('.slide',this).clone( true ),
							_width = $('#wrapper').width();

						$(this).trigger( 'insertItem', [newitems, newitems.length, false] );
			
						//	show images 
						$('.slide', this).fadeIn();
						$('.slide:first-child', this).addClass( 'active' );
						$('.slide', this).width( _width * 0.15 );
			
						//	enlarge first slide
						$('.slide:first-child', this).animate({
							width: _width * 0.7
						});
			
						//	show first title block and hide the rest
						$(this).find( '.slide-block' ).hide();
						$(this).find( '.slide.active .slide-block' ).stop().fadeIn();
					}
				});
			
				//	Handle click events
				$('#slider').children().click(function() {
					$('#slider').trigger( 'slideTo', [this] );
				});
			
				//	Enable code below if you want to support browser resizing
				$(window).resize(function(){
			
					var slider = $('#slider'),
						_width = $('#wrapper').width();
			
					//	show images
					slider.find( '.slide' ).width( _width * 0.15 );
			
					//	enlarge first slide
					slider.find( '.slide.active' ).width( _width * 0.7 );
			
					//	update item width config
					slider.trigger( 'configuration', ['items.width', _width * 0.15] );
				});

			});
		</script>
		<style type="text/css">
			html, body {
				height: 100%;
				padding: 0;
				margin: 0;
			}
			body {
				background: #f9f9f3;
			}
			body * {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #222;
				line-height: 20px;
			}

			#wrapper {
				height: 100%;
				width: 100%;
				min-height: 650px;
				min-width: 900px;
				padding-top: 0px;
			}

			#slider {
				margin: 10px 0 0 0;
				height: 500px;
				overflow: hidden;
				background: url(img/ajax-loader.gif) center center no-repeat;
			}
			
			#slider .slide {
				position: relative;
				display: none;
				height: 500px;
				float: left;
				background-position: center right;
				cursor: pointer;
				border-left: 1px solid #fff;
			}
			
			#slider .slide:first-child {
				border: none;
			}
			
			#slider .slide.active {
				cursor: default;
			}
			
			#slider .slide-block {
				position: absolute;
				left: 40px;
				bottom: 75px;
				display: inline-block;
				width: 435px;
				background-color: #fff;
				background-color: rgba(255,255,255, 0.8);	
				padding: 20px;
				font-size: 14px;
				color: #134B94;
				border: 1px solid #fff;
				overflow: hidden;
				border-radius: 4px;
			}
			
			#slider .slide-block h4 {
				font-size: 36px;
				font-weight: bold;
				margin: 0 0 10px 0;
				line-height: 1;
			}
			#slider .slide-block p {
				margin: 0;
			}

			#donate-spacer {
				height: 0;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
				color: #999;
			}
			#donate form {
				width: 100px;
			}
		</style>
	</head>
	<body>
	<body>
			<!-- <div class="container-fluid">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="">Feedback</a></li>
					<li><a href="">Login</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php">Register</a></li>
				</ul>
			</div> -->


	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Toll Plaza</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
				
          <li><a href="index.php">Home</a></li>
          <li><a href="maps.php">On Maps</a></li>
          <li><a href="glance.php">At a Glance</a></li>
          <li><a href="">Payment</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="about.php">About Us</a></li>
		  <li><a href="feedback.php">Feedback</a></li>
			<li><a href="login.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  		
<!-- <marquee>*Make your toll payment easier and faster*</marquee> -->
		<div id="wrapper">
			<div id="slider">
                <div class="slide" style="background-image: url(img/1.jpg);width: 100%;">
				</div>
		
				<div class="slide" style="background-image: url(img/2.jpg); width: 100%;">
				</div>

				<div class="slide" style="background-image: url(img/6.jpg); width: 100%;">
				</div>

				<div class="slide" style="background-image: url(img/10.jpg);  width: 100%;">
				</div>
		
			</div>
			<marquee><h1><b>• Year wise Toll Colelction since inception As per available data for all PF projects  <br/>• Arriving user fee on ODC OWC on National Highways</b></h1></marquee>
		</div>

		<footer class="footer-distributed">
			<div class="footer-left">
		<div class="footer-icons">
					<a href="links/Facebook.html"><i class="fa fa-facebook"></i></a>
					<a href="links/Twitter.html"><i class="fa fa-twitter"></i></a>
					<a href="links/LinkedIn.html"><i class="fa fa-linkedin"></i></a>
					<a href="links/Instagram.html"><i class="fa fa-instagram"></i></a>
					<a href="links/Gmail.html"><i class="fa fa-google"></i></a>
				</div>
				</div>

				<div class="footer-center">
				</div>

				<div class="footer-right">
					<h4 style="color: white">Conceptualized and supported by NHAI, Developed and Designed by Comvision India</h4>
				</div>
			</footer>

	</body>
</html>