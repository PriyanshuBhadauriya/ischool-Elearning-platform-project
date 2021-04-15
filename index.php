
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
       <li class="nav-item  custom-nav-item"><a href="studentProfile.php" class="nav-link">My Profile</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link"> Logout</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
       <li class="nav-item  custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--End navigation-->	
<!-- start video background-->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/kyvi.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my content"> Welcome to iSchool</h1>
    <small class="my-content"> Learn and Implement</small><br/>
    <?php
      if(!isset($_SESSION['is_login'])){
        echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter"> Get Started</a>
    ';
      }
      else {
        echo '<a href="student/studentProfile.php" class ="btn btn-primary mt-3">My Profile</a>';
      }

    ?>
    <!--<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter"> Get Started</a>-->
    
  </div>
</div>
<!--end video-->
<!--Start text banner-->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Course</h5>

    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert Instructor</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
    </div>
  </div>
</div>
<!-- end text-->
<!-- start most popular course-->
<h1  class=" c" style="text-align: center;"> Popular Course</h1>
<div class="card-group">
  <div class="card">
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
    <img src="image/guiter.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Learn Guiter</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Facilis, nemo.</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 2000<span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </a></small></p>
    </div>
  </div>
  
  <div class="card">
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
    <img src="image/guiter.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Learn Guiter</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Facilis, nemo.</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 2000<span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </a></small></p>
    </div>
  </div>

  <div class="card">
    <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px;">
    <img src="image/guiter.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Learn Guiter</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Facilis, nemo..</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 2000<span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
      
    </a></small></p>
    </div>
  </div>
</div>
  <!-- end most popular 1 card-->
  <!-- start most popular course 2 card-->
<div class="card-group">
  <div class="card">
    <img src="image/python.png" class="card-img-top" alt="Python">
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Fugiat, error.</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 4000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        
    </a></small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/python.png" class="card-img-top" alt="Python">
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Fugiat, error.</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 4000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        
    </a></small></p>
    </div>
  </div>
  <div class="card">
    <img src="image/python.png" class="card-img-top" alt="Python">
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
      <p class="card-text">Lorum Ipsum dolor sit, amet consector adisiscing elit. Fugiat, error.</p>
      <p class="card-text">Price:<small class="text-muted"><del>&#8377 4000</del></small><span class="font-weight-bolder">&#8377 200</span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
        
    </a></small></p>
    </div>
  </div>
</div>
  <!--end 2 card-->
  <div class="text-center m-2">
    <a  class=" btn btn-danger btn-sm"href="courses.php"> View All Course</a>
  </div>

</div>
<!-- end popular course-->
<!-- start contact us-->
<div class="container mt-4" id="Contact">
  <!-- contact container-->
  <h2 class="text-center mb-4">Contact US</h2>
  <!-- headind conatct-->
  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <input type="text"  class="form-control"name="name" placeholder="Name"><br>
        <input type="text" class="form-control" name=" Subject" placeholder="Subject"><br>
        <input type="email" class="form-control" name=" email" placeholder="E-mail"><br>
        <textarea class="form-control" name="message" placeholder="How can we help you?" style="height: 150px;"></textarea><br>
        <input  class="btn btn-primary"type="submit"  value="Send"name="submit"><br><br>
      </form>
    </div>
    <div class="col-md-4 stripe text-white text-center">
      <h4>iSchool</h4>
      <p>iSchool,
      Near Police Camp11, Bokaro,
      Jharkhand - 1248525<br/>
      Phone: +0000000000<br/>
    www.ischool.com</p>
    </div>
  </div>
</div>
<!-- start students testimonial-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <h1 class="text-center testyheading p-4"> Students Feedback</h1>
    <div class="carousel-item active">
      <img src="image/pri.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
       <p class="description">
          Lorem ipsum dolor sit amet consector adipiscing elit.
        Expedita,dignissimos blanditiis.
      </p>
      <img src="image/pri.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/pri.jpg" class="d-block w-100" alt="...">
       <h4>Priyanshu</h4>
            <small>Web Developer</small>
    </div>
  </div>
</div>
<!--end student testimonial-->
<!--start social-->
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a  class="text-white social-hover" href="#"><i class="fab fa-facebook"></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a  class=" text-white social-hover"href="#"><i class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a  class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
    </div>
     <div class="col-sm">
      <a  class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
    </div>
  </div>
</div><!-- end social-->
<!-- start about section-->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About us</h5>
        <p>iSchool provides universal acess to the world best education, partnering with top universities and organisation to offer course online</p>
      </div>
      <div class="col-sm">
        <h5>Catagory</h5>
        <a  class=" text-dark"href="#">Web Development</a><br/>
        <a  class=" text-dark"href="#">Web Designing</a><br/>
      <a  class=" text-dark"href="#">Andriod App Dev</a><br/>
      <a  class=" text-dark"href="#">IOS Development</a><br/>
      <a  class=" text-dark"href="#">Data Analysis</a><br/>
    </div>
    <div class="col-sm">
      <h5>Contact US</h5>
      <p>iSchool Pvt Ltd <br>Near Police Camp IT<br> Bokaro,Jharkhand<br> ph.0000000000</p>
    </div>
      </div>
      </div>
      </div>
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
        <form id="stuRegForm">
  <div class="form-group">
    
    <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusMsg1"></small>
    <input type="text"  class="form-control" placeholder="Name" name="stuname" id="stuname">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stumail" class="pl-2 font-weight-bold">Email</label>
    <small id="statusMsg2"></small><br>
    <input type="email" class="form-control" placeholder="Email"name="stuemail" id="stumail">
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
   <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">new Password</label><small id="statusMsg3"></small>
    <input type="password"  class="form-control" placeholder="password" name="stupass" id="stupass">
  </div>
  </form>
<!-- end student registration form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Signup</button>
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
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
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
        <!-- admin form-->
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
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
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
<script type="text/javascript"></script>

<!--student Testimonial owl slider JS-->
<!--<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>-->
</body>
</html>
