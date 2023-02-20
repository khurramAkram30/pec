<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    echo "<script> window.confirm('Are you sure to logout?');</script>";
header("Location: login.php"); 
exit();
}
?>
