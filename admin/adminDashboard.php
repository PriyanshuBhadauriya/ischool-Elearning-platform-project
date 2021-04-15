<?php
if(!isset($_SESSION)){
	session_start();
}
include('../dbConnection.php');
if(isset($_SESSION['is_admin_login']))
{
	$adminEmail = $_SESSION['adminLogEmail'];

}else{
	//echo "<script> location.href='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Document</title>

	<!-- bootstrap css-->
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<!--font awesome css-->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<!-- custom css-->
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
</head>
<body>
	<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-Learning <small> Admin Area</small></a>
	</nav>
	<!--side bar-->
	<div class="container-fluid mb-5" style="margin-top:40px;">
		<div class="row">
			<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-link">
							<a  class="nav-link" href="adminDashboard.php">
								<i class="fas fa-tachometer-alt"></i>Dashboard
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="courses.php">
								<i class="fab fa-accessible-icon"></i>Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">
								<i class="fab fa-accessible-icon"></i>Lessons
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-users"></i>Students
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-table"></i>Sell Report
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-table"></i>Payment Status
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="stufeedback.php">
								<i class="fab fa-accessible-icon"></i>Feedback
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-key"></i>Change Password
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../logout.php">
								<i class="fab fa-sign-out-alt"></i>Logout
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="col-sm-9 mt-5">
				<div class="row mx-5 text-center">
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
							<div class="card-header">Courses</div>
							<div class="card-body">
								<h4 class="card-title">5</h4>
								<a class="btn text-white" href="#">View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
							<div class="card-header">Students</div>
							<div class="card-body">
								<h4 class="card-title">25</h4>
								<a  class="btn text-white" href="#">View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
							<div class="card-header">Sold</div>
							<div class="card-body">
								<h4 class="card-title">3</h4>
								<a class="btn text-white" href="#">View</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mx-5 mt-5 text-center">
					<!--Table-->
					<p class="bg-dark text-white p-2">Course Ordered</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Order ID</th>
								<th scope="col">Course ID</th>
								<th scope="col">Student Email</th>
								<th scope="col">Order Date</th>
								<th scope="col">Amount</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">22</th>
								<td>100</td>
								<td>sonam@gmail.com</td>
								<td>20/10/2020</td>
								<td>2000</td>
								<td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- jquery and bootstrap javascript-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript " src="../js/popper.min.js"></script>
<script type="text/javascript" src="../bootstrap.min.js"></script>
<!-- font awesome-->
<script type="text/javascript" src="../js/all.min.js"></script>
<!-- admin ajax call javascript-->
<script type="text/javascript" src="..js/adminajaxrequest.js"></script>
<!-- custom javascript-->
<script type="text/javascript" src="..js/custom.js"></script>

</body>
</html>
