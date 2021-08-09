<?php

if (isset($_POST['submit'])){
    $err = NULL;
    $success = false;

    // remove the eventual whitespace from the user 
    $_POST['fullname'] = trim($_POST['fullname']);
    $_POST['email'] = trim($_POST['email']);
    

    // ---------- Checking Full Name field ----------
    if ($_POST['fullname']) {
        $fulln = $_POST['fullname'];
    } else {
        $err = '<p class="error">Please enter your name</p>';
    }

    // ---------- Checking Email field ----------
    if ($_POST['email']) {
        $email = $_POST['email'];
    } else {
        $err = $err . '<p class="error">Dont forget to enter your email </p>';
    }

    // ---------- Checking Text-area field ----------
    if ($_POST['message']) {
        $message = $_POST['message'];
    } else {
        $err = $err . '<p class="error">Dont you have any message? </p>';
    }
   // Feedback here ----------
 if (!empty($fulln) && !empty($email) && !empty($message)){
     $success = true;
     $feed ="<p class=\"feedback\">Hello <strong>{$fulln}</strong>. thank you for your message: <em>'{$message}'</em>
      We are going to email you at <strong>{$email}</strong> if any change happens in your program!</p>";
 }
} 
?>
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
          <a class="nav-link" href="../php/portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/resume.php">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact-page" href="../php/contact.php" >Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</header>

<body>

	<form>
			<div class="container contact-form">
				<h2> Contact Me</h2>
				<hr>
		    <section class="box">
    
            <form method="POST" action="contact.php">
            <label class="fullname"for="fullname">Full Name</label><br/>
            <input type="text" id="fullname" name="fullname" value="<?php if(isset($fulln) && !$success) {echo $fulln;} ?>"><br/>

            <label class="email"for="email">Email</label><br/>
            <input type="email" id="email" name="email" value="<?php if(isset($email) && !$success) {echo $email;} ?>"><br/>
                        
            <label class="where" for="where"> Where did you find me?</label><br>
				<select>
						<optgroup label="Social Media">
						<option value="Fb">Facebook</option>
						<option value="Insta">Instagram</option>
						<option value="Link">Linked in</option>
					</optgroup>
					<optgroup label="Other">
						<option value="France">Behance</option>
						<option value="UK">Coroflot</option>
						<option value="Germany">Art station</option>
					</optgroup>

				</select>
				<br><br>
				<label class="info" for="info"> Got a project? Send me some details!</label>
				<textarea id="details"></textarea>
				<br><br>
				<label class="project" for="project"> Is this a personal or commercial project?</label><br>
				<input type="radio" id="personal" name="project" value="personal">
				<label class="personal" for="personal">Personal</label><br>
				<input type="radio" id="commercial" name="project" value="commercial">
				<label class="commercial" for="commercial">Commercial</label><br><br>
				<label class="project" for="Project type"> What is your project about?</label><br>
				<section class="ptype">
					<input type="checkbox" id="type1" name="Logo">
					<label for="type1">Industrial Design</label><br>
					<input type="checkbox" id="type2" name="Package">
					<label for="type2">3D Design</label>
				</section>
				<section class="ptype1">
					<input type="checkbox" id="type3" name="Web Design">
					<label for="type3"> Web Design</label><br>
				
				</section>
				<br>
            <input type="submit" name="submit" value="Submit">
    </form><br/>
            


  

  <?php 

 // If feedback exists
     if (isset($feed)){
         echo $feed;
     }
 // If error(s) exist 
     if (isset($err)){
         echo $err;
     }
     ?>
</div>
<br><br>
<footer>
  <?php include '../includes/footer.php'?>
</footer>

  
 <?php include '../includes/scripts.php'?>
</body>

</html>