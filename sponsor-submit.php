<?php
include_once ("conn.php");
use PHPMailer\PHPMailer\PHPMailer;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$type = $_POST['type'];

$sql = 'INSERT INTO our_sponsors(`first_name`,`last_name`,`email`,`phone`,`description`,`type`) VALUES 
("'.$first_name.'","'.$last_name.'","'.$email.'","'.$phone.'","'.$description.'","'.$type.'")';
$result = mysqli_query($conn, $sql);

if($result){
    // echo $sql;
    
    // echo '<script>alert("Form submitted succesfully");window.open("index.php", "_self");</script>';

    if(isset($_POST['first_name']) && isset($_POST['last_name'])){

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
        $mail->Password = 'rfqmoekyhqsdbjtz';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
    
    
        //email settings
        $mail->isHTML(true);
        $mail->setFrom('deans.conference@pec.org.pk', 'Pakistan Engineering Council'); //from email
        $mail->addAddress("deans.conference@pec.org.pk");
        $mail->Subject = ("PEC Sponsor");
        // $mail->Body = $message;
        {
        $mail->Body = '<b>First Name :</b> '.$_POST['first_name'].'
                    <br><b>Last Name :</b> '.$_POST['last_name'].'
                    <br><b>Email :</b> '.$_POST['email'].'
                    <br><b>Phone no :</b> '.$_POST['phone'].'
                    <br><b>Description :</b> '.$_POST['description'].'
                    <br><b>Type of sponsor :</b> '.$_POST['type'].'
                    ';
        }

            
       if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
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


  