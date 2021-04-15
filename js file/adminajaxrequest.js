function checkAdminLogin(){
     
	var adminLogEmail =$("#adminLogmail").val()
	var adminLogPass = $("#adminLogpass").val()
	$.ajax({
		url : 'Admin/admin.php',
		method: "POST",
		data:{
			checkLogEmail: "checkLogmail",
			adminLogEmail: adminLogEmail,
			adminLogPass: adminLogPass,
		},
		success: function(data){
			if(data ==0){
				$("#statusAdminLogMsg").html('<small class ="alert alert-danger">Invalid Email Id or password!</small>');

			}
			else if(data ==1){
				$("#statusAdminLogMsg").html('<small class ="alert alert-danger">Success Loading....</small>');
				setTimeout(()=>{
					window.location.href = "Admin/adminDashboard.php";
				}, 1000);
			}
		},
	});
}