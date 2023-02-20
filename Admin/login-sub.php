<?php
include_once("../conn.php");

$sql = 'SELECT `email`,`password`,`id` FROM `login` WHERE email = "'.$_POST['email'].'" AND password = "'.$_POST['password'].'" ';
// echo $sql;
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ){
    // session check start
    session_start();
    $_SESSION['UserId'] = $result->fetch_assoc()['id'];
    // session check end
    
    header("location:index.php");

}else{
    echo '<script>alert("Incorrect Credential!!");window.open("login.php", "_self");</script>';
    // header('location:login-form-v13/Login_v13/index.php');
}

?>