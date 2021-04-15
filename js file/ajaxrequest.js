$(document).ready(function(){
	//ajax call form already exists email verification
	$("#stuemail").on("keypress blur",function(){
		var stuemail =$("#stuemail").val();
		$.ajax({
			url :"Student/addstudent.php",
			method: "POST",
			data:{
				checkmail:"checkmail",
				stuemail: stuemail,
			},
			success:function(data){
				//console.log(data);
				if(data !=0){
					$('#statusMsg2').html(
						'<small style="color:red;">email ID already used!</small>');
					$("#signup").attr("disabled",true);
				}
				else if(data==0){
					$('#statusMsg2').html(
						'<small style="color:red;">email ID already used!</small>');
					$("#signup").attr("disabled",false);
				}

				
			},
		});
	});
});

function addStu(){
	var stuname= $("#stuname").val();
	var stuemail= $("#stuemail").val();
	var stupass= $("#stupass").val();
//checking form fields in form submission

//if(stuname.trim() ==''){
//	$("#statusMsg1").html('<small style="color:red;">Please enter name!</small');
//	$('#stuname').focus();
//	return false;
//}
//else if (stuemail.trim() == ''){
//	$("#statusMsg2").html('<small style="color:red;">Please enter email!</small');
//	$('#stuemail').focus();
//	return false;
//}
//	else if(stupass.trim() == ''){
//	$("#statusMsg3").html('<small style="color:red;">Please enter password!</small');
//	$('#stupass').focus();
//	return false;
//}

	$.ajax({
		url:'Student/addstudent.php', method:'POST',
		data:{
			stusignup:"stusignup",
			stuname: stuname,
			stuemail: stuemail,
			stupass: stupass,
		},
		success:function(data){
			//console.log(data)
		}
		//clearStuRegField();
	});
}
function clearStuRegField(){
	$("#stuRegForm").trigger("reset");
	$("#statusMsg1").html(" ");
	$("#statusMsg2").html(" ");
	$("#statusMsg3").html(" ");
}
//ajax call for student login verfication
function checkStuLogin(){
	var stuLogEmail =$("#stuLogemail").val()
	var stuLogPass = $("#stuLogpass").val()
	$.ajax({
		url : 'Student/addstudent.php',
		method: "POST",
		data:{
			stuLogEmail: "checkLogmail",
			stuLogEmail: stuLogEmail,
			stuLogPass: stuLogPass,
		},
		success: function(data){
			if(data ==0){
				$("#statusLogMsg").html('<small class ="alert alert-danger">Invalid Email Id or pasword!</small>');
			}else if(data ==1){
				$("#statusLogMsg").html('<div class ="spinner-border text-success" role= "status"></div>');
				setTimeout(()=>{
					window.location.href = "index.php";
				},1000);
			}
		},
	});
}
