<head>
    <title>User Dashboard</title>
    <!-- To set Favicon-->
    <link rel="icon" href="../cropped-favicon.png" type="image/gif">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../jquery/jquery.min.js"></script>
    <script src="../javascript/bootstrap.min.js"></script>
    <script src="../css/font-awesome.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        .marg
        {
            margin-left:20px
        }

        .adjus
        {
            width:250px;
            border-style:ridge;
            border-radius:20%
        }
        .change
        {
            color:orangered;
            font-size:20px;
            font-family: "Comic Sans MS";
        }
        .admin
        {
            color:rebeccapurple;
            font-family: Utopia;
            font-size:40px;
        }
.bor
{
    border-radius: 100%;
}
        .bor:hover
        {
            opacity: 0.7;
        }

.lis
{
    color:goldenrod;
    font-family: "Times New Roman";
    text-align: center;
    font-size:20px;
}
.mar
{
    margin-top: 13px;
    margin-right: 30px;
}

          </style>

</head>
<nav class="navbar navbar-inverse upper">
    <div class="container-fluid marg">
        <div class="navbar-header">
            <a class="navbar-brand" href="../home.php"> VEHICLE MAINTANANCE  <i class="fa fa-car" aria-hidden="true"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">

            <?php session_start();
                if(isset($_SESSION["username"]))
                {
                    echo '<li style="color: white;font-size:18px;padding: 6px;margin:7px">Welcome, '.$_SESSION["username"].'</li>
        <li style="padding-left: 5px;margin:7px"><button class="btn btn-danger"><a style="color:white;font-weight: 700" href="logout.php">Log Out</a></button></li>';
                }
                else
                {
                    echo '<li style="color:white;font-size:18px;font-weight:600"><a target="_blank" href="../Sign_in/index.php">LogIn</a></li>
                    <li style="color:white;font-size:18px;font-weight:600"><a target="_blank" href="../Sign_up/index.php">SignUp</a></li>';
                }
            ?>

        
        </ul>
    </div>

</nav>
<head>
    <style>

        body
        {
            background-image:url(car3.jpg);
            background-repeat: no-repeat;
            background-size:100% 100%;
            opacity:0.7 ;
        }
.dec
{

    font-size:15px;
    font-family: "Comic Sans MS";
}
        a:link 
        {
            color: orangered;
            font-size: 23px;
            text-decoration: none;
        }
        a:hover
        {
            color:black;
            background-color: orange;
        }
.head
{
    color: #2222FF;

}
a:visited
{
    color:orangered;
}
</style>
</head>

<body>
<strong>
<b><i><center><p style="font-size:30px;font-family: Utopia">Some Commom problems and solutions</p></center></i></b>
<b><h1 class="head"><u>Engine & Driveability Problems:</u></h1>
<p class="dec"><a target="_blank" href="sol1.html">Troubleshoot Check Engine Light</a></p>

<p class="dec"><a target="_blank" href="sol2.html">Engine Oil Warning Light On</a></p>

<p class="dec"><a target="_blank" href="sol3.html">Engine Vacuum Leaks </a></p>

<p class="dec"><a target="_blank" href="sol4.html">Smoke In Exhaust</a></p>

<br>

<h1 class="head"><u>Brake Problems:</u></h1>
<p class="dec"><a target="_blank" href="sol5.html">ABS Warning Light On</a></p>

<p class="dec"><a target="_blank" href="sol6.html">Brake Warning Light On</a></p>

<p class="dec"><a target="_blank" href="sol7.html">Brakes Noisy</a></p>

<p class="dec"><a target="_blank" href="sol8.html">Brake Failure: No Brakes</a></p>




<br>


</b>
</strong>


</body>
</html>