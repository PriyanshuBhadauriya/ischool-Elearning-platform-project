<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/all.min.js">

  <!--student testimonial Owl slider css-->

  <!--<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="css/owl.min.css">
  <link rel="stylesheet" type="text/css" href="css/testyslider.css">-->
  
  <!-- google font css-->
  
	<title>iSchool</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  bg-dark pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">iSchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
       <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
       <li class="nav-item  custom-nav-item"><a href="courses.php" class="nav-link"> Course</a></li>
       <li class="nav-item  custom-nav-item"><a href="paymentstatus.php" class="nav-link"> Payment Status</a></li>
       <?php
       session_start();
       if(isset($_SESSION['is_login'])){
        echo '<li class="nav-item  custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
       <li class="nav-item  custom-nav-item"><a href="logout.php" class="nav-link"> Logout</a></li>';
       }
       else{
        echo'<li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>';
       }
       ?>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link"> Logout</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>