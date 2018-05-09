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
            <a class="navbar-brand" href="home.php"><img src="images/bg-hero-repair-930px-x-250px1.png"></a>
            <a class="navbar-brand" href="home.php"><img src="images/hd4.png"></a>
        </div>
        <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="Sign_up/index.php">SignUp</a></li>
            <?php session_start();
                if(!(isset($_SESSION["username"])))
                {
                    echo '<li style="color:white;font-size: 20px;font-weight: 600;"><a href="Sign_in/index.php">LogIn</a></li>';
                }
                else
                {
                    echo '<li style="color:white;font-size: 20px;font-weight: 600;"><a href="Database/user_dashboard">'.$_SESSION["username"].'</a></li>
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
        <li><a id="list" href="Database/User_garage.php">Garage</a></li>
        <li><a id="list" href="Database/user_serv.php">Service Center</a></li>
        <li><a id="list" href="Database/User_Show.php">Showrooms</a></li>
        <li><a id="list" href="Database/User_Acces.php">Accessories</a></li>
        <li><a id="list" href="Database/UserFuel.php">Find fuel pump</a></li>
        <li><a id="list" href="Database/Solutions.php">Self-Repair</a></li></center>
		</ul>

        </div>
        <div class="col-md-10">
            
            <div id="first">
                <div id="home"></div>
            	<br><br><br><br><br><br><br><br><br><br>
                <center><div class='header-w3l'><h1>Welcome to Our Site</h1></div></center>
            </div>
            <div id="about">
                <div class="container set-pad" style="width:80%;text-align:justify">
                    <div class="row text-center">
                    <div>
                        <h1 class="header-line"> ABOUT US </h1>
                    </div>
                    <div>
                        <p style="font-size:17px; padding-top:20px">This is more of a work-around than a solution: While this helps with the top of the page, anchors and such still don't work. If you scroll to a subsection using anchors, the title of the subsection will be behind the navigation bar.This dynamicity is not covered by regular CSS so I can only think of one way to solve this problem if the user has JavaScript enabled. Please try the following jQuery code snippet to resolve case scenarios 1 and 2."</p>
                        <p style="font-size:17px; padding-bottom:100px">I guess the problem you have is related to the dynamic height that the fixed navbar at the top has. For example, when a user logs in, you need to display some kind of "Hello [User Name]" and when the name is too wide, the navbar needs to use more height so this text doesn't overlap with the navbar menu. As the navbar has the style "position: fixed", the body stays underneath it and a taller part of it becomes hidden so you need to "dynamically" change the padding at the top every time the navbar height changes which would happen in the following case.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="container set-pad" style="width:80%;text-align:justify">
                    <div class="row text-center">
                    <div>
                        <h1 class="header-line"> CONTACT US </h1>
                    </div>
                    <div>
                        <p style="font-size:17px; padding-top:20px;">This is more of a work-around than a solution: While this helps with the top of the page, anchors and such still don't work. If you scroll to a subsection using anchors, the title of the subsection will be behind the navigation bar.This dynamicity is not covered by regular CSS so I can only think of one way to solve this problem if the user has JavaScript enabled. Please try the following jQuery code snippet to resolve case scenarios 1 and 2."</p>
                        <p style="font-size:17px; padding-bottom:100px">I guess the problem you have is related to the dynamic height that the fixed navbar at the top has. For example, when a user logs in, you need to display some kind of "Hello [User Name]" and when the name is too wide, the navbar needs to use more height so this text doesn't overlap with the navbar menu. As the navbar has the style "position: fixed", the body stays underneath it and a taller part of it becomes hidden so you need to "dynamically" change the padding at the top every time the navbar height changes which would happen in the following case.</p>
                    </div>
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