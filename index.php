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
	<div class="container">
		<div class="notepad">
			<div class="suture">
				<div class="head">
					<p >AlexLiCH</p>
				</div>

				<div class="toilet_paper">
					<nav>
					  <a href="index.php">Главная страница</a>
					  <a href="2.html">Резюме</a>
					  <a href="3.html">Портфолио</a>
					  <a href="4.html">Фотоальбом</a>
					  <a href="4.html">Игры</a>
					  <a href="4.html">Контакты</a>
					</nav>
					<div class="main">
						<div class="content1">
						 <p class="content">Content1</p>
					 </div>
						<div class="content2">
							<p class="content">Content2</p>
						</div>
						<div class="content3">
							<p class="content">Content3</p>
						</div>
						<div class="content4">
							<p class="content">Content4</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
