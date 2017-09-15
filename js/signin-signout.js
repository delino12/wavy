// on login 
	$("#login-btn").click(function (){
		$("#login-btn").hide();
		$("#login-form").show();
		$("#first-signup").hide();
	});

	// on create account 
	$("#create-account-btn").click(function (){
		$("#create-account-btn").hide();
		$("#create-account-form").show();
		$("#first-login").hide()
	});

	function loginStudent()
	{
		var username = $("#username").val();
		var password = $("#password").val();

		$.ajax({
			type: "POST",
			url: "../__factory/login-students.php",
			data: {
				username:username,
				password:password
			},
			cache:false,
			success: function (data)
			{
				$("#login-stat").html(data);
			}
		});
		return false;
	}

	function createAccount()
	{
		var studentNo = $("#student_no").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var phone = $("#phone").val();

		$.ajax({
			type: "POST",
			url: "../__factory/register-students.php",
			data: {
				studentNo:studentNo,
				email:email,
				password:password,
				phone:phone
			},
			cache: false,
			success: function (data){
				$("#signup-stat").html(data).show();
			}
		});
		return false;
	}