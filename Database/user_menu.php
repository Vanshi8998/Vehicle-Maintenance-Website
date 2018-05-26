<?php 
session_start();
if(!(isset($_SESSION["username"])))
{
	header("Location:../Sign_in/index.php");
}
?>
<html>
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

        .bdyclr
        {
            background-color:black;
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
<body class="bdyclr">
<nav class="navbar navbar-inverse upper">
    <div class="container-fluid marg">
        <div class="navbar-header">
            <a class="navbar-brand" href="../home.php"> VEHICLE MAINTANANCE  <i class="fa fa-car" aria-hidden="true"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="margin: 7px">
        <li style="color: white;font-size:18px;padding: 6px">Welcome, <?php echo $_SESSION["username"];?></li>
        <li style="padding-left: 5px"><button class="btn btn-danger"><a style="color:white;font-weight: 700" href="logout.php">Log Out</a></button></li>
        </ul>
    </div>

</nav>
</body>
</html>