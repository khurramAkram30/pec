<?php
include_once ("conn.php");
use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = 'INSERT INTO contact (`name`,`email`,`message`) VALUES 
("'.$name.'","'.$email.'","'.$message.'")';
$result = mysqli_query($conn, $sql);

if($result){
    if(isset($_POST['name']) && isset($_POST['email'])){

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    
        $mail = new PHPMailer();
    
        //smtp settings
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com"; // host name
        $mail->SMTPAuth = true;
        $mail->Username = "deans.conference@pec.org.pk";
        $mail->Password = 'cfyiqbynqiarient';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
    
    
        //email settings
        $mail->isHTML(true);
        $mail->setFrom('deans.conference@pec.org.pk', 'Pakistan Engineering Council'); //from email
        $mail->addAddress("deans.conference@pec.org.pk");
        $mail->Subject = ("PEC Submission");
        // $mail->Body = $message;
        $mail->Body = 'Name : '.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Message : '.$_POST['message'];
        // $mail->Body = 'Thanks for submitting your Contact Form.';
    
       if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
        echo '<script>
         alert("Sent Successfully");
        window.location = "index.php";
        </script>';
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
    
        // exit(json_encode(array("status" => $status, "response" => $response)));
    }
    // echo '<script>alert("Form submitted succesfully");window.open("index.php", "_self");</script>';

}else{
    echo $sql;
}
?>