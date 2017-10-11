<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="./">Dylan Almeida</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="<?php if($mainpage == FALSE){echo "http://dylanalmeida.com/";}else{echo "#page-top";};?>"></a>
				</li>                    
				<li class="page-scroll">
					<a href="/docs/Almeida_Resume.pdf" class="resume-active">Resume</a>
				</li>
				<li class="page-scroll">
					<a href="<?php if($mainpage == FALSE){echo "http://dylanalmeida.com/";};?>#about">About</a>
				</li>
				<li class="page-scroll">
					<a href="<?php if($mainpage == FALSE){echo "http://dylanalmeida.com/";};?>#skills">Skills</a>
				</li>
				<li class="page-scroll">
					<a href="<?php if($mainpage == FALSE){echo "http://dylanalmeida.com/";};?>#portfolio">Portfolio</a>
				</li>
				<li class="page-scroll">
					<a href="<?php if($mainpage == FALSE){echo "http://dylanalmeida.com/";};?>#contact">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>