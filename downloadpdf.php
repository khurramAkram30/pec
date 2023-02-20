
<?php
//   session_start();
//   if(!isset($_SESSION['UserId'])){
//       header('location: Admin/login.php');
//   }
  
header("Content-Type: application/octet-stream");
  
$file = $_GET["file"]  . ".pdf";

echo $file;
  
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
  
flush(); // This doesn't really matter.
  
$fp = fopen($file, "r");
while (!feof($fp)) {
    echo fread($fp, 65536);
    flush(); // This is essential for large downloads
} 
  
fclose($fp); 


/*download.php*/
// If (!$_POST['file']='') {

// $con=mysqli_connect("localhost","root","");
// if (!$con) { die('Could not connect: '.mysql_error()); }
// mysql_select_db("pec_conference", $con);
// mysqli_query("INSERT INTO registration (first_name, last_name, email, phone, types, `file`) VALUES ('".$_POST['Firstname']."', '".$_POST['Lastname']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['file']."')");
// $path=''; //full path outside the root to downloadable files
// header("Content-disposition: attachment; filename='".$_POST['file']."'");
// header('Content-type: application/pdf;');
// readfile("'".$_POST['file']."'"); }
// else {echo '<form action="'.$_SERVER['php_self'].'" method="post">';
// '<input name="file" type="hidden" value="'.$file.'">';
// 'Firstname ?<input name="Firstname" type="text"><br>';
// 'lastname ?<input name="Lastname" type="text"><br>';
// 'email ?<input name="email" type="text"><br>';
// 'telephone ?<input name="telephone" type="text"><br>';
// '<input name="go" type="submit" Value="Download file"></form>'; }
?>