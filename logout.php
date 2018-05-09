<?php
session_start();
session_destroy();

// unset()  to delete individual variable of session
header("Location:home.php");
?>


