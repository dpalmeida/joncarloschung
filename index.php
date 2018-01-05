<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jon Chung</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- AOS CSS -->
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<!-- Onepage CSS -->
	<!--<link href="../vendor/onepage-scroll-master/onepage-scroll.css" rel="stylesheet">-->

	<!-- Theme CSS -->
	<link href="../css/custom-css.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	
	<!-- JavaScript -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>	

	<!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<!-- Plugins -->
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<!--<script src="../vendor/onepage-scroll-master/jquery.onepage-scroll.js"></script>-->
	
	<!-- Theme JavaScript -->
	<script src="../js/custom.js"></script>

	<?php
		if (isset($_POST["submit"])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$human = intval($_POST['human']);
			$from = 'joncarloschung.com Contact Form'; 
			$to = 'joncchung@gmail.com'; 
			$subject = 'Message from: '.$name;
			
			$body = "\n From: $name\n Email: $email\n Message:\n $message";
	 
			// Check if name has been entered
			if (!$_POST['name']) {
				$errName = 'Please enter your name';
			}
			
			// Check if email has been entered and is valid
			if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errEmail = 'Please enter a valid email address';
			}
			
			//Check if message has been entered
			if (!$_POST['message']) {
				$errMessage = 'Please enter your message';
			}
			//Check if simple anti-bot test is correct
			if ($human !== 5) {
				$errHuman = 'Your anti-spam is incorrect';
			}
	 
	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
		}
	?>
</head>

<body id="page-top" class="index">
	<div class="main">
		<section id="home">
			<?php echo $result; ?>
			<div id="home-container">
				<div id="name"><img src="./img/name.png"></img></div>
				<div class="row" id="sub-desc">
						<div class="col-md-3 col-sm-12"><img id="home-img" src="img/home_img.jpg"></div>
						<div class="col-md-9" id="desc">Hi, my name is Jon and I'm a game developer and programmer from PA with a B.S. in Emerging Media: Computation. I program in C++, C#, Java, and Python and have made games in Unreal Engine and Unity. In my free time, I enjoy content creation and playing D&amp;D.</div>
				</div>
				<div class="row" id="home-nav">
					<div id="home-nav-container" class="page-scroll">
						<a href="#portfolio" id="a-portfolio"><button class="btn btn-primary home-nav-btn" type="button" aria-haspopup="true">PORTFOLIO</button></a>
						<a href="#contact" id="a-contact"><button class="btn btn-primary home-nav-btn" type="button" aria-haspopup="true">CONTACT</button></a>
					</div>
				</div>
				<div class="page-scroll" id="nav-arrow">
					<a href="#portfolio"><img src="./img/arrows.png"></a>
				</div>
			</div>
		</section>
		<section id="portfolio">
			<div class="offset-md-3 col-md-6 col-sm-12" id="portfolio-container">
				<div id="resumebtn-div">
					<a href="./docs/resume.pdf"><button class="btn btn-primary custom-btn" type="button" aria-haspopup="true" id="resumebtn">RESUME</button></a>
				</div>
				<div>
					<img src="./img/reel-bg.png" style="Width:100%">
				</div>
<!--				<div class="fittobox">
					<iframe width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>-->
				<div class="row dl-links">
					<div class="col-md-6 col-sm-12">
						<a href="/game/LabyrinthWIN.zip"><div class="dl-icon"><i class="fa fa-download fa-3x" aria-hidden="true"></i></div></a>
						<div class="dl-title">LABYRINTH</div>
						<div class="dl-desc">BLANK<span class="dl-programs"> - UNREAL &amp; MAYA 3D</span></div>
					</div>
					<div class="col-md-6 col-sm-12">
						<a href="/game/SuperCellphoneSim64.zip"><div class="dl-icon"><i class="fa fa-download fa-3x" aria-hidden="true"></i></div></a>
						<div class="dl-title">SUPER CELLPHONE SIMULATOR 64</div>
						<div class="dl-desc">LEAD PROGRAMMER<span class="dl-programs"> - UNITY</span></div>
					</div>
				</div>				
				<div class="row dl-links">
					<div class="col-md-6 col-sm-12">
						<a href="/game/Rogue's Quest Web/Rogue's Quest online.html" target="_blank"><div class="dl-icon"><i class="fa fa-download fa-3x" aria-hidden="true"></i></div></a>
						<div class="dl-title">ROGUE'S QUEST</div>
						<div class="dl-desc">LEAD PROGRAMMER<span class="dl-programs"> - UNREAL &amp; MAYA 3D</span></div>
					</div>
				</div>
			</div>
		</section>	
		<section id="contact">
			<div id="contact-container">
				<div class="row" id="contact-content">
					<div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12 contact-info">
						<span id="phone">phone: (267)-885-8652</span><br/>
						<span id="email">email: <a href="mailto:joncchung@gmail.com">joncchung@gmail.com</a></span><br/>
						<span id="linkedin">linkedin: <a href="https://www.linkedin.com/in/jonathan-chung-3845a8114/">jonathan-chung-3845a8114/</a></span><br/>
						<span id="twitter">twitter: @<a href="https://twitter.com/JonCarlosIII">JonCarlosIII</a></span><br/>
					</div>
				</div>
				<div class="row" id="contact-form">
					<div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12">
						<form class="form-horizontal" role="form" method="post" action="working.php">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="NAME" value="<?php echo htmlspecialchars($_POST['name']); ?>">
									<?php echo "<p class='text-danger'>$errName</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" value="<?php echo htmlspecialchars($_POST['email']); ?>">
									<?php echo "<p class='text-danger'>$errEmail</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="form-control" rows="4" name="message" placeholder="MESSAGE"><?php echo htmlspecialchars($_POST['message']);?></textarea>
									<?php echo "<p class='text-danger'>$errMessage</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="human" name="human" placeholder="Anti-bot: 2 + 3 = ?">
									<?php echo "<p class='text-danger'>$errHuman</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									 <input class="btn btn-primary custom-btn" id="submit" type="submit" value></input>
								</div>
							</div>
						</form> 
					</div>
				</div>
			</div>
		</section>
		<footer class="text-center">
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-12">
							&copy; Jon Chung <?php echo date("Y"); ?>
							<br/>
							<span class="design-credit">
								Designed by <a href="http://www.gnechevarria.com" target="_blank" class="design-credit">Gina Echevarria</a>
								<br/>
								Web Development by <a href="http://www.dylanalmeida.com" target="_blank" class="design-credit">Dylan Almeida</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- Easing JavaScript -->
	<script src="../js/ease.js"></script>
</body>
</html>
