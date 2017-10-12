<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jon Chung</title>

	<?php include "./includes/headcss.php";?>
	<?php include "./includes/footjs.php";?>
</head>

<body id="page-top" class="index">
	<div class="main">
		<section id="home">
			<div id="home-container" class="offset-md-3 col-md-6">
				<div id="name"><span>JONATHAN CHUNG</span></div>
				<div class="row" id="sub-desc">
					<div id="desc-container">
						<img src="http://via.placeholder.com/125x125">
						<div class="col" id="desc">Hi, my name is Jon and I'm a game developer and programmer from PA with a B.S. in Emerging Media: Computation. I program in C++, C#, Java, and Python and have made games in Unreal Engine and Unity. In my free time, I enjoy content creation and playing DnD.</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio">
			<div class="offset-md-1 col-md-10 col-sm-12">
				<a href="#"><button class="btn btn-primary" type="button" aria-haspopup="true" id="resumebtn">RESUME</button></a>
				<div class="fittobox">
					<iframe src="https://player.vimeo.com/video/231487647" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div><i class="fa fa-download fa-4x" aria-hidden="true"></i></div>
			</div>
		</section>	
		<section id="contact">
			
		</section>
	</div>
</body>
	<script>
		$(".main").onepage_scroll({
		   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
		   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
											// "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
		   animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
		   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
		   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
		   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
		   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
		   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
		   keyboard: true,                  // You can activate the keyboard controls
		   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
											// you want the responsive fallback to be triggered. For example, set this to 600 and whenever
											// the browser's width is less than 600, the fallback will kick in.
		   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
		});
	</script>
</html>
