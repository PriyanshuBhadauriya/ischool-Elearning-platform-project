<?php
include_once('../dbConnection.php');
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['is_login'])){
	$stuLogEmail = $_SESSION['stuLogEmail'];
}




if(isset($stuLogEmail)){
	$sql="SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
	$result = $conn->query($sql);
	$row = $result ->fetch_assoc();
	$stu_img=$row['stu_img'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profile</title>
	<!-- bootstrap css-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/stustyle.css">
</head>
<body>
	<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style= "background-color: #225470;"><a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learning</a></nav>
	<div class="container-fluid mb-5" style="margin-top: 40px;">
		<div class="row">
			<nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mb-3">
							<img src="<?php echo $stu_img?>" alt="studentimage" class="img-thumbnail rounded-circle">
						</li>
						<li class="nav-item">
							<a class="nav-link" <?php if(PAGE=='profile'){echo 'active';}?> href="studentProfile.php">
						</li>
						<i class="fas fa-user"></i>
     						Profile<span class="sr-only">(current)</span>
     					</a>
     				</li>
     				<li class="nav-item">
     					<a class="nav-link" href="mycourse.php">
     						<i class="fab fa-accessible-icon"></i>My Courses
     					</a>
     				</li>
     				<li class="nav-item">
     					<a  class="nav-link" href="stufeedback.php"><i class=" fab fa-accessible-icon"></i>Feedback</a>
     				</li>
     				<li class="nav-item">
     					<a class="nav-link" href="studentChangePass">
     						<i class="fas fa-key"> Change Password</i>
     					</a>
     				</li>
     				<li class="nav-item">
     					<a class="nav-link" href="../logout.php">
     						<i class="fas fa-sign-out-alt"></i>Logout
     					</a>
     				</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
</body>