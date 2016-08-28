$("#Register").submit(function(event){
	var pass = $("#password").val();
	var cpass = $("#cpass").val();
	var user = $("#newuser").val();
	var email = $("#email").val();

	//alert(pass + " " + cpass + " " + email + " " + user);
	if(user != "" && pass != "" && cpass != "" && email != "")
	{
		var errormsg = $("#error");
		if(cpass != pass)
		{
			errormsg.html("<p style='color: white'>The passwords don\'t match</p>");
			event.preventDefault();
		}
		else
		{
			if(!isValidEmailAddress(email))
			{
				errormsg.html("<p style='color: white'>Please enter a valid Email address</p>");
					event.preventDefault();
			}
			event.run();
		}	
	}
});

$("#profile").submit(function(event){
	var name = $("#name").val();
	var Lname = $("#lastN").val();
	var bday = $("#cump").val();
	//alert(name + " " + Lname + " " + bday);
	if(name == "" && Lname == "" && (bday =="" || bday == "01/01/1900"))
	{
		var errormsg = $("#error");
		errormsg.css("background-color", "#FCA3A3");
		errormsg.html("<p style='color: red'>Please fill the name, Last name and Birthday</p>");
		event.preventDefault();
	}
});

$("#Login").submit(function(event){
	var user = $("#email").val();
	var pass = $("#password").val();
	//alert(user + " " + pass);
	if(user == "" || pass == "")
	{
		var errormsg = $("#error");
		errormsg.css("background-color", "#FCA3A3");
		if(user == "")
		{
			errormsg.html("");
			errormsg.html("<p style='color: red'>Please write your Email and password</p>");
		}
		else
		{
			if(pass == "")
			{
				errormsg.html("");
				errormsg.html("<p style='color: red'>Please write your password</p>");
			}
		}
		event.preventDefault();
	}
	else
	{
		event.run();
	}
});

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

//alert(pass + " " + cpass + " " + email + " " + user);
			/*$.ajax({
                data:  email: email, user: user, password: pass,
                url:   '../process/signupMethod.php',
                type:  'post',
                beforeSend: function () {
                        errormsg.html("<p style='color: white'>The user is now registered.</p>");
                },
                success:  function (response) {
                        errormsg.html("<div class=\"alert alert-danger\" role=\"alert\">Error. Username already taken.</div>");
                }
        	});
			//errormsg.html("");
			event.preventDefault();*/