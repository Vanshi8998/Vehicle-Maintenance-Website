<?php
session_start();
session_destroy();
setcookie("userid","",time()-1);
// unset()  to delete individual variable of session
header("Location:userlogin.php");
?>


