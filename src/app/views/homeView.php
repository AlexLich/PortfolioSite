<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="src/assets/js/slides.js"></script>
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
		});
	</script>
<div class="content1">
    <div id="slides">
        <img src="src/assets/carousel/IMG_0502.JPG" height="300" alt="Slide 1">
        <img src="src/assets/carousel/P1000478.JPG" width="520" height="300" alt="Slide 2">
        <img src="http://slidesjs.com/examples/standard/img/slide-3.jpg" width="520" height="300" alt="Slide 3">
        <img src="http://slidesjs.com/examples/standard/img/slide-4.jpg" width="520" height="300" alt="Slide 4">
        <img src="http://slidesjs.com/examples/standard/img/slide-5.jpg" width="520" height="300" alt="Slide 5">
        <img src="http://slidesjs.com/examples/standard/img/slide-6.jpg" width="520" height="300" alt="Slide 6">
        <img src="http://slidesjs.com/examples/standard/img/slide-7.jpg" width="520" height="300" alt="Slide 7">
        </div>
        </div>
		    <div class="content2">
                 <!-- Получение из бд -->
                 
                 <!-- Получение из бд -->               
		    </div>	
                <div id="content3">
                	 <p>Последние записи</p>
                </div>
    <div class="content4">
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    	<p class="content">Content4</p>
    </div>