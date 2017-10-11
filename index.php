<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dylan Almeida - Film Editor</title>

	<?php include "./includes/headcss.php";?>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
	<?php 
	$mainpage = TRUE;
	include "./includes/navbar.php";?>

    <!-- Header -->
    <header>
        <div class="container-fluid fullscreen parallax" style="background-image:url(./img/bkg-audrey.jpg);padding-bottom:0px;padding-top:0px">
		<div class="col-md-offset-4 col-md-4 col-xs-12">
		</div>
			<div class="col-lg-12 col-xs-12 intro-section">
				<div class="fs-txt-center">
					<div class="intro-text txt-center">
                        <span class="name">Dylan Almeida</span>
                        <span class="skills">Video and Audio Editor</span>
                    </div>
                </div>
				<div class="fs-img-center">
					<div class="intro-img-bkg">
						<img class="img-responsive header-img" src="img/film-reel.png">
					</div>
				</div>
			</div>
        </div>
    </header>

    <!-- About Section -->
    <section class="blue"  style="padding-top:0px">
		<a class="anchor" id="about"></a>
        <div class="container" style="width:100%">
            <div class="row">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1>About</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-8 col-lg-offset-2">
                    <center><b><p>I am a video and sound editor</p></b></center>
                </div> -->
				<div class="col-lg-12">
                    <center><p><b>There is nowhere I'd rather be</b> than sitting infront of a screen, armed with a wealth of raw footage, a script, and a creative direction. Shaping that raw input into a final product that both myself and the creator can be proud of is the most gratifying part of the job.</p></center>
                </div>
			</div>
            <div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
					<img class="about-img" style="max-width:360px;max-height:300px" src="./img/about-photo.jpg">
                    <!--<img class="about-img" src="http://via.placeholder.com/360x300">-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <p><b>Creative projects rarely go as planned.</b> Exposure is too high. A previously unseen boom entered the frame on an important shot. The director wants to rearrange the narrative order. Being presented with these obstacles have been the greatest learning experiences and shown me that I love the challenge of making the most of what is given to you and pushing myself to learn new workflows and styles to suit the occassion. </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <p><b>Editing is my strong gravitational force.</b> Nearly everything in my life ties back to it. Family gathering? Photo slideshow coming right up! New movie out? Let's see what new editing styles it uses! Something funny happened while gaming online? Better make a highlight reel to share! I am lucky enough to say that my career is also my passion and I'd love nothing more than to put it to good use.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="parallax" style="background-image:url(bkg-skills.png);padding-bottom:0px;padding-top:0px">
		<a class="anchor" id="skills"></a>
		<div class="container" style="width:100%">
            <div class="row">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1>
									Skills</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col col-md-6 col-sm-6 col-xs-12">
					<?php 
						$skilltitle = "Video Production";
						$entries = array(array("Premiere Pro",100),array("Photoshop",75),array("After Effects",50),array("Audacity",25),array("Pro Tools",25));
						include "./includes/skillbars.php";
					?>	
				</div>
				<div class="col col-md-6 col-sm-6 col-xs-12">
					<?php 
						$skilltitle = "Social Media";
						$entries = array(array("YouTube",100),array("Facebook",100),array("Reddit",100),array("Twitter",75),array("Tumblr",75));
						include "./includes/skillbars.php";
					?>	
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4 col-sm-4 col-xs-12">
					<?php 
						$skilltitle = "File Management";
						$entries = array(array("Google Drive",100),array("Dropbox",75),array("FTP",50),array("UNIX",25));
						include "./includes/skillbars.php";
					?>	
				</div>				
				<div class="col col-md-4 col-sm-4 col-xs-12">
					<?php 
						$skilltitle = "Coding";
						$entries = array(array("PHP",50),array("Python",40),array("HTML",35),array("CSS",25),array("Javascript",10));
						include "./includes/skillbars.php";
					?>	 
				</div>
                <div class="col col-md-4 col-sm-4 col-xs-12">
					<?php 
						$skilltitle = "Software";
						$entries = array(array("Google Docs",100),array("Microsoft Office",100),array("Trello",75),array("GitHub",25));
						include "./includes/skillbars.php";
					?>	
                </div>
			</div>
		</div>
    <br/>
<br/>
</section>
    <!-- Portfolio Grid Section -->
    <section class="blue" style="padding-bottom:0px;padding-top:0px">
		<a class="anchor" id="portfolio"></a>	
        <div class="container" style="width:100%">
            <div class="row">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1>Portfolio</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center portfolio-row">
				<div class="container portfolio-ovl">
					<img src="./img/video.jpg" class="image">
					<a href="./video"><div class="overlay">
						<div class="text">EDITING AND<br/>VIDEO PRODUCTION</div>
					</div></a>
				</div>
				<div class="container portfolio-ovl">
					<img src="./img/coding.jpg" class="image">
					<a><div class="overlay">
						<div class="text">WEB DEVELOPMENT<br/>(Under Construction)</div>
					</div></a>
				</div>
			</div>
		</div>
    </section>

    <!-- Contact Section -->
    <section class="red" style="padding-top:0px;padding-bottom:25px">
			<a class="anchor" id="contact"></a>	
        <div class="container" style="width:100%">
            <div class="row">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1>Contact</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<form>
						<address style="font-size:24px">
							Philadelphia, PA <br>
							<abbr title="Phone">
								P:</abbr>
							(215) 920-0661
						</address>
						</form>
					<form>
							<a href="mailto:dylan.p.almeida@gmail.com"  class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i></a>
							<a href="https://www.linkedin.com/in/dylan-almeida-68188073/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
						</ul>
					</form>
				</div>
			</div>
		</div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        &copy; Dylan Almeida <?php echo date("Y"); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

	<?php include "./includes/footjs.php";?>
</body>

</html>
