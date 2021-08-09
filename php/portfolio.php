<!doctype html>
<html lang="en">

<head>
    <?php include '../includes/meta.php'?>

  <?php include '../includes/styles.php'?>
   
       
</head>

<header>
  <div class="container" id="top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #252628;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../img/logo.svg" alt="Logo IR"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link portfolio-page" href="../php/portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/resume.php">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/contact.php" >Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</header>

<body>
<div class="container portfolio">

<h2> Portfolio</h2>
<div class="container bg-h">
    <h3 class="headings" id="industrial-design"> Industrial Design</h3>
    
   <a class="block1" href="../php/ind-page1.php"><h3 class="link-1">Sta. Teresita</h3><img class="portfolio-b "src="../img/industrial-1.png" alt=""></a>
   <a class="block2" href="../php/ind-page2.php"><h3 class="link-1">Virrey IV</h3><img class="portfolio-b"src="../img/industrial-2.png" alt=""></a>
    <a class="block3" href="../php/ind-page3.php"><h3 class="link-1">Luxxo</h3><img class="portfolio-b"src="../img/industrial-3.png" alt=""></a>
    <a class="block4" href="../php/ind-page4.php"><h3 class="link-1">P.o.p Design</h3><img class="portfolio-b"src="../img/industrial-4.png" alt=""></a>
   
</div>

<div class="container bg-h">
    <h3 class="headings"> 3D Design</h3>
    
   <a class="block1" href="../php/3d-page1.php"><h3 class="link-1">3d Room</h3><img class="portfolio-b "src="../img/3d-1.png" alt=""></a>
   <a class="block2" href="../php/3d-page2.php"><h3 class="link-1">Agropoliz</h3><img class="portfolio-b"src="../img/3d-3.png" alt=""></a>
    <a class="block3" href="../php/3d-page3.php"><h3 class="link-1">Poker Table</h3><img class="portfolio-b"src="../img/3d-4.png" alt=""></a>
    <a class="block4" href="../php/3d-page4.php"><h3 class="link-1">Bathroom</h3><img class="portfolio-b"src="../img/3d-2.png" alt=""></a>
   
</div>

<div class="container bg-h">
    <h3 class="headings"> Web Design</h3>
    
   <a class="block1" href="../php/web-page1.php"><h3 class="link-1">Cafe Colombia</h3><img class="portfolio-b "src="../img/web-1.png" alt=""></a>
   <a class="block2" href="../php/web-page2.php"><h3 class="link-1">Store Catalog</h3><img class="portfolio-b"src="../img/web-2.png" alt=""></a>
    <a class="block3" href="../php/web-page3.php"><h3 class="link-1">Camic</h3><img class="portfolio-b"src="../img/web-3.png" alt=""></a>
    <a class="block4" href="../php/web-page4.php"><h3 class="link-1">Barrels & Stills</h3><img class="portfolio-b"src="../img/web-4.png" alt=""></a>
   
</div>
</div>
<button class="btn-top">
				<a href="#top">
					<i class="fas fa-2x fa-chevron-up"></i></a>
			</button>
<footer>
  <?php include '../includes/footer.php'?>
</footer>
  
 <?php include '../includes/scripts.php'?>
</body>

</html>