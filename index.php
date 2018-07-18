<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="author" content="Shriyam Verma"/>
	<meta name="description" content="Vehicle Maintenance Website"/>
    <title>Vehicle Maintenance</title>
    
	<!-- To set Favicon-->
	<link rel="icon" href="cropped-favicon.png" type="image/gif">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>

    <!-- FONT AWESOME CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="formatting3.css" rel="stylesheet" />
	
<style type="text/css">
.header-w3l h1 
{
    font-size: 80px;
    color: #2255ff;
    text-shadow: 1px 1px 1px #9a8b89;
    letter-spacing: 4px;
    text-transform: capitalize;
    font-family: 'Satisfy', cursive;
    word-spacing: 7px;
    letter-spacing: 2px;
}
</style>

</head>

<body>

<div class="navbar-wrapper">
    <nav class="navbar logo-bar navbar-fixed-top" style="margin-bottom:0px;"/>
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="images/bg-hero-repair-930px-x-250px1.png"></a>
            <a class="navbar-brand" href="index.php"><img src="images/hd4.png"></a>
        </div>
        <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <?php session_start();
                if(!(isset($_SESSION["username"])))
                {
                    echo '<li style="color:white;font-size: 20px;font-weight: 600;"><a href="Sign_up/index.php">SignUp</a></li>';
                    echo '<li style="color:white;font-size: 20px;font-weight: 600;"><a href="Sign_in/index.php">LogIn</a></li>';
                }
                else
                {
                    echo '<li style="color:white;font-size: 20px;font-weight: 600;"><a href="Database/user_dashboard.php">'.$_SESSION["username"].'</a></li>
                    <li style="color:white;font-size: 20px;font-weight: 600;"><button style="margin:7px" class="btn btn-danger"><a style="color:white;font-weight:700;" href="logout.php">Log Out</a></button></li>';
                }
            ?>            
            <li><a></a></li>
        </ul>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        <ul id=menu>
        <center>
        <div id="left_img" style="border-radius: 10px"></div>
        <li><a id="list" href="Database/user_garage.php">Garage</a></li>
        <li><a id="list" href="Database/user_serv.php">Service Center</a></li>
        <li><a id="list" href="Database/user_show.php">Showrooms</a></li>
        <li><a id="list" href="Database/user_access.php">Accessories</a></li>
        <li><a id="list" href="Database/UserFuel.php">Find fuel pump</a></li>
        <li><a id="list" href="Database/Solutions.php">Self-Repair</a></li></center>
		</ul>

        </div>
        <div class="col-md-10">
            
            <div id="first">
                <div id="home"></div>
            	<br><br><br><br><br><br><br><br><br><br>
                <center><div class='header-w3l'><h1>Welcome to the Site</h1></div></center>
            </div>
            <div id="about">
                <div class="container set-pad" style="width:80%;text-align:justify">
                    <div class="row text-center">
                    <div>
                        <h1 class="header-line"> ABOUT </h1>
                    </div>
                    <div>
                        <p style="font-size:17px; padding-top:20px;text-align: justify;">This project aims to make people carefree about the maintenance of their vehicle. Finding a reliable and honest automobile repair garage can be tough, so there’s a need of a source to provide us with reviews of garages. At times, we are short of fuel and the location of a nearby fuel pump is required. My project can further be expanded to cover each and every city to have a wide range to select from. Further it can also be expanded to a country-wide level. It can also be incorporated with several websites providing guides and apps for some other use such as cab service etc.</p>
                        <p style="font-size:17px; padding-bottom:100px;text-align: justify;">This project would make a significant contribution in the day to day life of all vehicle owners. They would no longer have to worry about car break down at an unknown place, our site will provide all the contact details of nearby repair shops.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="container" style="width:80%;text-align:justify">
                    <div class="row text-center">
                        <iframe style="border-width:0px;height: 100%;width: 100%;" scrolling="auto" src="Contact/index.html"></iframe>
                    </div>
                </div>
            </div>
            
            <section id="credits" class="text-center">
                <span class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                </span><br/>
                © 2017 Vehicle Maintenance Web Site | All Rights Reserved.
                <br/>
            </section>
        </div>
        </div>
    </div>
</body>