<html>
<head>
<title>Administrator</title>
<link rel="icon" href="../cropped-favicon.png" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body class="bg agileinfo">
   <a href="../home.php"><h1 class="agile_head text-center"> Vehicle Maintenance</h1></a>
   <div class="w3layouts_main wrap">
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>LogIn</li>
                <li>SignUp</li>
            </ul>
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="#" method="post" class="agile_form">
					  <p>Email</p>
					  <input type="email" name="username" required="required" />
					  <p>Password</p>
					  <input type="password" name="username" required="required" class="password" /> 
					  <br><br>
					  <input type="submit" value="LogIn" class="agileinfo" />
					</form>
					 <div class="login_w3ls">
				        <a href="#">Forgot Password</a>
					 </div>
                    
                </div>
                <div class="agile_its_registration">
                    <form action="#" method="post" class="agile_form">
					  <p>Username</p>
					  <input type="text" name="username" required="required" />
					  <p>Email</p>
					  <input type="email" name="email" required="required" />
					  <p>Password</p>
					  <input type="password" name="Password" id="password1"  required="required">
					  <p>Confirm Password</p>
					  <input type="password" name="Confirm Password" id="password2"  required="required">
         	  			<div class="check w3_agileits">
							<label class="checkbox w3"><input type="checkbox" name="checkbox" required="required" ><i> </i>I accept the terms and conditions</label>
						</div>
					   <input type="submit" value="Signup"/>
					   <input type="reset" value="Reset" />
					</form> 
				</div>
            </div>
        </div>
		 <!-- //Horizontal Tab -->
    </div>
	<div class="agileits_w3layouts_copyright text-center">
			<p>&copy; 2017 Admin Form. All rights reserved</p>
	</div>
<!--tabs-->
<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!--//tabs-->
</body>
</html>

