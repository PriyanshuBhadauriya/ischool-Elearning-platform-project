<?php
if(!isset($_SESSION)){
	session_start();
}
include('./admininclude/header.php');
include('../dbConnection.php');
if(isset($_SESSION['is_admin_login'])){
	$adminEmail = $_SESSION['adminLogEmail'];
}
else{
	echo "<script> location.href='../index.php';</script>";
}


if(isset($_REQUEST['lessionSubmitBtn'])){
	if(($_REQUEST['lession_name']=="") || ($_REQUEST['lession_disc']=="") || ($_REQUEST['course_id']=="") || ($_REQUEST['course_name']==""))
	{
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">FILL ALL FIELDS</div>';
	}
	else{
		$lession_name = $_REQUEST['lession_name'];
		$lession_disc = $_REQUEST['lession_disc'];
		$course_id = $_REQUEST['course_id'];
		$course_name = $_REQUEST['course_name'];
		$lession_link = $_FILES['lession_link']['name'];
		$lession_link_temp = $_FILES['lession_link']['tmp_name'];
		$link_folder = '../lessionvid'.$lession_link;
		move_uploaded_file($lession_link_temp,$link_folder);

		$sql= "INSERT INTO lession(lession_name, lession_disc, lession_link, course_id, course_name) VALUES ('$lession_name' ,'$lession_disc' ,'$link_folder' ,'$course_id' ,'$course_name')";
		if($conn->query(sql) == TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">COURSE ADDED SUCCESSFULLY</div>';

		}
		else
		{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">UNABLE TO ADD COURSE</div>';
		}

	}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center"> Add New Course</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_id"> Course ID</label>
			<input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($_SESSION['course_id'])){ echo $_SESSION['course_id']}; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_name"> Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($_SESSION['course_name'])){ echo $_SESSION['course_name']}; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="lession_name">Lession Name</label>
			<input type="text" class="form-control" id="lession_name" name="lession_name" >
		</div>
		<div class="form-group">
			<label for="lession_disc">Lession Description</label>
			<textarea class="form-control" id="lession_disc" name="lession_disc" rows="2"></textarea>
		</div>
		<div class="form-group">
			<label for="lession_link">Lession Video Link</label>
			<input type="text" class="form-control-link" id="lession_link" name="lession_link">
		</div>
	
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="lessionSubmitBtn" name="lessionSubmitBtn"> Submit</button>
			<a href="lession.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;}?>
	</form>
</div>
</div> <!-- div row close from hader-->
</div><!-- div container-fluid close from header-->
<?php
  include('./admininclude/footer.php');
?>