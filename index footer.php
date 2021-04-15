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
   
