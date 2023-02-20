<?php
include_once ("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$types = $_POST['conference-types'];

$sql = 'INSERT INTO registration (`first_name`,`last_name`,`email`,`phone`,`types`) VALUES 
("'.$fname.'","'.$lname.'","'.$email.'","'.$phone.'","'.$types.'")';
$result = mysqli_query($conn, $sql);

if($result){
    // echo $sql;
    
    echo '<script>alert("Form submitted succesfully");window.open("index.php", "_self");</script>';

}else{
    echo $sql;
}
?>