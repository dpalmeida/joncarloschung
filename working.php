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
	<?php
		if (isset($_POST["submit"])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$human = intval($_POST['human']);
			$from = 'joncarloschung.com Contact Form'; 
			$to = 'dylan.p.almeida@gmail.com'; 
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
			<div class="row" id="contact-content">
				<div class="offset-md-4 col-4 contact-info">
					<span id="phone">phone: (267)-885-8652</span><br/>
					<span id="email">email: <a href="mailto:joncchung@gmail.com">joncchung@gmail.com</a></span><br/>
					<span id="linkedin">linkedin: <a href="https://www.linkedin.com/in/jonathan-chung-3845a8114/">jonathan-chung-3845a8114/</a></span><br/>
					<span id="twitter">twitter: <a href="https://twitter.com/JonCarlosIII">@JonCarlosIII</a></span><br/>
				</div>
				<div class="offset-md-4 col-4 ">
					<form class="form-horizontal" role="form" method="post" action="working.php">
						<div class="form-group">
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<input type="text" class="form-control" id="human" name="human" placeholder="Anti-bot: 2 + 3 = ?">
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>	
							</div>
						</div>
					</form> 
				</div>
			</div>
		</section>
	</div>
</body>
</html>
