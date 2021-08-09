<!doctype html>
<html lang="en">

<head>
    <?php include '../includes/meta.php'?>

  <?php include '../includes/styles.php'?>
   
       
</head>

<header>
 <?php include '../includes/navigation.php'?>
</header>

<body>
<div class="container portfolio">

<h2 class="heading-p"> Abandoned Room Project </h2>

<img class="hero-img" src="../img/room-1.jpg" alt="Room Project Image">

<ul class="date">
<li class="resume-p date">
<i class="fas fa-2x fa-calendar-alt"></i>
<p class="p"><time datetime="2016-05-14">June, 2016</time></p>
</li><br>
<li class="resume-p date"><i class="fas fa-2x fa-map-marker-alt"></i>
<p class="p">Bogota, Colombia</p>
</li>
</ul>

<p class="description-p">This project was modelled in my free time when I was learning how to use Autodesk Maya </p>


<!--GALLERY-->

		<section class="grid-1">

			<section class="gallery">

				<a class="gallery1" href="../img/room.jpg">
					<img src="../img/room.jpg">
				</a>
				<a class="gallery1" href="../img/room-1.jpg">
					<img src="../img/room-1.jpg">
				</a>
			
			</section>
		</section>

    <button  class="back-portfolio">
    <a  class="back-portfolio" href="../php/portfolio.php"> 
    <i class="fas fa-3x fa-arrow-left"></i><h3 class="back-p"> Back to Portfolio Page</h3></a>
    </button>


<button class="btn-top">
				<a href="#top">
					<i class="fas fa-2x fa-chevron-up"></i></a>
			</button>
</div>
<footer>
	<?php include '../includes/footer.php'?>
</footer>
  
 <?php include '../includes/scripts.php'?>
</body>

</html>