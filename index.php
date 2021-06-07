<!Doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<title> FrontEnd Developer/Akrosh Tiwari</title>
</head>

<body>
	<!-- screem scroll indicater -->
	<div class="scroll-progress-container">
		<div class="scroll-progress-bar" id="myBar"></div>
	</div>
	<!-- End screem scroll indicater -->
	<!--Header-->
	<section id="header" class="header">
		<nav class="navbar" id="navbar">
			<a href="#hero" class="nav-logo"><span>आ</span>क्रोश</a>
				<ul class="nav-menu">
					<li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
					<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
				</ul>
			<div class="hamburger">
				<span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
			</div>
		</nav>
	</section>
	<!--End Header-->

	<!--Hero section-->
	<section id="hero">
		<div class="hero container">
			<div class="hero-text">
				<h1>Hi!,<span></span></h1>
				<h1>I'am Akrosh<span></span></h1>
				<h1>Front-End Developer<span> </span></h1>
			</div>
			<div class="scroll-down"></div>
			<canvas id="canvas"></canvas>
		</div>
	</section>
	<!--end Hero Section-->

	<!--Service section-->
	<section id="services">
		<div class="services container">
			<div class="service-top">
				<h1 class="section-title">Serv<span>i</span>ces</h1>
				<p>
					Services what I offered
				</p>
			</div>
			<div class="service-bottom js-scroll slide-left">
				<div class="service-item">
					<div class="icon">
						<i class="fas fa-pencil-ruler fa-5x" style="color:#0e76a8;"></i>
					</div>
					<h2>Designer</h2>
					<p>
						I value simple content structure, clean design patterns, and thoughtful interactions.
					</p> <br>
					<h2>I enjoy designing:</h2>
					<p>UI, UX, Apps, Logos</p><br>

					<h2> Design Tools:</h2>

					<p>XD, Photshop, figma</p>
				</div>
				<div class="service-item">
					<div class="icon">
						<i class="fa fa-code fa-5x" aria-hidden="true" style="font-size:55px;color:#0e76a8;"></i>
					</div>
					<h2>Front-End Developer</h2>
					<p>
						Responsive websites built for an optimal user experience that aachives your business goals.
					</p>
					<h2>Langauges I speak:</h2>
					<p>HTMl, CSS, JavaScript, ReactJS, PHP, Laravel</p>
					<h2>Dev Tools</h2>
					<p>Bootstrap, Github, Gitlab, VScode, Terminal</p>
				</div>
				<div class="service-item">
					<div class="icon">
						<i class="fab fa-wordpress fa-5x" aria-hidden="true" style="color:#0e76a8;"></i>
					</div>
					<h2>WordPress Websites </h2>
					<p>
						Updating and maintaining your wordpress websites and custon wordpress theme development
						as well as WordPress CMS(Content Management system)
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--End service section-->
	<!--Project Section-->
	<section id="projects">
		<div class="projects-header">
			<h1 class="section-title"> Pro<span>j</span>ects</h1>
			<p>Here are some projects I've worked on recently.</p>
		</div>
		<div class="all-projects">
			<section class="project-container">
				<div class="project-element js-scroll slide-left">
					<img src="./css/img/project-portfolio.JPG" alt="project-image" loading="lazy">
				</div>
				<div class="project-caption">
					<h2>MY portfolio.</h2>
					<P>In this website used Html, CSS, Javascript and media queries. It is a complete responsive,
						user-friendly and cross browser
						compatibility supports.</P>
					<div class="see-more">
						<a href="#" class="btn">source code on git</a>
					</div>
				</div>
			</section>
			<section class="project-container">
				<div class="project-element js-scroll slide-right">
					<img src="./css/img/project1food.JPG" alt="project-image" loading="lazy">
				</div>
				<div class="project-caption">
					<h2>Dish searching App.</h2>
					<p>In this website used Reactjs and API. It is a complete responsive, user-friendly and cross
						browser
						compatibility supports.
					</p>
					<div class="see-more">
						<a href="#" class="btn">source code on git</a>
					</div>
					
				</div>
			</section>
		</div>
	</section>
	<!--End project Section-->
	<!--About Section-->
	<section id="about" class="about container">
		<div class="about container">
			<div class="col-right">
				<h1 class="section-title">About<span>me</span></h1>
				<div class=" js-scroll slide-left">
				<div class="about-img">
					<img src="./css/img/hero-bg2.png" height="100px" width="100px" alt="about profile" />
				</div>
				<p>
					Hi, i am a <strong>Akrosh Tiwari</strong>. I study Bachelor in Computer Science and information
					technology(BSc.CSIT) at NIST College
					(Tribhuvan University Affiliated).
					I am a highly self-motivated Web Developer with 2 years of commercial experience who spends most of
					his time building applications. I create successful
					websites that are fast, easy to use, and built with best practices software, and keeping myself
					up-to-date with the latest technologies.<br>
					If you think I am eligible to join your team to finish up your project, please reach out to me
					through any medium and I will reply back ASAP.
					Do you have any interesting ideas on your mind? Do you need someone to collaborate with you in
					bringing ideas into life? Hit me up!!
				</p>
				<a href="./css/file/akrosh-CV.pdf" target="_blank" class="button">Download Resume</a>
			</div>	
			</div>
		</div>
	</section>
	<!--End about Section-->
	<!-- start skil section -->
	<section id="skills">
		<div class="skills">
			<h1 class="section-title">Skill<span>'S</span></h1>
			<div class=" js-scroll slide-left">
			<div class="progress-bar-container">
				<h2>HTML</h2>
				<div class="progress-bar ">
					<span class="percentage html"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>CSS</h2>
				<div class="progress-bar">
					<span class="percentage css"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>JavaScript</h2>
				<div class="progress-bar">
					<span class="percentage javascript"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>ReactJs</h2>
				<div class="progress-bar">
					<span class="percentage reactjs"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>Bootstrap</h2>
				<div class="progress-bar">
					<span class="percentage bootstrap"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>Git</h2>
				<div class="progress-bar">
					<span class="percentage git"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>WordPress</h2>
				<div class="progress-bar">
					<span class="percentage wordpress"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>PHP</h2>
				<div class="progress-bar">
					<span class="percentage php"></span>
				</div>
			</div>
			<div class="progress-bar-container">
				<h2>Laravel</h2>
				<div class="progress-bar">
					<span class="percentage laravel"></span>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End skill section -->
	<!--Contact Section-->

	<section id="contact">
		<h1 class="section-title">Contact<span>Me</span></h1>
		<div class="wrapper js-scroll slide-left">
			<div class="contact-map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28280.085086665087!2d85.54102043392317!3d27.624187250874396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb08e1e0b24703%3A0xbfe3729cdad70132!2sDhulikhel!5e0!3m2!1sen!2snp!4v1620041239905!5m2!1sen!2snp"
					width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="contact-form">
				<div class="send-form">
					<form action="https://formsubmit.co/akroshtiwari03@gmail.com" method="post">
						<input type="hidden" name="_captcha" value="false">
						<input type="text" name="name" placeholder="Your name" required><br>
						<input type="email" name="email" placeholder="Email address" required><br>
						<br><textarea rows="5" name="message" placeholder="Write your message here" cols="30" required></textarea><br>
						<input type="hidden" name="_next" value="https://akrosh-portfolio.herokuapp.com/page/thankyou.php">
						<button type="submit">Send </button>
					</form>
				</div>
				<div class="contact-section">
					<h2>
						Direct Contact me:
					</h2>
					<p class="direct"><i class="far fa-envelope"></i>Email:metiwariakrosh@gmail.com</br><i
						class="fas fa-users"></i>Website:www.akroshtiwari.com.np<br>
						<i class="fas fa-phone"></i>Phone_No:+977-9861498184<br>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--End Contact Section-->
	<!--footer-->
	<section id="footer">
		<div class="up-angle">
			<a href="#hero"><i class="fas fa-angle-up" style="font-size:35px;color:#4267B2;"></i> </a>
		</div>
		<div class="footer container">
			<div class="nav-logo">
				<h1><span>A</span>krosh<span>T</span>iwari</h1>
			</div>
			<h2>Your Complete Web Solution</h2>
			<h3>connect with me on social media</h3>
			<div class="social-icon">
				<div class="social-item">
					<a href="https://www.facebook.com/akrosh.tiwari.98"><i class="fab fa-facebook-f"
							style="font-size:35px;color:#4267B2;"></i></a>
				</div>
				<div class="social-item">
					<a href="https://www.instagram.com/iam_akrosh_tiwari/"><i class="fab fa-instagram"
							style="font-size:35px;color:#8134AF;"></i></a>
				</div>
				<div class="social-item">
					<a href="https://twitter.com/AkroshTiwari2"><i class="fab fa-twitter"
							style="font-size:35px;color:#1DA1F2;"></i></a>
				</div>
				<div class="social-item">
					<a href="https://www.linkedin.com/in/akrosh-tiwari-9a1a42167/"><i class="fab fa-linkedin-in"
							style="font-size:35px;color:#0e76a8;"></i></a>
				</div>
			</div>
			<p> Copyright &#169; 2021 Akrosh Tiwari &#169;.All rights reserved</p>
		</div>
	</section>
	<!--End Footer-->
	<script src="./js/portfoliio-app.js"></script>
	<script src="https://smtpjs.com/v3/smtp.js"></script>
</body>
</html>