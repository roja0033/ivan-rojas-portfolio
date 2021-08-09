<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/meta.php'?>

  <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous">
<!-- CSS StyleSheet -->
        <link rel="stylesheet" href="css/style.css">


       
        <!--------------Glide Carousel------------->
	<link rel="stylesheet" href="css/plugins/glide/glide.core.min.css">
	<link rel="stylesheet" href="css/plugins/glide/glide.theme.min.css">
   
       
</head>

<header>
  <div class="container" id="top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="Logo IR"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link home-page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/resume.php">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</header>

<body>
  <!-- Intro -->
<div class="container">
  <div class="intro">
  <img class="portrait" src="img/ivan-picture.jpg" alt="Ivan Rojas portrait"><br>
		<h1> Ivan Rojas</h1><br>
		<h3 class="career">Industrial Designer</h3>
		<section class="header-p">
			<p class="intro-p"> Industrial designer and recently took a post-graduate course in Interactive Media Management at Algonquin College where I learned more about Ux Design, Web Design and Development. Knowledge and experience in packaging design, point of purchase, kitchen and furniture design.</p>

			<p class="intro-p"> Responsible in assigned tasks and always willing to work in a team, as well as good interpersonal skills, trustworthy, punctual and open to new challenges. Prepared to do tasks and jobs which help me improve my personal and professional skills. </p>
		</section>
</div>
</div>

<div class="container skills">
    <img class="icons icon1"src="img/illustrator.svg" alt="3dsmax Icon">
  <img class="icons icon2"src="img/photoshop.svg" alt=" Icon">
  <img class="icons icon3"src="img/indesign.svg" alt="3dsmax Icon">
  <img class="icons icon4"src="img/xd.svg" alt="3dsmax Icon">
  <img class="icons icon5"src="img/figma.svg" alt="3dsmax Icon">
  <img class="icons icon6"src="img/keyshot.svg" alt="3dsmax Icon">
  <img class="icons icon7"src="img/maya.svg" alt="3dsmax Icon">
  <img class="icons icon8"src="img/3dsmax.svg" alt="3dsmax Icon">
  <img class="icons icon9"src="img/rhinoceros.svg" alt="3dsmax Icon">
  <img class="icons icon10"src="img/invision.svg" alt="3dsmax Icon">
</div>

<!-- Services -->

<div class="container services"> 
  <h2 class="services-h"> My services </h2>
<div class="service1">
  <img class="design-icons" src="img/industrial.svg" alt="Industrial Design Icon">
  <h3 class="services-p"> Industrial Design</h3>
  <a class="services-btn1" href="php/portfolio.php"><button class="services-btn"> View More </button></a>
</div>
<div class="service2">
  <img class="design-icons" src="img/3d.svg" alt="3d Design Icon">
  <h3 class="services-p"> 3D Design</h3>
  <a class="services-btn1" href="php/portfolio.php"><button class="services-btn"> View More </button></a>
</div>
<div class="service3">
  <img class="design-icons"src="img/web.svg" alt="Web Design Icon">
  <h3 class="services-p"> Web Design</h3>
  <a class="services-btn1" href="php/portfolio.php"><button class="services-btn"> View More </button></a>
</div>
  </div>

<!-- Contact Me section

<div class="container contact-me">

<h4 class="contact-me-h"> Got something in mind?</h4>

<button class="contact-me-btn"> Contact Me!</button>
</div> -->

<button class="btn-top">
				<a href="#top">
					<i class="fas fa-2x fa-chevron-up"></i></a>
			</button>

<footer>
<div class="footer">
    <p class="copyright"> Ivan Rojas. All Rights Reserved &copy; Copyright 2021 </p>
  <a class="logo-f"href="index.php"><img class="logo-footer"src="img/logo.svg" alt="Logo IR"></a>
  <ul class="footer-links">
    <li><a href="#" class="links home-link"> HOME</a></li>
    <li><a href="php/about.php" class="links about-link"> ABOUT</a></li>
    <li><a href="php/portfolio.php" class="links portfolio-link"> PORTFOLIO</a></li>
    <li><a href="php/resume.php" class="links resume-link"> RESUME</a></li>
    <li><a href="php/contact.php" class="links contact-link"> GET IN TOUCH</a></li>
  </ul>
      
			<section class="social-media">
			<a href="https://www.linkedin.com/in/ivan-leonardo-rojas/" target="_blank"><i class="fab fa-3x fa-linkedin sm-icon"></i></a>	
			<a href="mailto:ivanrojas1210@hotmail.com" target="_blank"><i class="fas fa-3x fa-envelope sm-icon"></i></a>
			<a href="https://www.instagram.com/ivanrojas.1210/" target="_blank"><i class="fab fa-3x fa-instagram-square sm-icon"></i></a>
		</section>
   

		
</div>
</footer>

 <?php include 'includes/scripts.php'?>

</body>

</html>