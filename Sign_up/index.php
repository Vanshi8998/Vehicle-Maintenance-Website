<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>User Sign Up</title>
<!-- To set Favicon-->
<link rel="icon" href="../cropped-favicon.png" type="image/gif">
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/mystyle.css" 	type="text/css" media="all">
<!-- Calendar-CSS -->	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">

<style>
.header-w3l 
{
    padding: 0em 0 0em;
}
.header-w3l h1 
{
    font-size: 4.5em;
    color: #ffffff;
    text-shadow: 1px 1px 10px #9a8b89;
    letter-spacing: 4px;
    text-transform: capitalize;
    font-family: 'Satisfy', cursive;
    word-spacing: 7px;
    letter-spacing: 2px;
}
</style>
</head>

<body>
	<div class="header-w3l">
			<a href="../home.php"><h1 style="font-size: 50px;">Vehicle Maintenance</h1></a>
		</div>

	<div class="containerw3layouts-agileits">

		<div class="w3imageaits">
			<img class="user" src="images/user.png" alt="Signup Form">
			<h2>Let's get you set up</h2>
			<p>It should only take you a minute to connect</p>
		</div>

		<div class="aitsloginwthree w3layouts agileits">
			<form action="../Database/save_user.php" method="post">
				<input type="text" Name="name" placeholder="Name" required="">
				<div class="radio-btns agileits w3layouts">
					<div class="cc-selector wthreeselector">
						<p>Gender :</p>
					</div>
					<div class="cc-selector wthreeselector">
						<input id="visa" type="radio" name="gender" value="M" required="">
						<label class="drinkcard-cc visa" for="visa"></label>
					</div>
					<div class="cc-selector wthreeselector">
						<input id="mastercard" type="radio" name="gender" value="F" required="">
						<label class="drinkcard-cc mastercard" for="mastercard"></label>
					</div>
				</div>
				<br><br><br><br>
				<div class="wthreedob">
					<input type="text" Name="dob" placeholder="Date of Birth (yyyy/mm/dd)" required="">
				</div>
				<input class="fill email" type="text" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input class="fill tel" name="contact" placeholder="Phone" required="">
				<input type="text" name="city" placeholder="City" required="">
				<div class="send-button wthree agileits">
					<input type="submit" value="Sign Up">
				</div>
			</form>
		</div>

		<div class="clear"></div>

	</div>

	<div class="w3lsfooteragileits">
		<p>&copy; 2017 Sign In Form. All rights reserved</p>
	</div>



	<!-- Necessary-JavaScript-Files-&-Links -->

		<!-- Default-JavaScript --><script type="text/javascript" src="js/jquery-3.1.1.js"></script>

		<!-- Date-Picker-JavaScript -->
			<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
					$( "#datepicker1" ).datepicker();
				});
			</script>
		<!-- //Date-Picker-JavaScript -->

	<!-- //Necessary-JavaScript-Files-&-Links -->



</body>
<!-- //Body -->



</html>