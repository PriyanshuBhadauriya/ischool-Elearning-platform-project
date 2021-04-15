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
       <li class="nav-item  custom-nav-item"><a href="studentProfile,php" class="nav-link">My Profile</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link"> Logout</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid ">
  <div class="row">
    <img src="image/python.png" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;"/>
  </div>
  <!-- start course page content-->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="image/guiter.jpg" class="card-img-top" alt="Guiter"/>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Course Name: Learn Guiter</h5>
        <p class="card-text">Description:Lorum Ipsum dolor sit, amet consector adisiscing elit. Facilis, nemo.</p>
        <p class="card-text">Duration:10 Days</p>
        <form action="" method="post">
          <p class="card-text d-inline">Price:<small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
          <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
          
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <table class="table table-bordered table-hover">
        <thread>
          <tr>
            <th scope="col">Lesson No.</th>
            <th scope="col">Lesson Name</th>
          </tr>
        </thread>
      </table>
    </div>
  </div> 
  <!--end main content-->
  







  <!-- Start Footer-->
      <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &Copy;2021 || Designed By E-Learning ||<a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter" >Admin Login</a></small>
      </footer><!-- end footer-->

      
<!-- strat student registration modal-->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenter">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--form-->
        <form>
  <div class="form-group">
    
    <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
    <input type="text"  class="form-control" placeholder="Name" name="stuname" id="stuname">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stumail" class="pl-2 font-weight-bold">Email</label><br>
    <input type="email" class="form-control" placeholder="Email"name="stuemail" id="stumail">
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
   <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">new Password</label>
    <input type="password"  class="form-control" placeholder="password" name="stupass" id="stupass">
  </div>
  </form>
<!-- end student registration form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Signup</button>
      </div>
    </div>
  </div>
</div>
<!--start login form-->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenter">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--form-->
        <form id="stuLoginForm">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><br>
    <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogmail">
    
  </div>
   <div class="form-group">
    <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password"  class="form-control" placeholder="password" name="stuLogpass" id="stuLogpass">
  </div>
  </form>
<!-- end student login form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>

<!--admin form -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminoginModalCenter">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--form-->
        <form id="adminLoginForm">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><br>
    <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogmail">
    
  </div>
   <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password"  class="form-control" placeholder="password" name="adminLogpass" id="adminLogpass">
  </div>
  </form>
<!-- end student login form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- end admin form-->







<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script  type="text/javascript" src="js/ajaxrequest.js"></script>
<!-- admin ajax call javascript-->
<script  type="text/javascript" src="js/adminajaxrequest.js"></script>
<!--student Testimonial owl slider JS-->
<!--<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>-->
</body>
</html>
