<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/carousel.css">
<title>AlexLiCH</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="js/slides.js"></script>

	<script>
		/*
			Get the curent slide
		*/
		function currentSlide( current ) {
			$(".current_slide").text(current + " of " + $("#slides").slides("status","total") );
		}
		
		$(function(){
			/*
				Initialize SlidesJS
			*/
			$("#slides").slides({
				navigateEnd: function( current ) {
					currentSlide( current );
				},
				loaded: function(){
					currentSlide( 1 );
				}
			});
			
			/*
				Play/stop button
			*/
			$(".controls").click(function(e) {
				e.preventDefault();
				
				// Example status method usage
				var slidesStatus = $("#slides").slides("status","state");
				
				if (!slidesStatus || slidesStatus === "stopped") {

					// Example play method usage
					$("#slides").slides("play");

					// Change text
					$(this).text("Stop");
				} else {
					
					// Example stop method usage
					$("#slides").slides("stop");
					
					// Change text
					$(this).text("Play");
				}
			});
		});
	</script>
</head>
<body>
<suture>
   <heder>
    <p >AlexLiCH</p>
    </heder>
    <content>
       <nav>
          <a href="index.php">Главная страница</a>
          <a href="2.html">Резюме</a>
          <a href="3.html">Портфолио</a>
          <a href="4.html">Фотоальбом</a>
          <a href="4.html">Игры</a>
          <a href="4.html">Контакты</a> 
       </nav>
        <div id="container">
		
		<!-- start SlidesJS slideshow -->
		<div id="slides">
				<img src="carousel/IMG_0502.JPG" width="100%" height="120%" alt="Slide 1">
				
				<img src="carousel/P1000478.JPG" width="520" height="300" alt="Slide 2">

				<img src="http://slidesjs.com/examples/standard/img/slide-3.jpg" width="520" height="300" alt="Slide 3">

				<img src="http://slidesjs.com/examples/standard/img/slide-4.jpg" width="520" height="300" alt="Slide 4">

				<img src="http://slidesjs.com/examples/standard/img/slide-5.jpg" width="520" height="300" alt="Slide 5">

				<img src="http://slidesjs.com/examples/standard/img/slide-6.jpg" width="520" height="300" alt="Slide 6">

				<img src="http://slidesjs.com/examples/standard/img/slide-7.jpg" width="520" height="300" alt="Slide 7">
		</div>
		<!-- end SlidesJS  slideshow -->
	</div>
    </content>
</suture>
</body>
</html>